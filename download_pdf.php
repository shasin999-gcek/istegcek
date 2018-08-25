<?php
  
  require_once 'dompdf/autoload.inc.php';

  use Dompdf\Dompdf;

  $dompdf = new DOMPDF();
  $dompdf->set_paper("A4");

  // load the html content
  $name = "Muhammed Shasin P";
  

  ob_start();
  require_once (__DIR__ . "/pdftemplates/iste_student_reg_form.php");
  $template = ob_get_clean();

  $dompdf->loadHtml("$template");
  $dompdf->setBasePath(__DIR__);
  $dompdf->render();
  $dompdf->stream("sample.pdf",array("Attachment"=>0, "compress" => 1));


