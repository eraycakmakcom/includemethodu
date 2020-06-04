<?php include 'fonks/islemler.php';
$base = $site['site_url'];?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $signal['owner_ad']; ?>/Admin</title>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />

  </head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php"><?php echo $site['site_title'] ?></a>
            </div>

            <div class="header-right">

            <a href="fonks/logo.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">

                            <div class="inner-text">
                                <?php echo $signal['owner_ad'];echo " ".$signal['owner_soyad']; ?>
                          </div><div class="inner-owner">
                              <a class="inner-text" target="_blank" href="<?php echo $site['site_url'];?>">Anasayfa (Sitem)</a>                            <br />
                            </div>
                        </div>

                    </li>



                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Ayarlar<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="temelbilgiler.php"><i class="fa fa-toggle-on"></i>Temel Bilgiler</a>
                            </li>
                            <li>
                                <a href="site_gorseller.php"><i class="fa fa-image"></i>Site Görselleri</a>
                            </li>

                            <li>
                               <a href="hakkimda.php"><i class="fa fa-book "></i>Hakkımda</a>
                           </li>

                            <li>
                               <a href="site_bilgi.php"><i class="fa fa-search "></i>Site Bilgileri</a>
                           </li>

                        </ul>
                    </li>

                    <li>
                       <a href="anasayfa_duzenle.php"><i class="fa fa-car"></i>Anasayfa</a>

                   </li>
                   <li>
                      <a href="referans_duzenle.php"><i class="fa fa-search"></i>Projelerim</a>

                  </li>
                  <li>
                     <a href="site_gorseller.php"><i class="fa fa-image"></i>Görseller</a>
                 </li>
                  <li>
                     <a href="yeni_makale.php"><i class="fa fa-book"></i>Yeni Yazı</a>

                 </li>
                    <li>
                       <a href=""><i class="fa fa-bug "></i>Şifre İşlemleri<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">

                             <li>
                                <a href="degis.php"><i class="fa fa-square-o "></i>Şifremi Değiştir</a>
                            </li>
                             <li>
                                <a href=""><i class="fa fa-code "></i>Root İrtibat</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
