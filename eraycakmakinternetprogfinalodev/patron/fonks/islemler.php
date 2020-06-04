<?php
session_start();
if (isset($_SESSION["yenge"]) and isset($_SESSION["patron"]))
{
try
{

  $db=new PDO("mysql:host=localhost;dbname=single_blog", 'root','');
  //echo "Veri Bağlantısı başarılı";
}
catch(PDOException $e)
{
  echo $e->getMessage();
}

$reis = $db -> prepare("SELECT * from patron where patron_reis=?");
$reis ->execute(array($_SESSION["reis"]));
$reisgetir=$reis->fetch(PDO::FETCH_ASSOC);
if (!$reisgetir) {
  $db=NULL;
  session_destroy();
  header("Location: login.html");
  echo "hata 1";
}
if ($_SESSION["yenge"] != $reisgetir['patron_r1'] and $_SESSION["patron"] != $reisgetir['patron_r2']) {
  $db=NULL;
  session_destroy();
 header("Location: login.html");
}





$owner = $db -> prepare("SELECT * from owner where owner_id=?");
$owner ->execute(array(1));
$signal=$owner->fetch(PDO::FETCH_ASSOC);

$sitegetir = $db -> prepare("SELECT * from site where site_id=?");
$sitegetir ->execute(array(1));
$site=$sitegetir->fetch(PDO::FETCH_ASSOC);


$sorgu = $db->prepare("SELECT COUNT(*) FROM page");
$sorgu->execute();
$en = $sorgu->fetchColumn();

$rakam = $en % 8;

if ($rakam == 0)
{
    $sayac = $en/8 + 1;
}
else
{
  $sayac = ($en/8) + 1;
}
}
else{
  header("Location: login.html");
}

 ?>
