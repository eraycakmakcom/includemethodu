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
                <h1 class="page-head-line">Temel Bilgiler</h1>
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
                    Kullanıcı Bilgileri
                  </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label>AD</label>
                        <input class="form-control" name="owner_bilgi" type="hidden">
                        <input class="form-control" name="owner_ad" type="text" value="<?php echo $signal['owner_ad'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Soyad</label>
                        <input class="form-control" name="owner_soyad" type="text" value="<?php echo $signal['owner_soyad'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Mail</label>
                        <input class="form-control" name="owner_mail" type="text" value="<?php echo $signal['owner_mail'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Pinterest</label>
                        <input class="form-control" name="owner_pin" type="text" value="<?php echo $signal['owner_pin'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Github</label>
                        <input class="form-control" name="owner_git" type="text" value="<?php echo $signal['owner_git'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Twitter</label>
                        <input class="form-control" name="owner_twitter" type="text" value="<?php echo $signal['owner_twit'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" name="owner_instagram" type="text" value="<?php echo $signal['owner_insta'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" name="owner_facebook" type="text" value="<?php echo $signal['owner_facebook'];?>" >
                      </div>
                      <div class="form-group">
                        <label>Linkedin</label>
                        <input class="form-control" name="owner_linkedin" type="text" value="<?php echo $signal['owner_linkedin'];?>" >
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-info">KAYDET</button>
                </div>


              </form>
            </div>






    <?php include'fonks/footer.php' ?>
