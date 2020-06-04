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
              <h1 class="page-head-line">Anasayfa Ayarları</h1>
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
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            Anasayfa Karşılama Yazısı
                          </div>
                              <div class="panel-body">
                                <div class="form-group">
                              </div>
                                    <div class="form-group">
                                          <label>İndex Karşılama</label>
                                          <input name="site_index" class="form-control" type="text" value="<?php echo $site['site_index'];?>" required>
                                          <input name="ana_duzenle" class="form-control" type="hidden" >
                                    </div>
                                    <div class="form-group">
                                          <label>İndex Karşılama ALT</label>
                                          <input name="site_index_alt" class="form-control" type="text" value="<?php echo $site['site_index_alt'];?>" required>
                                    </div>
                                    <div class="form-group">
                                          <label>İndex Tanıtım Yazısı</label>
                                          <input name="site_tanitim" class="form-control" type="text" value="<?php echo $site['site_tanitim'];?>" required>
                                    </div>
                                    <div class="form-group">
                                          <label>İndex Tanıtım Yazısı ALT</label>
                                          <input name="site_tanitim_alt" class="form-control" type="text" value="<?php echo $site['site_tanitim_alt'];?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-info">KAYDET</button>
                              </div>
                            </div>
                          </div>
                        </form>
            </div>








    <?php include'fonks/footer.php' ?>
