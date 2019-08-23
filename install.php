<?php

    require 'core/bootstrap.php';


    $is_installed = $builder->getWebsiteSettings('INSTALL_STATUS');

    if($is_installed)
    {
        header('Location: /login.php');
        exit();
    }

	if($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		require('views/install.view.php');
        exit;
	}

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {

    extract($_POST);

    if(!isset($loginUserId) || !isset($password) || !isset($confirmPassword))
    {
      die("Not Allowed");
    }

    if (!empty($password) && !empty($confirmPassword)) {
      if($password != $confirmPassword)
      {
        die("Password is not matched");
      }
    }
    else {
        die("Please input values");
    }


    $auth->create_user(array(
        'username' => $loginUserId,
        'password' => $password
    ));

    // change application status
    $setting->appInstalled();


    header('Location: /login.php');
  }
	