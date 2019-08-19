<?php
  
  require 'core/bootstrap.php';

  $count = $builder->getRegistrationCount();

  $isRegClosed = $builder->getWebsiteSettings('REG_CLOSED');

  $regClosingDate = $builder->getWebsiteSettings('REG_CLOSE_DATE');

  $regYear = $builder->getWebsiteSettings('REG_YEAR');
  
  require 'views/index.view.php';