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
 ?>

<div id="page-wrapper">
    <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <h1 class="page-head-line">HAKKIMDA</h1>
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
          <form role="form" action="fonks/yonet.php" method="post">
            <div class="col-md-8">
              <textarea name="editor1"><?php echo $signal['owner_hk'] ?></textarea>
                  <script>
                          CKEDITOR.replace( 'editor1' );
                  </script>
                  <br>
                  <button type="submit" class="btn btn-info">Kaydet</button>
                  <input type="hidden" name="hakkinda_duzenle" value="">
            </div>
          </form>
        </div>


    <?php include'fonks/footer.php' ?>
