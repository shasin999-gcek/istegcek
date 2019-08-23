<?php

    session_start();

    require 'core/bootstrap.php';

	if($_SERVER["REQUEST_METHOD"] == "GET")
	{

		if(!isset($_SESSION['username']))
		{
			http_response_code(401);
			header('Location: /login.php');
			exit;
		}

		$students = $builder->getAllStudentDetails();

		require 'views/admin/dashboard.view.php';
	}
	