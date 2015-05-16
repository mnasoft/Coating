<?php

class haracteristic extends coating { /// class haracteristic
  public $id;
  public $Naimenovanie;
  public $Oboznachenie;
  public $Chislo;
  public $Chislo_min;
  public $Chislo_max;
  public $Stroka;
  public $Suschnost_id;
  public $TipDannyh_id;
  public $Razmernost_id;
  public $Mnozitel_10_id;
  
  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }
  
  public function request() 
  {
    $this->id             = $_REQUEST['id'];
    $this->Naimenovanie   = $_REQUEST['Naimenovanie'];
    $this->Oboznachenie   = $_REQUEST['Oboznachenie'];
    $this->Chislo         = $_REQUEST['Chislo'];
    $this->Chislo_min     = $_REQUEST['Chislo_min'];
    $this->Chislo_max     = $_REQUEST['Chislo_max'];
    $this->Stroka         = $_REQUEST['Stroka'];
    $this->Suschnost_id   = $_REQUEST['Suschnost_id'];
    $this->TipDannyh_id   = $_REQUEST['TipDannyh_id'];
    $this->Razmernost_id  = $_REQUEST['Razmernost_id'];
    $this->Mnozitel_10_id = $_REQUEST['Mnozitel_10_id'];
//    echo "<p>haracteristic.request</p>";
  }
  
}

?>