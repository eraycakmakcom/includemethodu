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
              <h1 class="page-head-line">Projelerim</h1>
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
                  <form role="form" method="POST" action="fonks/yonet.php" >
                      <div class="col-md-10 col-sm-20 col-xs-20">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            Projelerim
                          </div>
                            <div class="form-group">
                              <input name="site_referans" class="form-control" type="text" value="<?php echo $site['site_referans'];?>" required>
                              <input name="referans_duzenle" class="form-control" type="hidden">
                            </div>
                           <div class="form-group">
                             <textarea name="site_referans_alt"><?php echo $site['site_referans_alt'] ?></textarea>
                                <script>
                                  CKEDITOR.replace( 'site_referans_alt' );
                                  </script>
                            </div>
                              </div>
                              <button type="submit" class="btn btn-info">KAYDET</button>

                          </div>
                  </form>

            </div>








    <?php include'fonks/footer.php' ?>
