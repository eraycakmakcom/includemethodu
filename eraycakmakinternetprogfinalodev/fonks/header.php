<?php include 'baglan.php';
$owner = $db -> prepare("SELECT * from owner where owner_id=?");
$owner ->execute(array(1));
$signal=$owner->fetch(PDO::FETCH_ASSOC);
$sitegetir = $db -> prepare("SELECT * from site where site_id=?");
$sitegetir ->execute(array(1));
$site=$sitegetir->fetch(PDO::FETCH_ASSOC);
$base = $site['site_url'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title><?php if (strlen($site['site_title']) > 0) {echo $site['site_title'];}?></title>
  <?php if (strlen($site['site_google']) > 0) {echo $site['site_google'];}?>
  <?php if (strlen($site['site_analystic']) > 0) {echo $site['site_analystic'];}?>
  <?php if (strlen($site['site_bing']) > 0) {echo $site['site_bing'];}?>
  <?php if (strlen($site['site_yandex']) > 0) {echo $site['site_yandex'];}?>
<link href="  <?php if (strlen($site['site_logo']) > 0) {echo $site['site_logo'];}?>" rel="shortcut icon" />
<meta name="p:domain_verify" content="be66fc4e758fd9fb9b53e0b3294380ee"/>
<meta name="description" content="<?php if (strlen($site['site_desc']) > 0) {echo $site['site_desc'];}?>">

<base href="<?php echo $base ?>" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">

<!-- Fonts Google -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="anasayfa" class="navbar-brand"><?php if (strlen($signal['owner_ad']) > 0) {echo $signal['owner_ad']." ".$signal['owner_soyad'];}?></a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="anasayfa" class="smoothScroll">ANA SAYFA</a></li>
                    <li><a href="projelerim" class="smoothScroll">PROJELER</a></li>
                    <li><a href="hakkimda" class="smoothScroll">HAKKIMDA</a></li>
               </ul>
          </div>

     </div>
</div>
