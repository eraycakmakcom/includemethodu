<?php
$gelabikap = $db -> prepare("SELECT * from page ORDER BY page_okunma DESC LIMIT 8");
$gelabikap ->execute(array());
$gelabi=$gelabikap->fetchAll(PDO::FETCH_ASSOC);
 ?>


<section id="team" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Bunlara da göz at?</h1>
                    </div>
               </div>

               <div class="clearfix"></div>
               <div id="owl-team" class="owl-carousel">
                 <?php foreach ($gelabi as $gel): ?>
                   <div class="col-md-4 col-sm-4 item">
                        <div class="team-item">
                             <img src="images/<?php echo $gel['page_img'] ?>" class="img-responsive" alt="">
                             <div class="team-overlay">
                                  <ul class="social-icon">
                                       <li><a href="<?=$base.seo($key["page_title"]).'/'.$key["page_id"]?>" class="fa fa-find"></a></li>
                                  </ul>
                             </div>
                        </div>
                        <h3><?php echo $gel['page_title'] ?></h3>
                   </div>
                <?php endforeach; ?>
               </div>
          </div>
     </div>
</section>
