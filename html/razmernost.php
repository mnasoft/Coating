<?php
  require_once 'db_connect/hupd.php';
  
  $cnt=new razmernost($host, $user, $password, $db , $charset);

  $cnt->page_start("PROTECTIVE COATINGS DATA. Размерность.");

  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);
  $a=array(
    'id' => 'id',
    'Tip' => 'Тип',
    'Oboznachenie_r' => 'Обозначение_Р');

//  $cnt->make_js_reactor("razmernost.php","Размерность", $a,"func_reactor");
  
  $cnt->select_fields_from_table(
  "razmernost.php","Размерность", $a,"func_reactor", 
  "Размерность", $btn="Razmernost_id","Button_select_haracteristic_for_edit");
  $cnt->page_end();
  //  ;
?>