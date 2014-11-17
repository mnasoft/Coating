<?php
  require_once 'db_connect/hupd.php';

  $cnt=new coating($host, $user, $password, $db , $charset);

  $cnt->page_start("PROTECTIVE COATINGS DATA. Download_file.");
?>
  <form enctype="multipart/form-data" action="move_file.php" method="POST">   <!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />             <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
      Отправить этот файл: <input name="userfile" type="file" />              <!-- Название элемента input определяет имя в массиве $_FILES -->
    <input type="submit" value="Send File" />
  </form>
  
<?php
  $cnt->page_end();
?>

