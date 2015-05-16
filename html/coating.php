<?php
  require_once 'start.php';

  $cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);
  $cnt->page_start();

  $this_file = basename (__FILE__);
  $cnt->tag("h1", $this_file);

  $cnt->show_table($query="show databases",$table_caption="databases","id","Button_click");
  $cnt->show_table($query="show tables",$table_caption="show tables","id","Button_click");
  $cnt->show_table($query="show table status",$table_caption="Show table status","id","Button_click");


  $array=array(1=>"Характеристика",2=>"ХарактеристикиСущности",3=>"Размерность",4=>"Сущность",5=>"ТипДанных",6=>"ТипИспытаний",7=>"ТипСущности");

  foreach ($array as $value)
  {
    $cnt->show_table($query="DESC " . $value, $table_caption="DESC " . $value,"id","Button_click");
    $cnt->show_table($query="SELECT * FROM " . $value, $table_caption="SELECT * FROM " . $value,"id","Button_click");
    $cnt->show_table($query="SHOW TABLE STATUS " . $value, $table_caption="TABLE STATUS " . $value,"id","Button_click");
    $cnt->show_table($query="SHOW KEYS IN " . $value,$table_caption="KEYS IN " . $value,"id","Button_click");
  }
  echo <<<END

    <MATH>&int;_a_^b^{f(x)<over>1+x} dx</MATH>
END;

  $cnt->page_end();
?>
