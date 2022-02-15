<?php
  $servname = "http://".$_SERVER['SERVER_NAME'];
  if( !isset($_SESSION['Name'])) {
    echo '
      <a href = "'.$servname.'/pages/auth.php">Войдите</a> или
      <a href = "'.$servname.'/pages/reg.php">Зарегистрируйтесь</a>
    ';
  } else {
    echo '
      '.$_SESSION['Name'].' |
      <a href = "'.$servname.'/pages/logout.php">Выход</a>
    ';
  }
?>