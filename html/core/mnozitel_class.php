<?php

class mnozitel extends coating {
  public $stepen;
  public $Oboznachenie_r;
  
  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function request() {
    $this->stepen           = $_REQUEST['stepen'];
    $this->Oboznachenie_r   = $_REQUEST['Oboznachenie_r'];
    echo "<p>mnozitel.request</p>";
  }
}

?>