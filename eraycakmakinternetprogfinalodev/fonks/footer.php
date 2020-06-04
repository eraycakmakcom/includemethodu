
<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">



               <div class="col-md-4 col-sm-12">
                    <div class="footer-info">
                      <h2>  <?php if (strlen($site['site_footer1']) > 0) {echo $site['site_footer1'];} else{echo "Lütfen bu alanı düzenleyin";}?></h2>
                      <?php if (strlen($site['site_footer1_text']) > 0) {echo $site['site_footer1_text'];}?>
                      <br>
                    </div>
               </div>
               <div class="col-md-4 col-sm-12">
                    <div class="footer-info">
                      <h2>  <?php if (strlen($site['site_footer2']) > 0) {echo $site['site_footer2'];} else{echo "Lütfen bu alanı düzenleyin";}?></h2>
                      <?php if (strlen($site['site_footer2_text']) > 0) {echo $site['site_footer2_text'];}?>
                      <br>
                    </div>
               </div>
               <div class="col-md-4 col-sm-12">
                    <div class="footer-info">
                      <h2>  <?php if (strlen($site['site_footer3']) > 0) {echo $site['site_footer3'];} else{echo "Lütfen bu alanı düzenleyin";}?></h2>
                      <?php if (strlen($site['site_footer3_text']) > 0) {echo $site['site_footer3_text'];}?>
                        <br>
                    </div>
               </div>

               <div class="clearfix">
                      <ul class="social-icon">
                   <?php if (strlen($signal['owner_twit']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_twit'] ?>" class="fa fa-twitter"></a></li> <?php } ?>
                   <?php if (strlen($signal['owner_facebook']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_facebook'] ?>" class="fa fa-facebook"></a></li> <?php } ?>
                   <?php if (strlen($signal['owner_pin']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_pin'] ?>" class="fa fa-pinterest"></a></li> <?php } ?>
                   <?php if (strlen($signal['owner_insta']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_insta'] ?>" class="fa fa-instagram"></a></li> <?php } ?>
                   <?php if (strlen($signal['owner_git']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_git'] ?>" class="fa fa-github"></a></li> <?php } ?>
                   <?php if (strlen($signal['owner_linkedin']) > 0) {?>  <li><a target="_blank" href="<?php echo $signal['owner_linkedin'] ?>" class="fa fa-linkedin"></a></li> <?php } ?>
                       </ul>
                </div>

               <div class="col-md-8 col-sm-8">
                    <div class="copyright-text">
                      <p><a href="https://eraycakmak.com" target="_blank">Eray ÇAKMAK</a> &copy;| <script>document.write(new Date().getFullYear());</script></p>
                    </div>
               </div>

          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php $db=NULL; ?>
