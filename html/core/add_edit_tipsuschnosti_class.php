<?php

class add_edit_tipsuschnosti extends tipsuschnosti {
  public $Action;

  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function request() {
    tipsuschnosti::request();
    $this->Action = $_REQUEST['Action'];
  }

  public function action() {
    if ( $this->Action == 'Добавить')
      $this->add();
    else if ( $this->Action == 'Обновить')
      $this->update();
    else if ( $this->Action == 'Удалить')
      $this->delete();
  }

  public function add(){
    if ( $this->mysqli->query("INSERT INTO ТипСущности (Тип) VALUE ('$this->Tip')"))
        echo"<h1>ADDED</h1>";
      else
        echo "<h1>Not ADDED</h1>";
  }

  public function update() {
    if ( $this->mysqli->query("UPDATE ТипСущности SET Тип='$this->Tip' WHERE id='$this->id'"))
      echo"<h1>UPDATED</h1>";
    else
      echo "<h1>NOT updated</h1>";
  }

  public function delete() {
    if ( $this->mysqli->query("DELETE FROM ТипСущности WHERE id='$this->id'"))
      echo"<h1>DELETED</h1>";
    else
      echo "<h1>NOT deleted</h1>";
  }
}
?>