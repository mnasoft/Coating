<?php

class add_edit_haracteristics extends haracteristic {

  public $Action;

  public $isInputChisloVisible = true;
  public $isInputChislo_minVisible = true;
  public $isInputChislo_maxVisible = true;
  public $isInputStrokaVisible = true;

  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function getFieldsByHaracteristic_id() {
  if( $this->id != '') {
    if ( $result = $this->mysqli->query("SELECT id,Наименование,Обозначение,Число,Число_min,Число_max,Строка,Сущность_id,ТипДанных_id,Размерность_id,Множитель_10_id
    FROM Характеристика WHERE id='$this->id'")) {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc()) {
          $this->id               =$row[id];
          $this->Naimenovanie     =$row[Наименование];
          $this->Oboznachenie     =$row[Обозначение];
          $this->Chislo           =$row[Число];
          $this->Chislo_min       =$row[Число_min];
          $this->Chislo_max       =$row[Число_max];
          $this->Stroka           =$row[Строка];
          $this->Suschnost_id     =$row[Сущность_id];
          $this->TipDannyh_id     =$row[ТипДанных_id];
          $this->Razmernost_id    =$row[Размерность_id];
          $this->Mnozitel_10_id   =$row[Множитель_10_id];}
      $result->close(); }
    }
  }

  public function culcVisibility() {
    if ($this->TipDannyh_id == "1") {
      $this->isInputChisloVisible = true;
      $this->isInputChislo_minVisible = false;
      $this->isInputChislo_maxVisible = false;
      $this->isInputStrokaVisible = false; }
    else if ($this->TipDannyh_id == "2") {
      $this->isInputChisloVisible = false;
      $this->isInputChislo_minVisible = true;
      $this->isInputChislo_maxVisible = true;
      $this->isInputStrokaVisible = false; }
    else if ($this->TipDannyh_id == "3") {
      $this->isInputChisloVisible = false;
      $this->isInputChislo_minVisible = false;
      $this->isInputChislo_maxVisible = false;
      $this->isInputStrokaVisible = true; }
    else  {
      $this->isInputChisloVisible = false;
      $this->isInputChislo_minVisible = false;
      $this->isInputChislo_maxVisible = false;
      $this->isInputStrokaVisible = false; }
  }

  public function htmlHiddenInput() {
    $this->culcVisibility();
    if ($this->isInputChisloVisible == false)
      echo "<input id=\"Chislo\" name=\"Chislo\" type=\"text\" value=\"$this->Chislo\" hidden />";
    if ($this->isInputChislo_minVisible == false)
      echo "<input id=\"Chislo_min\" name=\"Chislo_min\" type=\"text\" value=\"$this->Chislo_min\" hidden />";
    if ($this->isInputChislo_maxVisible == false)
      echo "<input id=\"Chislo_max\" name=\"Chislo_max\" type=\"text\" value=\"$this->Chislo_max\" hidden />";
    if ($this->isInputStrokaVisible == false)
      echo "<input id=\"Stroka\" name=\"Stroka\" type=\"text\" value=\"$this->Stroka\" hidden />";
  }

  public function htmlTrVisibleInput() {
    $this->culcVisibility();
    $suffics = $this->getSuffics();
    if ($this->isInputChisloVisible )
        echo <<<CHISLO
          <tr><td> <label for="Chislo">Значение</label> </td>
              <td> <input id="Chislo" name="Chislo" type="text" value="$this->Chislo" /> , $suffics </td> </tr>
CHISLO;
    if ($this->isInputChislo_minVisible )
      echo <<<CHISLO_MIN
        <tr><td> <label for="Chislo_min">Значение_min</label> </td>
            <td> <input id="Chislo_min" name="Chislo_min" type="text" value="$this->Chislo_min" /> , $suffics </td> </tr>
CHISLO_MIN;
    if ($this->isInputChislo_maxVisible )
      echo <<<CHISLO_MAX
        <tr><td> <label for="Chislo_max">Значение_max</label> </td>
            <td> <input id="Chislo_max" name="Chislo_max" type="text" value="$this->Chislo_max" /> , $suffics </td> </tr>
CHISLO_MAX;
    if ($this->isInputStrokaVisible )
      echo <<<STROKA
        <tr><td> <label for="Stroka">Строка</label> </td>
            <td> <input id="Stroka" name="Stroka" type="text" value="$this->Stroka" /> </td> </tr>
STROKA;
  }

  public function request() {
    haracteristic::request();
    $this->Action = $_REQUEST['Action'];
  }

  public function action() {
    if ( $this->Action == 'Добавить')
      $this->add();
    else if ( $this->Action == 'Обновить')
      $this->update();
    else if ( $this->Action == 'Удалить')
      $this->delete();
    else if ( $this->Action == 'Характеристика')
      $this->getFieldsByHaracteristic_id();
  }

