</section>

 <!-- untuk tutors -->
 <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Tutors</p>
                    <h2>Dosen</h2>
                    
                </div>
                <div class="tutor-list">
                  <?php  
                  $sql1 ="select * from tutors order by id desc";
                  $q1 =mysqli_query($koneksi,$sql1);
                  while ($r1 = mysqli_fetch_array($q1)){
                    ?>
                    <div class="kartu-tutor">
                      <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                <img src="<?php echo url_dasar()."/gambar/".tutors_foto($r1['id'])?>"/>
                <p><?php echo $r1['nama'] ?></p>
                
                  </div>  
                    <?php
                  }
                  
                  ?>
                </a>
                </div>

                </div>
          

              </section>
  <!--untuk partners-->
  <section id="partners">
<div class="tengah">
  <div class="kolom">
    <p class="dekripsi">Our Top Partners</p>
    <h2>Partners</h2>

  </div>
 <div class="partners-list">
 <?php  
                  $sql1 = "select * from partners order by id desc";
                  $q1 = mysqli_query($koneksi,$sql1);
                  while ($r1= mysqli_fetch_array($q1)){
                    ?>


  <div class="kartu-partners">
    <a href="<?php echo url_ig() ?>"> 
    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
<p><?php echo $r1 ['nama']?></p>
                
                  
  </div>
<?php 
                  }
                  ?>
                  
  </div>
                </a>
</div>
  </section>


  <div id="contact">
    <div class="wrapper">
      <div class="footer">


      <div class="footer-section">

        <h3><?php echo ambil_isi_info('1','judul') ?> </h3>
        <p><?php echo ambil_isi_info('1','isi') ?></p>

      </div>
      <div class="footer-section">
        <h3><?php echo ambil_isi_info('2','judul') ?></h3>
        <p><?php echo ambil_isi_info('2','isi') ?></p>

      </div>
      <div class="footer-section">
        <h3><?php echo ambil_isi_info('3','judul') ?></h3>
        <p><?php echo ambil_isi_info('3','isi'); ?></p>
      </div>

    </div>

  </div>

</div>
<div id="copyrigth">
  <div class="wrapper">
    2023.<b>BasisdataUnipi</b>All Right Reserved.

  </div>

</div>
<!--<audio controls>
      <source src="audio/monolog.mp3" type="audio/mpeg">
</audio>-->
<audio controls autoplay>
  <source src="audio/monolog.mp3" type="audio/mpeg">  
</audio>

<script type="text/javascript">
var counter=1 ;
setInterval(function(){document.getElementById('radio'+counter).checked = true;
counter++;
if (counter >4) {
  counter =1 ;

}

},5000);
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bootstrap/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
