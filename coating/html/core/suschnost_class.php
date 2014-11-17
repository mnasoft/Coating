<?php

class suschnost extends coating { /// class suschnost
  public $id;
  public $Oboznachenie;
  public $Naimenovanie;
  public $Primechanie;
  public $TipSuschnosti_id;
  
  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }
  
  public function request() { /// function request
    $this->id               = $_REQUEST['id'];
    $this->Oboznachenie     = $_REQUEST['Oboznachenie'];
    $this->Naimenovanie     = $_REQUEST['Naimenovanie'];
    $this->Primechanie      = $_REQUEST['Primechanie'];
    $this->TipSuschnosti_id = $_REQUEST['TipSuschnosti_id'];
//    echo "<p>suschnost.request</p>";
  }
}

?>