<?php
  require_once 'db_connect/hupd.php';
  $cnt=new coating($host, $user, $password, $db , $charset);
  
  $cnt->contact();
  $cnt->page_end();
?>