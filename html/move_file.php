<?php
// move_file.php
require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);

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
