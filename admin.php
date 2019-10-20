<?php

  session_start();

	if(!isset($_SESSION['username']))
	{
		http_response_code(401);
		header('Location: /login.php');
		exit;
	}

  require 'core/bootstrap.php';

	if($_SERVER["REQUEST_METHOD"] == "GET")
	{

		$students = $builder->getAllStudentDetails();

		require 'views/admin/dashboard.view.php';
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if($_REQUEST['action'] == 'accept') 
		{
			$count = $builder->acceptRegistration($_POST['registrationId']);
			echo json_encode(array('count' => $count));
		}

		if($_REQUEST['action'] == 'delete') 
		{
			$count = $builder->deleteRegistration($_POST['registrationId']);
			echo json_encode(array('count' => $count));
		}
	}
	