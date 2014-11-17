<?php
  require_once 'db_connect/hupd.php';
  $cnt=new coating($host, $user, $password, $db , $charset);
  
  $cnt->about();
  $cnt->page_end();
?>