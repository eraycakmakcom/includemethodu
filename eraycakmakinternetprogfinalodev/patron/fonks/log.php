<?php
session_start();
$a="123";
echo sha1($a);
if (isset($_POST['kaptan']) AND isset($_POST['yenge']))
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




$kaptan = sha1($_POST['kaptan']);
$kap = array($kaptan);
$owner = $db -> prepare("SELECT * from patron where patron_reis=?");
$owner ->execute([$kaptan]);
$ownerbilgi=$owner->fetch(PDO::FETCH_ASSOC);
  if (!$ownerbilgi) {
    header("Location: ../login.html");
  }
if($ownerbilgi['patron_sihir'] == sha1($_POST['yenge']))
{

  echo "tamm tamam";
  $r1 = rand(1111111,9999999);
  $r2 = rand(1111111,9999999);
//  echo $r1.$r2;
  $_SESSION['patron'] = $r2;
  $_SESSION['yenge'] = $r1;
  $_SESSION['reis']=$kaptan;

  $sql="UPDATE patron SET patron_r1='$r1', patron_r2='$r2' WHERE deneme=1";
  $db -> query($sql);
  $db=NULL;
  header("Location: ../index.php");

}
else
{
  header("Location: ../login.html");
}

}
 ?>
