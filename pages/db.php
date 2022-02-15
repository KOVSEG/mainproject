<?php
$db = mysqli_connect('localhost', 'root', '!Admin', 'accessories');
if (!$db) {
  exit("Ошибка: " . mysqli_connect_error());
}
?>