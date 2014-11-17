<?php
  require_once 'db_connect/hupd.php';

  $cnt=new mnozitel($host, $user, $password, $db , $charset);

  $cnt->page_start("PROTECTIVE COATINGS DATA. Множитель.");
  
  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);
  
  $a=array(
    'stepen' => 'Степень',
    'Oboznachenie_r' => 'Обозначение_Р');
    
  $cnt->select_fields_from_table(
    "mnozitel.php","Множитель_10", $a,"func_mnozitel", 
    "Множитель", "Mnozitel_10_id","Button_select_haracteristic_for_edit");
  
  $cnt->page_end();
?>
