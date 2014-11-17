<?php
  require_once 'db_connect/hupd.php';

//  $cnt=new add_edit_haracteristics($host, $user, $password, $db , $charset);
  $cnt=new aeh_test($host, $user, $password, $db , $charset);

  $cnt->request();
  $cnt->page_start("PROTECTIVE COATINGS DATA. Добавление и Редактирование Характеристик.");
  
  $this_file = basename (__FILE__);
  echo $cnt->tag_2("header",$cnt->tag_2("h1", $this_file));
  $cnt->action();
  
  $SuschnostOboznachenieById = $cnt->getSuschnostOboznachenieById();
  $TipDannyhNaimenovanieById = $cnt->getTipDannyhNaimenovanieById();
  $ob_r = $cnt->getMnozitelOboznachenieRusByStepen();
  $RazmernostTipById = $cnt->getRazmernostTipById();
  $suffics = 'б/р';
  $suffics = $cnt->getSuffics();
  
  $cnt->section_open("dialog");
  echo html::tag_2("header",html::tag_2("h3", "Добавление характеристик"));
  echo <<<END

      <form action="$this_file">
        <fieldset>
          <legend>
            <button id="btn_Haracteristic_list_all" type="button" onclick="Frame_show('tbl_content', 'haracteristic_aes.php');" >Характеристика</button>
            <input id="id" name="id" type="text" value="$cnt->id"  size="4" />
          </legend>
          <table>
            <tbody>
              <tr>  <td>  </td>
                    <td> </td> </tr>
                           
              <tr>  
                <td> 
                  <button id="btn_Suschnost_id" type="button" onclick="Frame_show('tbl_content','suschnost.php');" >Сущность</button> 
                  <input id="Suschnost_id" name="Suschnost_id" type="text" value="$cnt->Suschnost_id"  
                           onclick="Frame_show('tbl_content','suschnost.php');" size="4" />
                  <button id="btn_Haracteristic_list" type="button" onclick="Haracteristic_list_frame_show('tbl_content');" >Характеристики</button>
                </td>
                    <td>  $SuschnostOboznachenieById </td> </tr>
              
              <tr>  <td> <button id="btn_TipDannyh_id" type="button" onclick="Frame_show('tbl_content','tipdannyh.php');" >Тип данных</button> </td>
                    <td> <input id="TipDannyh_id" name="TipDannyh_id" type="number" value="$cnt->TipDannyh_id" 
                            onclick="Frame_show('tbl_content','tipdannyh.php');" hidden />  $TipDannyhNaimenovanieById </td> </tr>

              <tr>  <td>  <button id="btn_Mnozitel_id" type="button" onclick="Frame_show('tbl_content','mnozitel.php');" >10<sup>X</sup>*</button>
                          <button id="btn_Razmernost_id" type="button" onclick="Frame_show('tbl_content','razmernost.php');" >Размерность</button> </td> 
                    <td>  <input id="Mnozitel_10_id" name="Mnozitel_10_id" type="text" value="$cnt->Mnozitel_10_id" 
                            onclick="Frame_show('tbl_content','mnozitel.php');" hidden /> 
                          <input id="Razmernost_id" name="Razmernost_id" type="number" value="$cnt->Razmernost_id" 
                            onclick="Frame_show('tbl_content','razmernost.php');" hidden /> $RazmernostTipById, $suffics </td> </tr>

              <tr>  <td> <label for="Naimenovanie">Наименование</label> </td>
                    <td> <input id="Naimenovanie" name="Naimenovanie" value="$cnt->Naimenovanie" type="text" /> </td> </tr>
              
              <tr>  <td> <label for="Oboznachenie">Обозначение</label> </td>
                    <td> <input id="Oboznachenie" name="Oboznachenie" value="$cnt->Oboznachenie" /> </td> </tr>
END;
  $cnt->htmlTrVisibleInput();
  $cnt->table_tbody_close();
  $cnt->htmlHiddenInput();
  //hidden=""
  echo <<<END
          <input type="submit" id="Action" name="Action" value="Обновить" />
          <input type="submit" id="Action" name="Action" value="Добавить">
          <input type="submit" id="Action" name="Action" value="Удалить" /> <br />
        </fieldset>
      </form>
END;
  echo html::tag_2("foter",html::tag_2("h3", "Добавление характеристик"));
  $cnt->section_close();
//  echo $cnt->tag_2("foter",$cnt->tag_2("h1", $this_file));
  $cnt->body_close();
  $cnt->html_close();

?>

