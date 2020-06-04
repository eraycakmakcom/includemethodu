<?php include'fonks/header.php';

if (isset($_GET['onay'])) {
    $on=0;
}
elseif (isset($_GET['red'])) {
    $on=1;
}
else {
    $on=2;
}

?>

<div id="page-wrapper">
    <div id="page-inner">


        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Site Bilgileri</h1>
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
          <form role="form" method="post" action="fonks/yonet.php">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                    Arama Motoru Optimizasyonu
                  </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label>Google SEO</label>
                        <input class="form-control" name="site_bilgi" type="hidden">
                        <input class="form-control" name="site_google" type="text" value="<?php echo $site['site_google'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Yandex SEO</label>
                        <input class="form-control" name="site_yandex" type="text" value="<?php echo $site['site_yandex'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Bing SEO</label>
                        <input class="form-control" name="site_bing" type="text" value="<?php echo $site['site_bing'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Google Analystic</label>
                        <input class="form-control" name="site_analystic" type="text" value="<?php echo $site['site_analystic'];?>" >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        Site Bilgileri
                      </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label>URL</label>
                            <input class="form-control" name="site_url" type="text" value="<?php echo $site['site_url'];?>" required>
                          </div>
                          <div class="form-group">
                            <label>Site Açıklaması(DESC)</label>
                            <input class="form-control" name="site_desc" type="text" value="<?php echo $site['site_desc'];?>" required>
                          </div>
                          <div class="form-group">
                            <label>Site Title</label>
                            <input class="form-control" name="site_title" type="text" value="<?php echo $site['site_title'];?>" required>
                          </div>
                          <div class="form-group">
                            <label>Soru Metini</label>
                            <input class="form-control" name="site_soru" type="text" value="<?php echo $site['site_soru'];?>" required>
                          </div>
                          <button type="submit" class="btn btn-info">KAYDET</button>
                        </div>
                      </div>
                    </div>
                  </form>
            </div>






    <?php include'fonks/footer.php' ?>
