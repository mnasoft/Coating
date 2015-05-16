<?php

class html {

  public static function tag($tag, $var) {
    echo "<$tag>$var</$tag>";
  }

  public static function tag_2($tag, $var) {
    return "<$tag>$var</$tag>";
  }

  public static function table_tbody_open() {
    echo "<table><tbody>";
  }

  public static function table_tbody_close() {
    echo "</tbody></table>";
  }

  public static function section_open($id){
    echo "<section id=\"$id\">";
  }

  public static function section_close(){
    echo "</section>";
  }

  public static function html_open(){
    echo "<html>";
  }

  public static function html_close(){
    echo "</html>";
  }

  public static function body_open(){
    echo "<body>";
  }

  public static function body_close(){
    echo "</body>";
  }

  public static function DOCTYPE(){
    echo "<!DOCTYPE html>";
  }

  public static function head($title="PROTECTIVE COATINGS DATA"){
  echo <<<head

  <head>
    <meta charset="utf-8">
    <title>$title</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript"  src="js/script.js"> </script>
    <meta name="keywords" content="MNASoft,покрытие,композиционный материал"/>
    <meta name="author" content="Ю.А. Казимиренко, MNASoft"/>
  </head>
head;
}
  ///Начало страницы
  public static function page_start($title="PROTECTIVE COATINGS DATA"){
    html::DOCTYPE();
    html::html_open();
    html::head($title);
    html::body_open();
  }
  ///Окончание страницы
  public static function page_end() {
    html::body_close();
    html::html_close();
  }
}
?>