  public function add() {
    if ($this->TipDannyh_id == "1")
      if( $this->mysqli->query("INSERT INTO Характеристика
          (Наименование,Обозначение,Число,
          Сущность_id,ТипДанных_id,Размерность_id,Множитель_10_id)
          VALUE ('$this->Naimenovanie','$this->Oboznachenie',$this->Chislo,
          $this->Suschnost_id,$this->TipDannyh_id,$this->Razmernost_id,$this->Mnozitel_10_id)")
        ) $this->tag("h1","ADDED");
      else $this->tag("h1","Not ADDED");
    else if ($this->TipDannyh_id == "2")
      if( $this->mysqli->query("INSERT INTO Характеристика
          (Наименование,Обозначение,Число_min,Число_max,
          Сущность_id,ТипДанных_id,Размерность_id,Множитель_10_id)
          VALUE ('$this->Naimenovanie','$this->Oboznachenie',$this->Chislo_min,$this->Chislo_max,
          $this->Suschnost_id,$this->TipDannyh_id,$this->Razmernost_id,$this->Mnozitel_10_id)")
        ) $this->tag("h1","ADDED");
      else $this->tag("h1","Not ADDED");
    else if ($this->TipDannyh_id == "3")
      if( $this->mysqli->query("INSERT INTO Характеристика (Наименование,Обозначение,Строка,Сущность_id,ТипДанных_id)
          VALUE ('$this->Naimenovanie','$this->Oboznachenie','$this->Stroka',$this->Suschnost_id,$this->TipDannyh_id)")
        ) $this->tag("h1","ADDED");
      else $this->tag("h1","Not ADDED");
  }

  public function update()
  {
    if ($this->TipDannyh_id == "1")
      if( $this->mysqli->query("UPDATE Характеристика SET
          Наименование='$this->Naimenovanie',Обозначение='$this->Oboznachenie',
          Число=$this->Chislo,
          Сущность_id=$this->Suschnost_id,ТипДанных_id=$this->TipDannyh_id,
          Размерность_id=$this->Razmernost_id,Множитель_10_id=$this->Mnozitel_10_id
          WHERE id=$this->id ")
        ) $this->tag("h1","UPDATED");
      else $this->tag("h1","NOT updated");
    else if ($this->TipDannyh_id == "2")
      if( $this->mysqli->query("UPDATE Характеристика SET
          Наименование='$this->Naimenovanie',Обозначение='$this->Oboznachenie',
          Число_min=$this->Chislo_min,Число_max=$this->Chislo_max,
          Сущность_id=$this->Suschnost_id,ТипДанных_id=$this->TipDannyh_id,
          Размерность_id=$this->Razmernost_id,Множитель_10_id=$this->Mnozitel_10_id
          WHERE id=$this->id")
        ) $this->tag("h1","UPDATED");
      else $this->tag("h1","NOT updated");
    else if ($this->TipDannyh_id == "3")
      if( $this->mysqli->query("UPDATE Характеристика SET
          Наименование='$this->Naimenovanie',Обозначение='$this->Oboznachenie',
          Строка='$this->Stroka',
          Сущность_id=$this->Suschnost_id,ТипДанных_id=$this->TipDannyh_id,
          Размерность_id=$this->Razmernost_id,Множитель_10_id=$this->Mnozitel_10_id
          WHERE id=$this->id")
        ) $this->tag("h1","UPDATED");
      else $this->tag("h1","NOT updated");
  }

  public function delete(){
    if ( $this->id != '')
    {
      if ( $this->mysqli->query("DELETE FROM Характеристика WHERE id='$this->id'"))
        echo"<h1>DELETED</h1>";
      else
        echo "<h1>NOT deleted</h1>";
    }
    else echo "<h1>NOT deleted</h1><p>Примечание: Для удаления характеристики сначала выберите её из 'Списка всех характеристик'.</p1>";
  }

  public function getSuschnostOboznachenieById(){
    $rez = '';
    if ($result = $this->mysqli->query("select * from Сущность where id=" . $this->Suschnost_id . ";")) {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez=$row[Обозначение];
      $result->close(); }
    return $rez;
  }

  public function getTipDannyhNaimenovanieById(){
    $rez = '';
    if ($result = $this->mysqli->query("select * from ТипДанных  where id=" . $this->TipDannyh_id . ";"))
    {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez= $row[Наименование];
      $result->close();
    }
    return $rez;
  }

  public function getMnozitelOboznachenieRusByStepen(){
    $rez = '';
    if ($result = $this->mysqli->query("select * from Множитель_10  where Степень=" . $this->Mnozitel_10_id . ";")) {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez =$row[Обозначение_Р];
      $result->close(); }
    return $rez ;
  }

  public function getRazmernostTipById() {
    $rez = '';
    if ($result = $this->mysqli->query("select * from Размерность  where id=" . $this->Razmernost_id . ";"))
    {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez = $row[Тип];
      $result->close();
    }
    return $rez ;
  }

  public function getRazmernostOboznachenieRusById() {
    $rez = '';
    if ($result = $this->mysqli->query("select * from Размерность  where id=" . $this->Razmernost_id . ";"))
    {
      if ($result->num_rows == 1)
        while ($row = $result->fetch_assoc())
          $rez = $row[Обозначение_Р];
      $result->close();
    }
    return $rez ;
  }

  public function getSuffics() {
    return $this->getMnozitelOboznachenieRusByStepen() . $this->getRazmernostOboznachenieRusById();
  }
}
?>