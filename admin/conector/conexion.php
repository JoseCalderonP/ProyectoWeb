<?php
  $user_db="talabarteriatoño";
  $server="localhost";
  $pss="5FyJjHYbedJtjsso";

  $enlace = mysqli_connect($server, $user_db, $pss, $user_db);

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
      echo "errno de depuración: ".mysqli_connect_errno().PHP_EOL;
      echo "error de depuración: ".mysqli_connect_error() . PHP_EOL;
      exit;
  }
  
?>