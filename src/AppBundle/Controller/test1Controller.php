<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use \PDO;

class test1Controller extends Controller
{

    /**
     * @Route("/ballot", name="ballot")
     */
    public function test1Action()
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

                    $arrayLabel = array("A", "B", "C", "D", "E");

                    $worksheet = $objPHPExcel->getSheetbyName('ballot');
                    $highestRow = $worksheet->getHighestRow();
                    for ($row = 1; $row <= $highestRow; $row++) {
                        $j = 0;
                        $tab = $worksheet->getCell('A' . $row)->getValue();
                        $Event_id = $tab;
                        var_dump($Event_id);

                        $j = 1;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet->getCell('B' . $row)->getValue();
                            $Language = $tab;
                            var_dump($Language);

                        }

                        $j = 2;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet->getCell('C' . $row)->getValue();
                            $Label = $tab;
                            var_dump($Label);
                        }

                        $j = 3;
                        if ($j < count($arrayLabel)) {
                            echo "<tr><td>";
                            $tab = $worksheet->getCell('D' . $row)->getValue();
                            $Description = $tab;
                            var_dump($Description);
                        }

                        try {
                            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
                        } catch (Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }
                        $req1 = $bdd->prepare('INSERT INTO ballot(Language,Label,Description,Event_id) VALUES (:Language,:Label,:Description,:Event_id)');
                        $req1->execute(array('Language' => $Language, 'Label' => $Label, 'Description' => $Description, 'Event_id' => $Event_id));
                        $req = null;
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