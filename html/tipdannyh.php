<?php
  require_once 'start.php';

  $cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);

  $cnt->page_start("PROTECTIVE COATINGS DATA. Тип_Данных");

  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);

  $cnt->show_table($query="select * from ТипДанных;",$table_caption="table",$btn="TipDannyh_id","Button_select_haracteristic_for_edit");
  $cnt->page_end();
?>
