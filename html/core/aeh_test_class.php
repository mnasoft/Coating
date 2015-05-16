<?php

class aeh_test extends add_edit_haracteristics {

  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function print_filds() {
  $fields=array(
    'id'                        => $this->id,
    'Naimenovanie'              => $this->Naimenovanie,
    'Oboznachenie'              => $this->Oboznachenie,
    'Chislo'                    => $this->Chislo,
    'Chislo_min'                => $this->Chislo_min,
    'Chislo_max'                => $this->Chislo_max,
    'Stroka'                    => $this->Stroka,
    'TipDannyh_id'              => $this->TipDannyh_id,
    'Razmernost_id'             => $this->Razmernost_id,
    'Mnozitel_10_id'            => $this->Mnozitel_10_id,
    'Action'                    => $this->Action,
    'isInputChisloVisible'      => $this->isInputChisloVisible,
    'isInputChislo_minVisible'  => $this->isInputChislo_minVisible,
    'isInputChislo_maxVisible'  => $this->isInputChislo_maxVisible,
    'isInputStrokaVisible'      => $this->isInputStrokaVisible );
  foreach ($fields as $key => $value)
    $this->tag("h4", "$key = $value");
  }
}

?>