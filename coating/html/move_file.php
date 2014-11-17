<?php
  require_once 'db_connect/hupd.php';

  $cnt=new coating($host, $user, $password, $db , $charset);

  $cnt->page_start("move_file");

  $uploaddir = '/home/namatv/uploads/';
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

  echo '<pre>';
  echo "uploaddir = $uploaddir\n";
  echo "uploadfile = $uploadfile\n";
  $temp_file_name = $_FILES['userfile']['tmp_name'];
  echo "temp_file_name = $temp_file_name\n";

  if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
  {
    echo "Возможная атака с помощью файловой загрузки!\n";
  } 
  else 
  {
    echo "Файл корректен и был успешно загружен.\n";
  }
    echo "\n\n\n";
    echo 'Некоторая отладочная информация:';
    print_r($_FILES);

  print "</pre>";
  
  $cnt->page_end();
?>
