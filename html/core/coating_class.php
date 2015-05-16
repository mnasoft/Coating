<?php

class coating extends db {
  public $a=array(
    'add_edit_haracteristics' => "./html/add_edit_haracteristics.php",
    'add_edit_suschnost' => "./html/add_edit_suschnost.php" );
  public $b="./~namatv/coating/html/add_edit_suschnost.php";

  public function __construct($a_host, $a_user, $a_password, $a_db , $a_charset){
    parent::__construct($a_host, $a_user, $a_password, $a_db , $a_charset);
  }

  public function create() {
    foreach ($this->a as $key => $value) {
      echo <<<END
      <p><a href="$value">$key</a></p>
END;
    }
  }

  public function about() {
    echo <<<about

  <h1>База даннных композиционных покрытий.</h1>
about;
  }

  public function doc_ipe_DbStruct() {
    echo <<<doc_ipe_DbStruct
  <h1>Coating</h1>
  <h2>Структура таблиц БД</h2>
  <section class="center">
  <img src="./img/db_coating_structure.png"></img>
  </section>
doc_ipe_DbStruct;
  }

  public function contact() {
    echo <<<contact

<p>Казимиренко Юлия Алексеевна.</p>
<p><a href="http://www.nuos.edu.ua/">НУК</a>, доцент кафедры метериаловедения</p>
<p>e-mail: <a href="mailto:u.a.kazimirenko@gmail.com">u.a.kazimirenko@gmail.com</a> </p>
<img src="./img/uakazi.jpe" alt="Казимиренко Ю.А." >
contact;
  }

  public function home(){
    echo <<<home
    <h2>Национальный Университет Кораблестроения имени адмирала С.О.&nbsp;Макарова</h2>
    <h1>Protective Coatings Data</h1>
home;
  }

}
?>