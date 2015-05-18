<?php
// move_file.php
/*
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
*/
?>

<?php

// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.


function rename_file_name($filename)
{
  $date = microtime();
  $date_array = explode(" ", $date);
  $date_y = date("Y-m-d-H-i",$date_array[1]);
  $date_s = date("s", $date_array[1]) + $date_array[0] ;
  $new_file_name =
    pathinfo($filename, PATHINFO_DIRNAME) .
    "/" .
    $date_y .
    "-" .
    $date_s .
    "-" .
    md5_file($filename) .
    "." .
    pathinfo($filename, PATHINFO_EXTENSION);

  echo $filename . "\n";
  echo $new_file_name . "\n";
  
  rename($filename, $new_file_name );
  return true;
}

$uploaddir = '/home/namatv/public_html/upload/'; // /var/www/uploads/
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


echo 'TScoooool :'. md5_file($_FILES['userfile']['name']) . "\n"; 

echo '<pre>';

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
  {
    echo "Файл корректен и был успешно загружен.\n";
    rename_file_name($uploadfile);
    echo "Файл корректен и был успешно загружен.\n";
  }
else
  {
    echo "Возможная атака с помощью файловой загрузки!\n";
    echo 'Некоторая отладочная информация:';
    print_r($_FILES);
  }
print "</pre>";
?>
