<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use \PDO;

class testController extends Controller
{  /**
     * @Route("/upload", name="upload")
     */

    public function testAction()
    {
      require_once "../../Classes/PHPExcel.php";

         if (isset($_POST["btnInport"])) {
      if (!empty($_FILES["excelFile"]["tmp_name"])) {
        $fileName=explode(".",$_FILES["excelFile"]["name"]);
        if ($fileName[1]=="csv") {
          echo "Processing !!!";
        $file=$_FILES["excelFile"]["tmp_name"];
        $tmpfname = $file;

        $excelReader = \PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
        
        echo "<table>";
        for ($row = 1; $row <= $lastRow; $row++) {
             echo "<tr><td>";
             $tab = $worksheet->getCell('A'.$row)->getValue();
             list($name, $fullname, $email, $address) = explode(";", $tab);
             echo "</td><td>";
             echo "</td>$name<tr></br>$fullname</br>$address</br>$email";
           
            
           try
            {
         $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
              }
            catch(Exception $e)
            { 
              die('Erreur : '.$e->getMessage());
            }


         $req = $bdd->prepare('INSERT INTO excelen(name, fullname, email, address) VALUES (:name,:fullname, :email,:address)');

         $req->execute(array('name' => $name,'fullname' => $fullname,'email' => $email,'address' => $address));



           
             
        }
        echo "</table>"; 


        }else{
          echo "you must choose a CVS file to import !!!";
        }
      }else{
        echo "you must choose a file !!!";

      }
      echo "you cliked the botton !!!";
    }   
      return $this->render('test.html.twig');
     //echo $view['form']->widget($form['save'], array('label' => 'Click me'));
    //$builder->add('save', ButtonType::class, array('attr' => array('class' => 'save'),));
  }


}
?>