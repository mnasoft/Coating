<?php
  require_once './start.php';
  $cnt=new coating($host, $user, $password, $db , $charset);

  $cnt->about();
  $cnt->page_end();
?>