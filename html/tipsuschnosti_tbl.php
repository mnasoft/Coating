<?php
// tipsuschnosti_tbl.php
require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);
$cnt->page_start("PROTECTIVE COATINGS DATA. Тип_Сущности");

$this_file = basename (__FILE__);
$cnt->tag("h1", $this_file);

$cnt->show_table($query="select * from ТипСущности;",$table_caption="table", $btn="id", $onclick="add_edit_tipsuschnosti_button_click");
$cnt->page_end();
?>
