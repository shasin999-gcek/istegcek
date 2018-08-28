<?php 


  $builder = require 'core/bootstrap.php';

  if($_SERVER["REQUEST_METHOD"] == "GET")
  {
    
    $branches = $builder->selectAllFromTable("branches");

    $careerPreferences = $builder->selectAllFromTable("career_preferences");

    $specialInterests = $builder->selectAllFromTable("special_interests");

    $services = $builder->selectAllFromTable("services");

 
    require 'views/register.view.php';

    exit;
  }
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO: form validation 
    if(count($_POST) == 0)
    {
      die("Invalid Request");
    }

    if(!isset($_POST["admission-no"])) 
    {
      die("Not allowed");
    }

    

    if($builder->isAdmnoAlreadyTaken($_POST["admission-no"]))
    {
      $jsonResponse = [
        "error_code" => 409,
        "error_msg" => "Admission Number is already exists",
        "redirect_url" => "/download_pdf.php?admno={$_POST['admission-no']}"
      ];

      echo json_encode($jsonResponse);
    }
    else
    {
      $builder->saveRegistration($_POST);

      $jsonResponse = [
        "redirect_url" => "/download_pdf.php?admno={$_POST['admission-no']}"
      ];

      echo json_encode($jsonResponse);
    }
    


  }