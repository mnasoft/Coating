<?php
  require_once 'db_connect/hupd.php';
  
  $cnt=new coating($host, $user, $password, $db , $charset);
  $cnt->page_start("PROTECTIVE COATINGS DATA. Характеристика.");

  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);
  
  $cnt->show_table($query="select * from Характеристика;",$table_caption="table",$btn="Mnozitel_10_id","Button_select_haracteristic_for_edit");
  $cnt->page_end();
?>
