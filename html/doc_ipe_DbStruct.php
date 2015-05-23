<?php
// doc_ipe_DbStruct.php
require_once 'start.php';

$cnt=new coating(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME , Config::DB_CHARSET);

$cnt->page_start("Coating. Структура БД");


$cnt->show_image("Coating", "Структура БД", "./img/Coating.png");
$cnt->page_end();
?>
