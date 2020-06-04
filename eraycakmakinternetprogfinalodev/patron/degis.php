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
              <h1 class="page-head-line">Şifre İşlemleri</h1>
              <?php if ($on==2): ?>
              <h1 class="page-subhead-line">Kayıt onaylanırsa otomatik çıkış yapar.</h1>
            <?php endif; ?>
              <?php if ($on==0): ?>
                <h1 class="page-subhead-line">Kayıt Başarılı.</h1>
              <?php endif; ?>
              <?php if ($on==1): ?>
                <h1 class="page-subhead-line"><?php if ($_GET['red']==null){echo "HATA Yeni şifreler uyumsuz !";}else{echo $_GET['red'];}?></h1>
              <?php endif; ?>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">

            <form role="form" method="post" action="fonks/yonet.php">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                         Dikkat ne kadar güçlü şifre o kadar güçlü Güvenlik!
                    </div>
                        <div class="panel-body">
                          <div class="form-group">
                                <label>Mevcut Şifreniz</label>
                                <input name="degis_old" class="form-control" type="text" value="" required>
                                <input name="degis" class="form-control" type="hidden" >
                          </div><div class="form-group">
                                <label>Yeni Şifreniz</label>
                                <input name="degis_new1" class="form-control" type="text" value="" required>
                          </div><div class="form-group">
                                <label>Yeni Şİfreniz Tekrar</label>
                                <input name="degis_new2" class="form-control" type="text" value="" required>
                          </div>

                              <button type="submit" class="btn btn-danger">Şifremi Değiştir ve ÇIKIŞ yap</button>
                        </div>
                      </div>
                    </div>
                  </form>

            </div>








    <?php include'fonks/footer.php' ?>
