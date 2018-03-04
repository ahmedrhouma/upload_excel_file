<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use \PDO;

class test2Controller extends Controller
{

    /**
     * @Route("/candidate", name="candidate")
     */
    public function test2Action()
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

                    $arrayLabel = array("A", "B", "C", "D");

                    $inputFileType2 = \PHPExcel_IOFactory::identify($file);
                    $objReader2 = \PHPExcel_IOFactory::createReader($inputFileType2);
                    $objPHPExcel2 = $objReader2->load($file);

                    $worksheet2 = $objPHPExcel2->getSheetbyName('CANDIDATES');
                    $highestRow2 = $worksheet2->getHighestRow();
                    for ($row = 1; $row <= $highestRow2; $row++) {
                        $j = 0;
                        $tab = $worksheet2->getCell('A' . $row)->getValue();
                        $Ballot_id = $tab;
                        var_dump($Ballot_id);


                        $j = 1;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('B' . $row)->getValue();
                            $type = $tab;
                            var_dump($type);

                        }


                        $j = 2;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('C' . $row)->getValue();
                            $NL = $tab;
                            var_dump($NL);
                        }


                        $j = 3;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet2->getCell('D' . $row)->getValue();
                            $FR = $tab;
                            var_dump($FR);
                        }
                        try {
                            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                        } catch (Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }


                        $req1 = $bdd->prepare('INSERT INTO Candidate(language ,type, list,Ballot_id) VALUES (:FR,:type,:NL,:Ballot_id)');
                        $req1->execute(array('FR' => $FR, 'type' => $type, 'NL' => $NL, 'Ballot_id' => $Ballot_id));

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
