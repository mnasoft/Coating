<?php

class add_edit_suschnost extends suschnost {

  public $Action;

  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset) {
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
    $this->host=$a_host;
    $this->user=$a_user;
    $this->password=$a_password;
    $this->db=$a_db;
    $this->charset=$a_charset;
  }

  public function request() {
    suschnost::request();
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

  public function add() {
    if ( $this->mysqli->query("INSERT INTO Сущность (Обозначение, Наименование, Примечание, ТипСущности_id) VALUE
      ('$this->Oboznachenie', '$this->Naimenovanie', '$this->Primechanie', '$this->TipSuschnosti_id')"))
        echo"<h1>ADDED</h1>";
      else
        echo "<h1>Not ADDED</h1>";
  }

  public function update() {
    if ( $this->mysqli->query("UPDATE Сущность SET
                          Обозначение='$this->Oboznachenie', Наименование='$this->Naimenovanie',
                          Примечание='$this->Primechanie', ТипСущности_id='$this->TipSuschnosti_id' WHERE id='$this->id'"))
      echo"<h1>UPDATED</h1>";
    else
      echo "<h1>NOT updated</h1>";
  }

  public function delete() {
    if ( $this->mysqli->query("DELETE FROM Сущность WHERE id='$this->id'"))
      echo"<h1>DELETED</h1>";
    else
      echo "<h1>NOT deleted</h1>";
  }

  public function getFieldsBySuschnost_id() {
  if( $this->id != '')
  {
    if ( $result = $this->mysqli->query("SELECT Обозначение, Наименование, Примечание, ТипСущности_id FROM Сущность WHERE id='$this->id'"))
    {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
        {
          if( $this->Oboznachenie       == '' ) $this->Oboznachenie=$row[Обозначение];
          if( $this->Naimenovanie       == '' ) $this->Naimenovanie=$row[Наименование];
          if( $this->Primechanie        == '' ) $this->Primechanie=$row[Примечание];
          if( $this->TipSuschnosti_id   == '' ) $this->TipSuschnosti_id=$row[ТипСущности_id];
        }
      $result->close(); }
    }
  }

  public function getTipFromTipSuschnosti() {
    $rez = '';
    if ($result = $this->mysqli->query("select * from ТипСущности where id=$this->TipSuschnosti_id")) {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez = $row[Тип];
      $result->close(); }
    return $rez;
  }
}

?>