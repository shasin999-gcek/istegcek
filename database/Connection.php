<?php

  class Connection
  {

    public static function make($database)
    {
      try 
      {

        return new PDO(
          "mysql:host={$database['host']};dbname={$database['dbname']}",
          $database["username"],
          $database["password"]
        );

      }
       
      catch(PDOException $e)
      {
          die("Cant connect {$e}");
      }

    }

  }

  