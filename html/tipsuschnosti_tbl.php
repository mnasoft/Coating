<?php
  require_once 'db_connect/hupd.php';

  $cnt=new coating($host, $user, $password, $db , $charset);
  $cnt->page_start("PROTECTIVE COATINGS DATA. Тип_Сущности");

  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);

  $cnt->show_table($query="select * from ТипСущности;",$table_caption="table", $btn="id", $onclick="add_edit_tipsuschnosti_button_click");
  $cnt->page_end();
?>
