<?php
function url_dasar(){
  //dkd
  $url_dasar= "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
  return $url_dasar;
}
function url_ig(){
  //dkd
  $url_ig= "https://www.instagram.com/unipem.ac.id/";
  return $url_ig;
}

function ambil_gambar($id_tulisan){
  global $koneksi;
  $sql1 = "select *from halaman where id='$id_tulisan'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $text =$r1['isi'];
preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
$gambar = $img[1];//../gambar/filename.jpeg
$gambar = str_replace("../gambar/",url_dasar()."/gambar/",$gambar);

return $gambar;

}
function ambil_kutipan($id_tulisan){
global $koneksi;
$sql1 = "select * from halaman where id ='$id_tulisan'";
$q1 =mysqli_query($koneksi,$sql1);
$r1 = mysqli_fetch_array($q1);
$text=$r1['kutipan'];
return $text;
}
function ambil_judul($id_tulisan){
global $koneksi;
$sql1 = "select * from halaman where id ='$id_tulisan'";
$q1 =mysqli_query($koneksi,$sql1);
$r1 = mysqli_fetch_array($q1);
$text=$r1['judul'];
return $text;
}

function ambil_isi($id_tulisan){
global $koneksi;
$sql1 = "select * from halaman where id ='$id_tulisan'";
$q1 =mysqli_query($koneksi,$sql1);
$r1 = mysqli_fetch_array($q1);
$text=strip_tags($r1['isi']);
return $text;
}
function ambil_soal($id_tulisan){
  global $koneksi;
  $sql1 = "select * from halaman where id ='$id_tulisan'";
  $q1 =mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $text=$r1['kutipan'];
  return $text;
  }
  
function bersihkan_judul ($judul){
$judul_baru = strtolower($judul);
$judul_baru = preg_replace("/[^a-zA-z0-9\s]/","",$judul_baru);
$judul_baru = str_replace(" ","-",$judul_baru);
return $judul_baru;


}

function buat_link_halaman($id){
  global $koneksi;
  $sql1 ="select * from halaman where id= '$id'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $judul = bersihkan_judul( $r1['judul']);
  return url_dasar()."/halaman.php/$id/$judul";
}
function buat_link_tutors($id){
  global $koneksi;
  $sql1 ="select * from tutors where id= '$id'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $nama = bersihkan_judul( $r1['nama']);
  return url_dasar()."/tutors.php/$id/$nama";
}
function buat_link_partners($id){
  global $koneksi;
  $sql1 = "select * from partners where id= '$id'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);
  $nama = bersihkan_judul($r1['nama']);
  return url_dasar() . "/partners.php/$id/$nama";
}
function dapatkan_id(){
$id ="";
if (isset($_SERVER['PATH_INFO'])) {
  $id = dirname($_SERVER['PATH_INFO']);
  $id = preg_replace("/[^0-9]/","",$id);
}
return $id;

}
function set_isi($isi){
  $isi =str_replace("../gambar/",url_dasar()."/gambar/",$isi);
  return $isi;
}
function maximum_kata($isi,$maximum){
  $array_isi = explode(" ",$isi);
  $array_isi = array_slice($array_isi,0,$maximum);
  $isi = implode(" ",$array_isi);
  return $isi;
}
function ambil_isi_info($id,$kolom){
  global $koneksi;
  $sql1 = "select $kolom from info where id = '$id'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 =mysqli_fetch_array($q1);
  return $r1[$kolom];
}
function partners_foto($id){
  global $koneksi;
  $sql1 = "select * from partners where id ='$id'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $foto = $r1['foto'];
  if ($foto) {
    return $foto;
  }else {
    return 'partners_default_picture.png';
  }
}
function tutors_foto($id){
  global $koneksi;
  $sql1 = "select * from tutors where id ='$id'";
  $q1 = mysqli_query($koneksi,$sql1);
  $r1 = mysqli_fetch_array($q1);
  $foto = $r1['foto'];
  if ($foto) {
    return $foto;
  }else {
    return 'partners_default_picture.png';
  }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  
function kirim_email($email_penerima,$nama_penerima,$judul_email,$isi_email){
      
  $email_pengirim = "onigramadhan@gmail.com";
  $nama_pengirim = "noreply";

  //Load Composer's autoloader
  require getcwd(). '/vendor/autoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = 0;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = $email_pengirim;                     //SMTP username
      $mail->Password   = 'secret';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($email_pengirim, $nama_pengirim);
      $mail->addAddress($email_penerima, $nama_penerima);     //Add a recipient
      
    
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $judul_email;
      $mail->Body    = $isi_email;
  
      $mail->send();
        return "sukses";
      }catch (Exception $e) {
      return "gagal";
    
    

    }
  }

