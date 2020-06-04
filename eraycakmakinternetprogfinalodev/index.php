<?php include 'fonks/header.php';
$pagekap = $db -> prepare("SELECT * from page ORDER BY page_time DESC LIMIT 8");
$pagekap ->execute(array());
$sayfa=$pagekap->fetchAll(PDO::FETCH_ASSOC); ?>
<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1><?php if (strlen($site['site_index']) > 0) {echo $site['site_index'];} else{echo "Lütfen bu alanı düzenleyin";} ?></h1>
                         <?php if (strlen($site['site_index_alt']) > 0) {echo $site['site_index_alt'];} else{echo "Lütfen bu alanı düzenleyin";} ?>
                         <ul class="section-btn">
                              <a href="hakkimda.php" class="smoothScroll"><span data-hover="HAKKIMDA">HAKKIMDA</span></a>
                         </ul>
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3><?php if (strlen($site['site_tanitim']) > 0) {echo $site['site_tanitim'];} else{echo "Lütfen bu alanı düzenleyin";} ?></h3>
                         <h1><?php if (strlen($site['site_tanitim_alt']) > 0) {echo $site['site_tanitim_alt'];} else{echo "Lütfen bu alanı düzenleyin";} ?></h1>
                    </div>
               </div>

          </div>
     </div>
</section>

<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">
  <?php foreach ($sayfa as $key): ?>
              <div class="col-md-6 col-sm-6">
               <!-- PROJECT ITEM -->
               <div class="project-item">
                   <a href="<?=$base.seo($key["page_title"]).'/'.$key["page_id"]?>">
                        <img src="images/<?php if (strlen($key['page_img']) > 0) {echo $key['page_img'];} else{echo $site['site_stimg'];} ?>" class="img-responsive" alt="">

                        <div class="project-overlay">
                             <div class="project-info">
                                  <h1><?php echo $key['page_title'] ?></h1>
                                  <h3>DEVAMINI OKU...</h3>
                             </div>
                        </div>
                   </a>
              </div>
              </div>
  <?php endforeach; ?>
        </div>
     </div>
</section>


<!-- TEAM -->

<?php include 'fonks/tavsiye.php'; ?>


<!-- CONTACT -->
<?php include 'fonks/soru.php' ?>


<!-- FOOTER -->

<?php include 'fonks/footer.php' ?>
