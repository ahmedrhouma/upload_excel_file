<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use \PDO;

class ElectorsController extends Controller
{

    /**
     * @Route("/Electors", name="Electors")
     */
    public function ElectorsAction()
    {
        require_once "../../Classes/PHPExcel.php";
        require_once '../../Classes/PHPExcel/IOFactory.php';
        if (isset($_POST["btnInport"])) {
            if (!empty($_FILES["excelFile"]["tmp_name"])) {
                $fileName = explode(".", $_FILES["excelFile"]["name"]);
                if ($fileName[1] == "xls") {
                    echo "Processing !!!";
                    $file = $_FILES["excelFile"]["tmp_name"];

                    $inputFileType = \PHPExcel_IOFactory::identify($file);
                    $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($file);

//  Get worksheet dimensions

                    $arrayLabel = array("A", "B", "C", "D","E","F","G");

                    $inputFileType2 = \PHPExcel_IOFactory::identify($file);
                    $objReader2 = \PHPExcel_IOFactory::createReader($inputFileType2);
                    $objPHPExcel2 = $objReader2->load($file);

                    $worksheet2 = $objPHPExcel2->getSheetbyName('ELECTORS');
                    $highestRow2 = $worksheet2->getHighestRow();
                    for ($row = 1; $row <= $highestRow2; $row++) {
                        $j = 0;
                        $tab = $worksheet2->getCell('A' . $row)->getValue();
                        $id = $tab;
                        var_dump($id);


                        $j = 1;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('B' . $row)->getValue();
                            $First_name = $tab;
                            var_dump($First_name);

                        }


                        $j = 2;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('C' . $row)->getValue();
                            $Last_name = $tab;
                            var_dump($Last_name);
                        }


                        $j = 3;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('D' . $row)->getValue();
                            $Language = $tab;
                            var_dump($Language);
                        }
                        $j = 4;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('E' . $row)->getValue();
                            $NatNu = $tab;
                            var_dump($NatNu);
                        }
                        $j = 5;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('F' . $row)->getValue();
                            $Method = $tab;
                            var_dump($Method);
                        }
                        $j = 6;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('G' . $row)->getValue();
                            $Ballot_id = $tab;
                            var_dump($Ballot_id);
                        }


                        try {
                            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                        } catch (Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }


                        $req1= $bdd->prepare('INSERT INTO eletor(id ,First_name, Last_name,Language,NatNum,Method,Ballot_id) VALUES ($id, $First_name, $Last_name, $Language, $NatNu,$Method,$Ballot_id)');

                        $req1->execute(array('id' => $id, 'First_name' => $First_name, 'Last_name' => $Last_name, 'Language' => $Language, 'NatNum' => $NatNu, 'Method' => $Method, 'Ballot_id' => $Ballot_id));


                    }

                } else {
                    echo "you must choose a CVS file to import !!!";
                }

            } else {
                echo "you must choose a file !!!";
            }
            echo "you cliked the botton !!!";
        }
return $this->render('test.html.twig');
}
}
?>
