<?php include'fonks/header.php';
if (isset($_GET['page_id']))
 { $page_id = $_GET['page_id'];
  if ($page_id == NULL){ header('Location: index.php');}
}
else
{
  header('Location: index.php');
}
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
//$page_id = 25;
$kategori = $db -> prepare("SELECT * from kategori");
$kategori ->execute(array());
$kategoriler=$kategori->fetchAll(PDO::FETCH_ASSOC);

$pagegetir = $db -> prepare("SELECT * from page where page_id=?");
$pagegetir ->execute(array($page_id));
$page=$pagegetir->fetch(PDO::FETCH_ASSOC); ?>

<div id="page-wrapper">
    <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">Düzenle</h1>
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
            <input type="hidden" name="makale_duzenle" value="">
            <div class="col-md-8">
              <textarea name="editor1" required><?php echo $page['page_text'] ?></textarea>
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
                          <input class="form-control" name="page_title" type="text" value="<?php echo $page['page_title'] ?>" required>
                          <input class="form-control" name="img_sil" type="hidden" value="<?php echo $page['page_img'] ?>" required>
                          <input class="form-control" name="page_id" type="hidden" value="<?php echo $page['page_id'] ?>" required>
                        </div>

                                  </div>
                      <div class="form-group">
                        <label>Özet Bilgi</label>
                        <input class="form-control" name="page_ozet" type="text" value="<?php echo $page['page_ozet'] ?>" required>
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
                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="../images/<?php echo $page['page_img'] ?>" alt="" /></div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              </div>
                          </div>
                      </div>
                    <div class="alert alert-warning"><strong>Dikat!</strong> Sadece .jpg/.png uzantılı dosyalar yüklenebilir. Dosya Boyutu 5MB ile sınırlandırılmıştır.</div>
                    <button type="submit" class="btn btn-info">KAYDET</button>
                  </form>
                  <form role="form" action="fonks/yonet.php" method="post">
                      <div class="btn-group">
                        <input class="form-control" name="makale_sil" type="hidden" value="<?php echo $page['page_id'] ?>" required>
                        <input class="form-control" name="makale_sil_img" type="hidden" value="<?php echo $page['page_img'] ?>" required>
                        <button type="submit" class="btn btn-danger" disabled>BU MAKALEYİ SİL</button>
                          <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                              <li>  <button class="btn btn-danger">EVET BU MAKALEYİ SİL</button> </li>
                          </ul>
                      </div>
                    </form>

                  </div>
                </div>
            </div>
        </div>


    <?php include'fonks/footer.php' ?>
