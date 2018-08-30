<?php  


	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		
		if(!(isset($_GET["token"]) && $_GET["token"] == "170veg0tj02@iste@tempadmin"))
		{
			http_response_code(401);
			echo "Unauthorised, Please step back!!";
			exit;
		}


		$builder = require 'core/bootstrap.php';


		$students = $builder->getAllStudentDetails();

		require 'views/admin/dashboard.view.php';
	}
	