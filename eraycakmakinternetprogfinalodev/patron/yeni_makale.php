<?php include'fonks/header.php';

if (isset($_GET['onay']))
 {
    $on=0;
}
elseif (isset($_GET['red']))
{
    $on=1;
}
else
{
    $on=2;
}
$kategori = $db -> prepare("SELECT * from kategori");
$kategori ->execute(array());
$kategoriler=$kategori->fetchAll(PDO::FETCH_ASSOC);
 ?>

<div id="page-wrapper">
    <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">Yeni Makale</h1>
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
          <form role="form" action="fonks/yonet.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="yeni_makale" value="">
            <div class="col-md-8">
              <textarea name="editor1" required></textarea>
                  <script>
                          CKEDITOR.replace( 'editor1' );
                  </script>
                  <br>
            </div>
            <div class="col-md-4">
                 <div class="panel panel-default">
                        <div class="panel-heading">
                        Yeni Yazı için Görsel
                        </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <div class="form-group">
                          <label>Makale Başlık</label>
                          <input class="form-control" name="page_title" type="text" value="" required>
                        </div>
                                  </div>
                      <div class="form-group">
                        <label>Özet Bilgi</label>
                        <input class="form-control" name="page_ozet" type="text" value="" required>
                      </div>
                      <div class="form-group">
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div>
                                  <input class="form-control" type="hidden" name="page_img">
                                  <input type="file" name="fileToUpload" value="" class="btn btn-success" >
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-lg-4">Mevcut Görsel</label>
                          <div class="">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="../images/<?php echo $ownerbilgi['owner_stimg'] ?>" alt="" /></div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              </div>
                          </div>
                      </div>
                    <div class="alert alert-warning"><strong>Diikat!</strong> Sadece .jpg/.png uzantılı dosyalar yüklenebilir. Dosya Boyutu 5MB ile sınırlandırılmıştır.</div>
                        <button type="submit" class="btn btn-info">KAYDET</button>
                  </div>
                </div>
            </div>
          </form>
        </div>


    <?php include'fonks/footer.php' ?>
