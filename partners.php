<?php include_once("inc_koneksi.php");
include_once("inc_fungsi.php");
//http://localhost/websederhana/halaman.php/10/apa-itu-database
//print_r($_SERVER);
$id = dapatkan_id();
$sql1 = "select * from partners where id = '$id'";
$q1 = mysqli_query($koneksi,$sql1);
$n1 = mysqli_num_rows($q1);
$r1 = mysqli_fetch_array($q1);
$nama = $r1['nama'];

 ?>

<?php include_once("inc_header.php") ?>

<?php
if($nama== ''){
  echo"<div><p>Maaf Data yang kamu maksud tidak ditemukan :(</p></div>) ";
}else {
  ?>
  
  <h1><?php echo $r1['nama'] ?></h1>
  <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>

  <?php echo set_isi($r1['isi'])?>
  <?php
}

 ?>


<?php include_once("inc_footer.php") ?>
