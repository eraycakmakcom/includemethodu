<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1><?php if (strlen($site['site_soru']) > 0) {echo $site['site_soru'];}?></h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form  action="fonks/ilet.php" method="POST" role="form">

                         <!-- IF MAIL SENT SUCCESSFULLY -->
                         <h6 class="text-success">Your message has been sent successfully. </h6>

                         <!-- IF MAIL SENDING UNSUCCESSFULL -->
                         <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" id="cf-name" name="cf-name" placeholder="İsim" required>
                         </div>

                         <div class="col-md-6 col-sm-6">
                           <input type="hidden" class="form-control" name="gonderen" value="<?php echo $_SERVER['REQUEST_URI'];?>" required>
                              <input type="email" class="form-control" id="cf-email" name="cf-email" placeholder="Email adresi" required>
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Konu" required>
                              <textarea class="form-control" rows="5" id="cf-message" name="cf-message" placeholder="Mesaj" required></textarea>
                         </div>

                         <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                              <div class="section-btn">
                                   <button type="submit" class="form-control" id="cf-submit" name="submit"><span data-hover="Mesajı Gönder">Mesajı Gönder</span></button>
                              </div>
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>
