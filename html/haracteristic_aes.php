<?php
  require_once 'db_connect/hupd.php';
  
  $cnt=new haracteristic($host, $user, $password, $db , $charset);
  $cnt->page_start("PROTECTIVE COATINGS DATA. Сущность.");
  
  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);
  
  $a=array(
    'id'                => 'id',
    'Naimenovanie'      => 'Наименование',
    'Oboznachenie'      => 'Обозначение',
    'Chislo'            => 'Число',
    'Chislo_min'        => 'Число_min',
    'Chislo_max'        => 'Число_max',
    'Stroka'            => 'Строка',
    'Suschnost_id'      => 'Сущность_id',
    'TipDannyh_id'      => 'ТипДанных_id',   
    'Razmernost_id'     => 'Размерность_id',
    'Mnozitel_10_id'    => 'Множитель_10_id');
    
  $cnt->select_fields_from_table(
    "haracteristic_aes.php","Характеристика", $a,"func_haracteristic", 
    "Характеристика", "id","Button_select_haracteristic_for_edit", "Характеристика");
    
  $cnt->page_end();  
?>
