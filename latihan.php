<?php
include_once("inc_fungsi.php");
include_once("inc_koneksi.php");
include_once("inc_header.php");

 ?>
 <section id="latihan">
<div class="wrapper">


<div class="carousel owl-carousel">
    <div class="card card-1 ">
  <p class="dekripsi"> <?php echo ambil_kutipan('1') ?></p>
  <h2><?php echo ambil_judul('1') ?></h2>
  <?php echo maximum_kata(ambil_isi('1'),10) ?>
<p> <a href="<?php echo buat_link_halaman('1') ?>"class="tbl-pink">Pelajari Lebih Lanjut</a></p>
  </div>
<script>
$(".carousel").owlCarousel({
  margin:10,
  loop: true,
  autoplay: true,
  autoplayTimeout:2000,
  autoplayHoverPause: true,
  responsive: {
    0:{
      items:1,

      nav: false

    },
    600:{
      items:2,
      nav:false
    },
    1000:{
      items:3,
      nav:false
    }
  }
});

</script>

</div>
 </section>