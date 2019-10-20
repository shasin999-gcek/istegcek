<?php

	class QueryBuilder
	{
		protected $pdo;

		public function __construct(PDO $pdo) 
		{
			$this->pdo = $pdo;
		}

    public function getRegistrationCount()
    {
      $statement = $this->pdo->prepare("select count(*) from student_registrations");

      $statement->execute();

      return $statement->fetch(PDO::FETCH_COLUMN, 0);
    }


    public function getWebsiteSettings($setting_name)
    {
        $statement = $this->pdo->prepare("select value from website_settings where name = ?");

        $statement->execute(array($setting_name));

        return $statement->fetch(PDO::FETCH_COLUMN, 0);
    }


		public function selectAllFromTable($table) 
		{
			$statement = $this->pdo->prepare("select * from ${table}");

			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
		}


    public function isAdmnoAlreadyTaken($adm_no)
    {
      $statement = $this->pdo->prepare(
        "select id from student_registrations where adm_no= ?"
      );

      $statement->execute(array($adm_no));


      if($statement->rowCount() > 0)
      {
        return  true;
      }
      else
      {
        return false;
      }

    }


    public function saveRegistration($data, $regyear)
    {
      $sql = <<<'MYSQL_QUERY'
        INSERT INTO `student_registrations` 
        (`name`, `mob_no`, `email`, `dob`, `branch_id`, `adm_no`,`semester`, `house_name`, `street_name`, `post`, `pincode`, `district`,`state`, `reg_year`)
         values(:name, :mob_no, :email, :dob, :branch, :adm_no, :sem, :house_name, :street_name, :post, :pincode, :district, :state, :reg_year);
MYSQL_QUERY;

      $values = [
        ":name" => $data["name-of-applicant"],
        ":mob_no" => $data["mob_no"],
        ":email" => $data["email"],
        ":dob" => $data["dob"],
        ":branch" => $data["branch"],
        ":adm_no" => $data["admission-no"],
        ":sem" => $data["sem"],
        ":house_name" => $data["house-name"],
        ":street_name" => $data["street-name"],
        ":post" => $data["post"],
        ":pincode" => $data["pincode"],
        ":district" => $data["district"],
        ":state" => $data["state"],
        ":reg_year" => $regyear
      ];

      

      try {

        $this->pdo->beginTransaction();
     
        $statement = $this->pdo->prepare($sql);
        $statement->execute($values);
        unset($statement);

        // get reg_id of this student

        $statement = $this->pdo->prepare(
          "select id from student_registrations where adm_no=:adm_no"
        );

        $statement->execute(array(":adm_no" => $data["admission-no"]));

        $regId = $statement->fetch(PDO::FETCH_OBJ)->id;
        unset($statement);

        // insert special interest data
        $statement = $this->pdo->prepare(
          "insert into student_special_interests values(:reg_id, :spcl_int_id)"
        );

        foreach ($data["special"] as $key => $value) {
          $statement->execute(array(":reg_id" => $regId, ":spcl_int_id" => $key));  
        }

        // insert career preferences data
        $statement = $this->pdo->prepare(
          "insert into  student_career_preferences values(:reg_id, :career_pref_id)"
        );

        foreach ($data["career_pref"] as $key => $value) {
          $statement->execute(array(":reg_id" => $regId, ":career_pref_id" => $key));  
        }

        // insert services data
        $statement = $this->pdo->prepare(
          "insert into  student_services values(:reg_id, :service_id)"
        );

        foreach ($data["service"] as $key => $value) {
          $statement->execute(array(":reg_id" => $regId, ":service_id" => $key));  
        }

        
        // insert other special interests if exists
        if(!empty($data["other-si"]))
        {
          $statement = $this->pdo->prepare(
            "insert into other_special_interests values(:reg_id, :value)"
          );

          $statement->execute(array(":reg_id" => $regId, ":value" => $data["other-si"]));  
        }

        // insert other career preferences if exists
        if(!empty($data["other-cp"]))
        {
          $statement = $this->pdo->prepare(
            "insert into other_career_preferences values(:reg_id, :value)"
          );

          $statement->execute(array(":reg_id" => $regId, ":value" => $data["other-cp"]));  
        }

        // insert other services if exists
        if(!empty($data["other-service"]))
        {
          $statement = $this->pdo->prepare(
            "insert into other_services values(:reg_id, :value)"
          );

          $statement->execute(
            array(":reg_id" => $regId, ":value" => $data["other-service"])
          );  
        }
      
        // commit all changes
        $this->pdo->commit();
      } catch(PDOException $ex) {
          //Something went wrong rollback!
          $this->pdo->rollBack();
          die($ex->getMessage());
          exit;
      }

    }


    public function getAllStudentDetails()
    {
          $selectStudentInfoSQL = <<<'MYSQL_QUERY'
      select stu.id, name, mob_no, email, dob, adm_no, branch_name, semester, district, application_status
      from student_registrations as stu, branches as b where stu.branch_id = b.id
MYSQL_QUERY;

      $stmt = $this->pdo->prepare($selectStudentInfoSQL);

      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



    public function getRegistrationFromAdmno($admno)
    {
      $regData = array();

      $selectStudentInfoSQL = <<<'MYSQL_QUERY'
      select stu.id, name, dob, branch_name, semester, house_name, street_name, post, pincode, district, state
      from student_registrations as stu, branches as b where stu.branch_id = b.id and 
      stu.adm_no = :admno
MYSQL_QUERY;

      $stmt = $this->pdo->prepare($selectStudentInfoSQL);

      $stmt->execute(array(":admno" => $admno));

      $studentInfo = $stmt->fetch(PDO::FETCH_OBJ);

      // get registartion id
      $regId = $studentInfo->id;

      // get special interests

      $stmt = $this->pdo->prepare(
        "select si.value from student_special_interests as ssi, special_interests as si where ssi.reg_id = :id and ssi.special_interest_id = si.id"
      );

      $stmt->execute(array(":id" => $regId));

      $specialInterests = $stmt->fetchAll(PDO::FETCH_OBJ);

      // get career preferences

      $stmt = $this->pdo->prepare(
        "select cp.value from student_career_preferences as scp, career_preferences as cp where scp.reg_id = :id and scp.career_preference_id = cp.id;"
      );

      $stmt->execute(array(":id" => $regId));

      $careerPreferences = $stmt->fetchAll(PDO::FETCH_OBJ);

      // get checked services

      $stmt = $this->pdo->prepare(
        "select s.id from student_services as ss, services as s where ss.reg_id = :id and ss.service_id = s.id;"
      );

      $stmt->execute(array(":id" => $regId));

      $checkedServices = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);


      // get services

      $services = $this->selectAllFromTable("services");

      // get other special interests

      $other_special_interests = $this->selectAllFromOther("other_special_interests", $regId);
      $other_career_preferences = $this->selectAllFromOther("other_career_preferences", $regId);
      $other_services = $this->selectAllFromOther("other_services", $regId);

      return array(
        "student_info" => $studentInfo,
        "special_interests" => $specialInterests,
        "career_preferences" => $careerPreferences,
        "services" => $services,
        "checked_services" => $checkedServices,
        "other_special_interests" => $other_special_interests,
        "other_career_preferences" => $other_career_preferences,
        "other_services" => $other_services
      );

    }

    public function selectAllFromOther($table, $regId)
    {
      $stmt = $this->pdo->prepare(
        "select * from {$table} where reg_id = :regId"
      );

      $stmt->execute(array(":regId" => $regId));

      return $stmt->fetch(PDO::FETCH_OBJ);

    }


    public function acceptRegistration($regId)
    {
      $stmt = $this->pdo->prepare('update student_registrations set application_status = 1 where id=?');
      $stmt->execute(array($regId));
      return $stmt->rowCount();
    }

    public function deleteRegistration($regId)
    {
      $stmt = $this->pdo->prepare('delete from student_registrations where id=?');
      $stmt->execute(array($regId));
      return $stmt->rowCount();
    }

}


	