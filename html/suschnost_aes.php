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
    "suschnost_aes.php","Сущность", $a,"func_suschnost", 
    "Сущность", "id","Button_select_suschnost_for_edit");
    
//  $cnt->show_table($query="select * from Сущность;",$table_caption="table", "Suschnost_id",$OnClickReactor);

  $cnt->page_end();
?>