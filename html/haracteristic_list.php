<?php
// haracteristic_list.php
$Suschnost_id   = $_REQUEST['Suschnost_id'];

require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);
$cnt->page_start("PROTECTIVE COATINGS DATA. Характеристика определенной сущности.");

$this_file = basename (__FILE__);
$cnt->tag("h1", $this_file);

$cnt->show_table($query="select * from Характеристика where Сущность_id=$Suschnost_id", $table_caption="table",
                    "id","Button_select_haracteristic_for_edit","Характеристика");
$cnt->page_end();
?>


