<?php
// contact.php
  require_once 'start.php';
  $cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);

  $cnt->contact();
  $cnt->page_end();
?>