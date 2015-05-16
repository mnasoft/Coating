<?php
class db extends html {
  protected $mysqli;

  protected function __construct($a_host, $a_user, $a_password, $a_db , $a_charset) {
    $this->mysqli = new mysqli($a_host, $a_user, $a_password, $a_db);
    if ($this->mysqli->connect_errno)
      exit("Ошибка соединения с базой данных");
    $this->mysqli->set_charset($a_charset);
  }

  public function __destruct() {
    if (($this->mysqli) && (!$this->mysqli->connect_errno))
      $this->mysqli->close();
  }

  public function request() {
  }

  public function show_query_result($query="SHOW TABLES") {
    if ($result = $this->mysqli->query($query)) {
      if ($result->num_rows > 0) {
        echo <<<END
      <table border="2" rules="all">
        <caption>$query</caption>
        <tbody>
END;
        $j=0;
        while ($row = $result->fetch_assoc()) {
          $c_row=count ($row);
          $keys=array_keys($row);
          if ($j == 0) {
            echo "<tr>";
            for($i=0;$i < $c_row; ++$i)
              echo "<th>$keys[$i]</th>";
            echo "</tr>"; }
          echo "<tr>";
          for($i=0;$i < $c_row; ++$i){
            $tag=$keys[$i];
            echo "<td> " . $row[$tag] . "</td>"; }
          echo "</tr>";
          ++$j; }
        echo <<<END
    </tbody>
  </table>
END;
      }
      printf("Запрос вернул %d строк%s.\n", $result->num_rows, $this->numberOf($result->num_rows, array(0=>"у",1=>"и",2=>"",)));
      $result->close(); } // очищаем результирующий набор.
  }

  public function show_table($query="show databases", $table_caption="table", $btn="id", $onclick="Button_click_1", $callback_param="" ) {
    if ($result = $this->mysqli->query($query)) {
      if ($result->num_rows > 0) {
        echo <<<END
      <table border="2" rules="all">
        <caption>$table_caption</caption>
        <tbody>
END;
        $j=0;
        while ($row = $result->fetch_assoc())
        {
          $c_row=count ($row);
          $keys=array_keys($row);
          if (($j % 25) == 0)
          {
            echo "<tr>";
            for($i=0;$i < $c_row; ++$i)
              echo "<th>$keys[$i]</th>";
            echo "</tr>";
          }
          echo "<tr>";
          for($i=0;$i < $c_row; ++$i) {
            $tag=$keys[$i];
            if($i == 0)
              echo <<<END

            <td><button id="btn_$row[$tag]" type="button"  onclick="$onclick($row[$tag], '$btn', '$callback_param');" > $row[$tag] </button></td>
END;
            else
              echo "<td> " . $row[$tag] . "</td>"; }
          echo "</tr>";
          ++$j; }
        echo <<<END
    </tbody>
  </table>
END;
      }
      printf("Запрос вернул %d строк%s.\n", $result->num_rows, $this->numberOf($result->num_rows, array(0=>"у",1=>"и",2=>"",)));
      $result->close();
    }
  }
  public function print_filds() {
    $this->tag("h2", "host=$this->host");
//     $this->tag("h2", "user=$this->user");
//     $this->tag("h2", "password=$this->password");
    $this->tag("h2", "db=$this->db");
    $this->tag("h2", "charset=$this->charset"); }
  public function select_fields_from_table($location, $table, $fields, $reactor_name, $table_caption="table", $btn="id", $onclick="Button_click_1", $callback_param="") {
  $this->request();
  $this->make_js_reactor($location, $table, $fields, $reactor_name);
    $qv_filds="";
    $qv_filds_sign=" ";
    $qv_likes="";
    $qv_likes_sign="WHERE ( ";
    foreach ($fields as $key => $value) {
      $qv_filds .=  $qv_filds_sign . $value;
      $qv_filds_sign=", ";

      eval("\$v=\$this->$key;");
      $qv_likes .= $qv_likes_sign . $value . " LIKE \"%$v%\" " . " OR " . $value . " IS NULL ) ";
      $qv_likes_sign="AND ( ";
    }
    $query = "SELECT $qv_filds FROM $table $qv_likes";
    echo <<<table
<table border="2" rules="all">
  <caption>$table_caption</caption>
  <thead>
    <tr>
table;
    $this->show_input($location, $table, $fields, $reactor_name);
    echo <<<table
    </tr>
  </thead>
<tbody>

table;
    if ($result = $this->mysqli->query($query))
    {
      {
        $j=0;
        while ($row = $result->fetch_assoc())
        {
          $c_row=count ($row);
          $keys=array_keys($row);
          if (($j % 25) == 0) {
            echo "<tr>";
            for($i=0;$i < $c_row; ++$i)
              echo "<th>$keys[$i]</th>";
            echo "</tr>"; }
          echo "<tr>";
          for($i=0;$i < $c_row; ++$i) {
            $tag=$keys[$i];
            if($i == 0)
              echo <<<END

            <td><button id="btn_$row[$tag]" type="button"  onclick="$onclick($row[$tag],'$btn','$callback_param');" > $row[$tag] </button></td>
END;
            else
              echo "<td> " . $row[$tag] . "</td>"; }
          echo "</tr>";
          ++$j;
        }
      }
      echo <<<END
    </tbody>
  </table>
END;
      printf("Запрос вернул %d строк%s.\n", $result->num_rows, $this->numberOf($result->num_rows, array(0=>"у",1=>"и",2=>"",)));
      $result->close();
    }
  }

  public function show_input($location, $table, $fields, $reactor_name="razmernost_input_onblur"){
    echo "  <form> ";
    foreach ($fields as $key => $value)
    {
      eval("\$v=\$this->$key;");
      echo <<<input

      <th>
        <input style="background:#dfd; width:calc(100% - 10px);" id="$value" name="$value" size="1" type="text" value="$v"  onblur="$reactor_name();" >
      </th>
input;
    }
    echo "  </form>";
  }

  public function make_js_reactor($location, $table, $fields, $reactor_name="razmernost_input_onblur"){
    echo <<<script
<script>
  function $reactor_name()
  {
script;
    foreach ($fields as $key => $value)
    {
      echo <<<var
    var $key = window.document.getElementById("$value");
var;
    }
    echo <<<script
    var loc="$location";
script;
    $sign="?";
    foreach ($fields as $key => $value)
    {
      echo "loc=loc + \"$sign\" + \"$key\" + \"=\" + $key.value;";
      $sign="&";
    }
    echo <<<script
    window.location=loc;
  }
</script>
script;
  }
  final protected function numberOf($number, $suffix) {
        $keys = array(2, 0, 1, 1, 1, 2);
        $mod = $number % 100;
        $suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
        return $suffix[$suffix_key];
  }
  public function n_strok($n) {
    $suffix=array(0 =>"у", 1=>"и",2 =>"",);
    return $this->numberOf($n, $suffix);
  }

 }

?>