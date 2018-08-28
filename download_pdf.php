<?php
   
  require_once 'dompdf/autoload.inc.php';
  
  $builder = require 'core/bootstrap.php';

  use Dompdf\Dompdf;


  if($_SERVER["REQUEST_METHOD"] == "GET")
  {
  	if(isset($_GET["admno"]))
  	{
      $admNumber = $_GET["admno"];
      if($builder->isAdmnoAlreadyTaken($admNumber))
      {
        require 'views/downloadpdf.view.php';
        exit;
      }
      else
      {
        header('Location: /register.php');
      }
  	}
  }

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(!(isset($_POST["admno"]) && isset($_POST["download"]))) {
      die("Not Allowed");
    }

    $regData = $builder->getRegistrationFromAdmno($_POST["admno"]);


	  $dompdf = new Dompdf();
	  $dompdf->set_paper("A4");

	  

	  ob_start();
	  require_once (__DIR__ . "/pdftemplates/iste_student_reg_form.php");
	  $template = ob_get_clean();

	  $dompdf->loadHtml("$template");
	  $dompdf->setBasePath(__DIR__);
	  $dompdf->render();
	  $dompdf->stream("isteregform.pdf",array("Attachment"=>1, "compress" => 1));

	}
