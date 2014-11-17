<?php
  require_once 'db_connect/hupd.php';

  $cnt=new coating($host, $user, $password, $db , $charset);
  
  $cnt->page_start("PROTECTIVE COATINGS DATA. Home.");
  $cnt->home();
  $cnt->page_end();
?>