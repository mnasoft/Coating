<?php
// home.php
require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);

$cnt->page_start("PROTECTIVE COATINGS DATA. Home.");
$cnt->home();
$cnt->page_end();
?>