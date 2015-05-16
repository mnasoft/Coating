<?php
  require_once 'db_connect/hupd.php';
  
  $cnt=new add_edit_suschnost($host, $user, $password, $db , $charset);
  $cnt->request();
  $cnt->page_start("PROTECTIVE COATINGS DATA. Добавление и Редактирование Сущностей.");
  
  $this_file = basename (__FILE__);
  echo $cnt->tag_2("header",$cnt->tag_2("h1", $this_file));
 
  $cnt->action();
  
  $cnt->getFieldsBySuschnost_id();
  $TipFromTipSuschnosti = $cnt->getTipFromTipSuschnosti();
  echo <<<END

    <section id="dialog">
      <h1>$this_file</h1>
      <form action="$this_file">
        <fieldset>
          <legend>
            <button id="btn_Sushnost_list" type="button" onclick="Frame_show('tbl_content', 'suschnost_aes.php');" >Сущность</button>
            <input id="id" name="id" type="text" value="$cnt->id" size="4" />
            </legend>
          <table>
            <tbody>
              <tr>  <td> <button id="btn_TipSuschnosti_id" type="button" onclick="Frame_show('tbl_content','tipsuschnosti.php');" >Тип Сущности</button> </td>
                    <td> <input id="TipSuschnosti_id" name="TipSuschnosti_id" type="text" value="$cnt->TipSuschnosti_id" hidden />  $TipFromTipSuschnosti </td>  </tr>
              <tr>  <td> <label for="Oboznachenie">Обозначение</label> </td>
                    <td> <input id="Oboznachenie" name="Oboznachenie" type="text" value="$cnt->Oboznachenie" /></td> </tr>
              <tr>  <td> <label for="Naimenovanie">Наименование</label> </td>
                    <td> <input id="Naimenovanie" name="Naimenovanie" type="text" value="$cnt->Naimenovanie" /></td> </tr>
              <tr>  <td> <label for="Primechanie">Примечание</label> </td>
                    <td> <input id="Primechanie" name="Primechanie" type="text" value="$cnt->Primechanie" /></td> </tr>
            </tbody>
          </table>
          
          <input type="submit" id="Action" name="Action" value="Добавить" />
          <input type="submit" id="Action" name="Action" value="Обновить" />
          <input type="submit" id="Action" name="Action" value="Удалить" />
          
        </fieldset>
      </form>
    </section>
  </body>
</html>
END;

?>
