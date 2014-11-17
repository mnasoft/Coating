<?php
  $Suschnost_id   = $_REQUEST['Suschnost_id'];
  
  require_once 'db_connect/hupd.php';
  
  $cnt=new coating($host, $user, $password, $db , $charset);
  $cnt->page_start("PROTECTIVE COATINGS DATA. Характеристика определенной сущности.");
  
  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);    
  
  $cnt->show_table($query="select * from Характеристика where Сущность_id=$Suschnost_id", $table_caption="table",
                    "id","Button_select_haracteristic_for_edit","Характеристика");
  $cnt->page_end();
?>


