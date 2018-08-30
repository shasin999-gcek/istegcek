
<?php

  $config = require 'config.php';

  require 'database/Connection.php';
  require 'database/QueryBuilder.php';


  $database = $config["config"]["database"];

  return new QueryBuilder(Connection::make($database));

