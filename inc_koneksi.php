<?php
$host="localhost:3307";
$user="root";
$pass="";
$db="webdatabase";

$koneksi= mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) {
  die("Gagal terkoneksi");
}
/*else {
  echo ("Koneksi Berhasil");
}*/
 
?>