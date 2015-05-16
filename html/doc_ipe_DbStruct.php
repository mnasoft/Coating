<?php
  require_once 'db_connect/hupd.php';

  $cnt=new coating($host, $user, $password, $db , $charset);
  
  $cnt->page_start();
  $cnt->doc_ipe_DbStruct();
  $cnt->page_end();
?>