<?php include 'fonks/header.php' ?>
<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                 <div class="about-info">


                  <?php if (strlen($signal['owner_hk']) > 0) {echo $signal['owner_hk'];}?>


                </div>
             </div>
          </div>
     </div>
</section>



<?php include 'fonks/soru.php' ?>


<!-- FOOTER -->
<?php include 'fonks/footer.php' ?>
