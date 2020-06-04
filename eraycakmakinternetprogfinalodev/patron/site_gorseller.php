<?php include'fonks/header.php';
$f_contents = file("fonks/sozler.txt");
$line = $f_contents[array_rand($f_contents)];
$data = $line;

$ss = $db->prepare("SELECT COUNT(*) FROM gorseller");
$ss->execute();
$bb = $ss->fetchColumn();
$aa = ($bb/8)+1;
if (isset($_GET['page']))
{
  $page_number =$_GET['page'] ;
  settype($page_number, "integer");
  $num = $page_number;

if ($page_number <= 1 )
 {
  $num = 0;
  $denetleme = "<=".$page_number;

 }
else if ($page_number <= $aa)
{
  $denetleme = ">1".$page_number;
  $num = ($page_number * 8)-8 ;
}
else
{

    $page_number=1;
    $denetleme = "ikinci if else";
    $num = 0;
}

}

else
{
  $page_number=1;
  $denetleme = "ikinci if else";
  $num = 0;

}
$pagegetir = $db -> prepare("SELECT * from gorseller ORDER BY gorsel_time DESC LIMIT $num,8");
$pagegetir ->execute(array());
$sayfa=$pagegetir->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['onay'])) {
    $on=0;
}
elseif (isset($_GET['red'])) {
    $on=1;
}
else {
    $on=2;
} ?>





<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SİTE GÖRSELLERİ</h1>
                <?php if ($on==2): ?>
                  <h1 class="page-subhead-line">Sadece .jpg/.png uzantılı dosyalar yüklenebilir. Dosya Boyutu 5MB ile sınırlandırılmıştır. Düzenledikten sonra kaydete basmanız gerekir. </h1>
                  <h1 class="page-subhead-line"><?php echo $data ?> </h1>
              <?php endif; ?>
                <?php if ($on==0): ?>
                  <h1 class="page-subhead-line">Kayıt Başarılı.</h1>
                <?php endif; ?>
                <?php if ($on==1): ?>
                  <h1 class="page-subhead-line"><?php if ($_GET['red']==null){echo "HATA !";}else{echo $_GET['red'];}?></h1>
                <?php endif; ?>
              </div>
        </div>
        <div class="row">
          <form role="form" action="fonks/yonet.php" method="post" enctype="multipart/form-data">
          <div class="col-md-2 ">
                      <input class="form-control" type="hidden" name="gorseller">
                      <input type="file" name="fileToUpload[]" value="" multiple="multiple" class="btn btn-success" >
                      <button type="submit" class="btn btn-info">YÜKLE</button>

          </div>

         </form>
          </div>

          <?php foreach ($sayfa as $key): ?>

<div class="col-md-2 ">

    <div class="portfolio-item awesome mix_all" data-cat="awesome" >
        <img src="<?php echo $base."images/".$key['gorsel_ad'] ?>" class="img-responsive " alt="" />
        <div class="overlay">
            <p><span><?php echo $base."images/".$key['gorsel_ad']?></span></p>
            <button  type="submit" class="btn btn-danger"><a href="fonks/yonet.php?gorsel-sil=<?php echo $key['gorsel_ad'] ?>&gorsel_id=<?php echo $key['gorsel_id'] ?>">SİL</a></button>
        </div>
    </div>
</div>

   <?php endforeach; ?>

</div>
<ul class="pagination">
     <li><a href="site_gorseller.php?page=<?php echo $page_number - 1; ?>">&laquo;</a></li>
     <?php for ($i=1; $i <$aa; $i++) { ?>

     <li class="<?php if ($i == $page_number){echo "active";} ?>"><a href="site_gorseller.php?page=<?php echo $i; ?>"><?php echo $i ?></a></li>
   <?php  } ?>

     <li><a href="site_gorseller.php?page=<?php echo $page_number + 1; ?>">&raquo;</a></li>
</ul>
</div>
      </div>




    <?php include'fonks/footer.php' ?>
