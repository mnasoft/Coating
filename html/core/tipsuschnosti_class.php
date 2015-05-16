<?php

class tipsuschnosti extends coating {
  public $id;
  public $Tip;
  
  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }
  
  public function request() {
    $this->id  = $_REQUEST['id'];
    $this->Tip = $_REQUEST['Tip'];
//    echo "<p>tipsuschnosti.request</p>";
  }
  
  public function getFieldsByTipsuschnosti_id() {
    if( $this->id != '') 
    {
      if ( $result = $this->mysqli->query("SELECT Тип FROM ТипСущности WHERE id='$this->id'")) 
      {
        if ($result->num_rows == 1)
          while ($row = $result->fetch_assoc()) 
          {
            $this->Tip=$row[Тип];
            $result->close(); 
          }
      }
    }
  }
}

?>