<?php include 'fonks/header.php' ?>
<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                 <div class="about-info">
                    <h1><?php if (strlen($site['site_referans']) > 0) {echo $site['site_referans'];}?></h1>
                  <?php if (strlen($site['site_referans_alt']) > 0) {echo $site['site_referans_alt'];}?>
                </div>
             </div>
          </div>
     </div>
</section>

<?php include 'fonks/soru.php' ?>

<!-- FOOTER -->
<?php include 'fonks/footer.php' ?>
