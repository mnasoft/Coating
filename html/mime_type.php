<?php
//  mime_type.php
require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);
$cnt->page_start("PROTECTIVE COATINGS DATA. Таблица Файл.");

$this_file = basename (__FILE__);
$cnt->tag("h1", $this_file);

$cnt->show_table($query="SELECT id, Обозначение FROM MimeType;", 
		 $table_caption="Таблица MimeType",
		 $btn="Mnozitel_10_id",
		 "Button_select_haracteristic_for_edit");
$cnt->page_end();
?>
