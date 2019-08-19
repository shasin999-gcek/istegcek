
<?php

  $config = require 'config.php';

  require 'database/Connection.php';
  require 'database/QueryBuilder.php';
  require 'database/Auth.php';


  $database = $config["config"]["database"];

  $conn = Connection::make($database);

  $builder = new QueryBuilder($conn);

  $auth = new Auth($conn);

 // $post = new Post($conn);

