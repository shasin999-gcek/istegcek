<?php
  
  $builder = require 'core/bootstrap.php';

  $count = $builder->getRegistrationCount();
  
  require 'views/index.view.php';