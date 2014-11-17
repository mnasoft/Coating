<?php

class razmernost extends coating { // class razmernost
  public $id = '';
  public $Tip = '';
  public $Oboznachenie_r = '';
  
  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function request() { /// function request
    $this->id               = $_REQUEST['id'];
    $this->Tip              = $_REQUEST['Tip'];
    $this->Oboznachenie_r   = $_REQUEST['Oboznachenie_r']; 
    echo "<p>razmernost.request</p>";
  }
} // class razmernost

?>