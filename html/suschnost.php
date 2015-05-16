<?php
  require_once 'db_connect/hupd.php';

  $cnt=new suschnost($host, $user, $password, $db , $charset);
  $cnt->page_start("PROTECTIVE COATINGS DATA. Сущность.");
  
  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);

  $a=array(
    'id' => 'id',
    'Oboznachenie' => 'Обозначение',
    'Naimenovanie' => 'Наименование',
    'Primechanie' => 'Примечание',
    'TipSuschnosti_id' => 'ТипСущности_id');
    
  $cnt->select_fields_from_table(
    "suschnost.php","Сущность", $a,"func_suschnost", 
    "Сущность", "Suschnost_id","Button_select_haracteristic_for_edit");
  $cnt->page_end();
?>
