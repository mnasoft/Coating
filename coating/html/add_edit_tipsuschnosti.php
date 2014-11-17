<?php
  require_once 'db_connect/hupd.php';
  
  $cnt=new add_edit_tipsuschnosti($host, $user, $password, $db , $charset);
  $cnt->request();
  $cnt->page_start("PROTECTIVE COATINGS DATA. Добавление/Редактирование/Удаление Типов Сущностей.");
  
  $this_file = basename (__FILE__);
  echo $cnt->tag_2("header",$cnt->tag_2("h1", $this_file));
  
  $cnt->action();
  
  $cnt->getFieldsByTipsuschnosti_id();
  $TipFromTipSuschnosti = $cnt->getFieldsByTipsuschnosti_id();
  echo <<<END

    <section id="dialog">
      <h1>$this_file</h1>
      <form action="$this_file">
        <fieldset>
          <legend>
            <button id="btn_Sushnost_list" type="button" onclick="Frame_show('tbl_content', 'tipsuschnosti_tbl.php');" >Тип Сущности</button>
            <input id="id" name="id" type="text" value="$cnt->id" size="4" />
            </legend>
          <table>
            <tbody>
              <tr>  <td> <label for="Tip">Тип</label> </td>
                    <td> <input id="Tip" name="Tip" type="text" value="$cnt->Tip" /></td> </tr>
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
