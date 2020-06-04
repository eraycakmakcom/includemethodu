<?php include'fonks/header.php';
if (isset($_GET['onay'])) {
    $on=0;
}
elseif (isset($_GET['red'])) {
    $on=1;
}
else {
    $on=2;
} ?>
?>

<div id="page-wrapper">
    <div id="page-inner">
       <div class="row">
            <div class="col-md-12">
              <h1 class="page-head-line">Footer Ayarları</h1>
              <?php if ($on==2): ?>
              <h1 class="page-subhead-line">Düzenledikten sonra kaydete basmanız gerekir.</h1>
            <?php endif; ?>
              <?php if ($on==0): ?>
                <h1 class="page-subhead-line">Kayıt Başarılı.</h1>
              <?php endif; ?>
              <?php if ($on==1): ?>
                <h1 class="page-subhead-line"><?php if ($_GET['red']==null){echo "HATA !";}else{echo $_GET['red'];}?></h1>
              <?php endif; ?>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
                  <form role="form" method="POST" action="" >
                      <div class="col-md-4 col-sm-10 col-xs-12">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            Footer Sol Köşe
                          </div>
                            <div class="form-group">
                              <input name="site_footer1" class="form-control" type="text" value="<?php echo $site['site_footer1'];?>" required>
                              <input name="footer_duzenle" class="form-control" type="hidden">
                            </div>
                           <div class="form-group">
                             <textarea name="site_footer1_text"><?php echo $site['site_footer1_text'] ?></textarea>
                                <script>
                                  CKEDITOR.replace( 'site_footer1_text' );
                                  </script>
                            </div>
                              </div>

                          </div>
                          <div class="col-md-4 col-sm-10 col-xs-12">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                Footer Orta Alan
                              </div>
                                  <div class="form-group">
                                    <input name="site_footer2" class="form-control" type="text" value="<?php echo $site['site_footer2'];?>" required>
                                    </div>
                                    <div class="form-group">
                                    <textarea name="site_footer2_text"><?php echo $site['site_footer2_text'] ?></textarea>
                                        <script>
                                         CKEDITOR.replace( 'site_footer2_text' );
                                        </script>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-10 col-xs-12">
                                <div class="panel panel-info">
                                  <div class="panel-heading">
                                    Footer Sağ Köşe
                                  </div>
                                      <div class="form-group">
                                        <input name="site_footer3" class="form-control" type="text" value="<?php echo $site['site_footer3'];?>" required>
                                        </div>
                                        <div class="form-group">
                                        <textarea name="site_footer3_text"><?php echo $site['site_footer3_text'] ?></textarea>
                                            <script>
                                             CKEDITOR.replace( 'site_footer3_text' );
                                            </script>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-info">KAYDET</button>
                                  </div>

                  </form>

            </div>








    <?php include'fonks/footer.php' ?>
