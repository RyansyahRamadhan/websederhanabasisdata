<?php include_once("inc_header.php") ?>
<!--untuk home -->
  <section id="home">
    <div class="slider">


<div class="slides">
  <!--<span id="slide-1"></span>
  <span id="slide-2"></span>
  <span id="slide-3"></span>-->

  <input type="radio" name="radio-btn" id="radio1">
  <input type="radio" name="radio-btn" id="radio2">
  <input type="radio" name="radio-btn" id="radio3">
  <div class="slide first">
    <img src="https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg" />
  </div>
  <div class="slide">
    <img src="https://img.freepik.com/free-vector/programmer-work-with-working-day-symbols-flat-illustration_1284-60322.jpg?size=626&ext=jpg&ga=GA1.1.45605329.1673983575" />

  </div>
  <div class="slide">
  <img src="https://img.freepik.com/free-vector/app-development-concept-with-programming-languages_23-2148688949.jpg?w=740&t=st=1673983590~exp=1673984190~hmac=100c044d063defbe180b4caf81d15ab85a2bb27e27704bb3a3047eb6c523717f" />
</div>

  <div class="navigation-auto">
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
  </div>
  <!-- <div class="navigation">
    <a href="#slide-1">1</a>
    <a href="#slide-2">2</a>
    <a href="#slide-3">3</a>
  </div>-->
  </div>
<div class="navigation-manual">
  <label for="radio1" class="manual-btn"></label>
  <label for="radio2" class="manual-btn"></label>
  <label for="radio3" class="manual-btn"></label>

</div>

</div>
<script type="text/javascript">
var counter = 1;
setInterval(function(){
  document.getElementById('radio'+ counter) .checked = true;
  counter++;
  if (counter > 3) {
    counter = 1;
  }
},5000);

</script>
  </section>



  <!--untuk materi-->
  <section id="materi">
<div class="wrapper">

    <div class="carousel owl-carousel">
    <div class="card card-1 ">
  <p class="dekripsi"> <?php echo ambil_kutipan('1') ?></p>
  <h2><?php echo ambil_judul('1') ?></h2>
  <?php echo maximum_kata(ambil_isi('1'),10) ?>
<p> <a href="<?php echo buat_link_halaman('1') ?>"class="tbl-pink">Pelajari Lebih Lanjut</a></p>
  </div>
<div class="card card-2">
<p class="dekripsi"><?php echo ambil_kutipan('17') ?></p>
<h2><?php echo ambil_judul('17') ?><</h2>
<?php echo maximum_kata(ambil_isi('17'),5)?>
<p> <a href="<?php echo buat_link_halaman('17') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
<div class="card card-3">
  <p class="dekripsi"><?php echo ambil_kutipan('10') ?></p>
      <h2><?php echo ambil_judul('10') ?></h2>
      <?php echo maximum_kata (ambil_isi('10'),16)?>
  <p><a href="<?php echo buat_link_halaman('10') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
<div class="card card-4">
<p class="dekripsi"><?php echo ambil_kutipan('13') ?></p>
<h2><?php echo ambil_judul('13') ?><</h2>
<?php echo ambil_isi('13') ?>
<p> <a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
<div class="card card-5">
<p class="dekripsi"><?php echo ambil_kutipan('13') ?></p>
<h2><?php echo ambil_judul('13') ?><</h2>
<?php echo ambil_isi('13') ?>
<p> <a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
<div class="card card-6">
<p class="dekripsi"><?php echo ambil_kutipan('13') ?></p>
<h2><?php echo ambil_judul('13') ?><</h2>
<?php echo ambil_isi('13') ?>
<p> <a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
<div class="card card-7">
<p class="dekripsi"><?php echo ambil_kutipan('13') ?></p>
<h2><?php echo ambil_judul('13') ?><</h2>
<?php echo ambil_isi('13') ?>
<p> <a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>

<div class="card card-8">
<p class="dekripsi"><?php echo ambil_kutipan('14') ?></p>
<h2><?php echo ambil_judul('14') ?><</h2>
<?php echo ambil_isi('14') ?>
<p> <a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
</div>
</div>
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
<?php include_once("inc_footer.php") ?>
