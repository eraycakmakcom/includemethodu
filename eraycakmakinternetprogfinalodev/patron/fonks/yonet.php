<?php

session_start();
if (isset($_SESSION["yenge"]) and isset($_SESSION["patron"])) {
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
  header("Location: ../login.html");
}
if ($_SESSION["yenge"] != $reisgetir['patron_r1'] and $_SESSION["patron"] != $reisgetir['patron_r2'])
 {
  $db=NULL;
  session_destroy();
 header("Location: ../login.html");
}


$sitegetir = $db -> prepare("SELECT * from site where site_id=?");
$sitegetir ->execute(array(1));
$site=$sitegetir->fetch(PDO::FETCH_ASSOC);
$base = $site['site_url'];
$db=NULL;
try
{

  $ba=new PDO("mysql:host=localhost;dbname=single_blog", 'root','');
  //echo "Veri Bağlantısı başarılı";
}
catch(PDOException $e)
{
  echo $e->getMessage();
}

if (isset($_POST['owner_bilgi']))
      {
          $temelbilgi = [
          'owner_ad' => substr($_POST['owner_ad'],0,149),
          'owner_soyad' => substr($_POST['owner_soyad'],0,149),
          'owner_mail' => substr($_POST['owner_mail'],0,199),
          'owner_git' => substr($_POST['owner_git'],0,99),
          'owner_twit' => substr($_POST['owner_twit'],0,99),
          'owner_insta' => substr($_POST['owner_insta'],0,99),
          'owner_facebook' => substr($_POST['owner_facebook'],0,99),
          'owner_linkedin' => substr($_POST['owner_linkedin'],0,99),
          'owner_pin' => substr($_POST['owner_pin'],0,99),
                      ];
          $temel = "UPDATE owner SET owner_ad=:owner_ad,
           owner_soyad=:owner_soyad, owner_mail=:owner_mail,
            owner_git=:owner_git, owner_twit=:owner_twit, owner_insta=:owner_insta,
             owner_facebook=:owner_facebook, owner_pin=:owner_pin, owner_linkedin=:owner_linkedin WHERE owner_id='1'";
            $stmt= $ba->prepare($temel);
            $stmt->execute($temelbilgi);
            if ($stmt) {
              $ba=null;
              header('Location: ../temelbilgiler.php?onay');

            }
            else {
              $ba=null;
              header('Location: ../temelbilgiler.php?red');

            }
      }



elseif (isset($_POST['site_bilgi']))
      {

        $temelbilgi = [
          'site_url' => substr($_POST['site_url'],0,249),
          'site_title' => substr($_POST['site_title'],0,99),
          'site_desc' => substr($_POST['site_desc'],0,249),
          'site_soru' => substr($_POST['site_soru'],0,249),
          'site_google' => substr($_POST['site_google'],0,349),
          'site_yandex' => substr($_POST['site_yandex'],0,349),
          'site_bing' => substr($_POST['site_bing'],0,349),
        'site_analystic' => substr($_POST['site_analystic'],0,349),
                    ];
        $temel = "UPDATE site SET site_url=:site_url, site_title=:site_title, site_desc=:site_desc,
         site_soru=:site_soru, site_google=:site_google, site_yandex=:site_yandex, site_bing=:site_bing,
          site_analystic=:site_analystic WHERE site_id='1'";
          $stmt= $ba->prepare($temel);
          $stmt->execute($temelbilgi);
          if(!$stmt){$ba=null;header('Location: ../site_bilgi.php?red');}
          else{$ba=null;header('Location: ../site_bilgi.php?onay');}
      }

      elseif (isset($_POST['ana_duzenle']))
            {

              $temelbilgi = [
                'site_index' => substr($_POST['site_index'],0,249),
                'site_index_alt' => substr($_POST['site_index_alt'],0,99),
                'site_tanitim' => substr($_POST['site_tanitim'],0,249),
                'site_tanitim_alt' => substr($_POST['site_tanitim_alt'],0,249)
                          ];
              $temel = "UPDATE site SET site_index=:site_index, site_index_alt=:site_index_alt,
               site_tanitim=:site_tanitim, site_tanitim_alt=:site_tanitim_alt, WHERE site_id='1'";
                $stmt= $ba->prepare($temel);
                $stmt->execute($temelbilgi);
                if(!$stmt){$ba=null;header('Location: ../anasayfa_duzenle.php?red');}
                else{$ba=null;header('Location: ../anasayfa_duzenle.php?onay');}
            }
            elseif (isset($_POST['footer_duzenle']))
                  {

                    $temelbilgi = [
                      'site_footer1' => substr($_POST['site_footer1'],0,99),
                      'site_footer1_text' => $_POST['site_footer1_text'],
                      'site_footer2' => substr($_POST['site_footer2'],0,99),
                      'site_footer2_text' => $_POST['site_footer2_text'],
                      'site_footer3' => substr($_POST['site_footer3'],0,99),
                      'site_footer3_text' => $_POST['site_footer3_text']
                                ];
                    $temel = "UPDATE owner SET site_footer1=:site_footer1, site_footer1_text=:site_footer1_text,
                     site_footer2=:site_footer2, site_footer2_text=:site_footer2_text,
                      site_footer3=:site_footer3, site_footer3_text=:site_footer3_text WHERE site_id='1'";
                      $stmt= $ba->prepare($temel);
                      $stmt->execute($temelbilgi);
                      if(!$stmt){$ba=null;header('Location: ../footer_duzenle.php?red');}
                      else{$ba=null;header('Location: ../footer_duzenle.php?onay');}
                  }


      elseif (isset($_POST['hakkinda_duzenle']))
            {

              $temelbilgi = [
              'owner_hakkinda' => $_POST['editor1']  ];
               $temel = "UPDATE owner SET owner_hk=:owner_hk WHERE owner_id='1'";
                $stmt= $ba->prepare($temel);
                $stmt->execute($temelbilgi);
                if(!$stmt){$ba=null;header('Location: ../hakkimda.php?red');}
                else{$ba=null;header('Location: ../hakkimda.php?onay');}

            }
      elseif (isset($_POST['referans_duzenle']))
                        {

                          $temelbilgi =
                           [
                            'site_referans' => $_POST['site_referans'],
                            'site_referans_alt' => $_POST['site_referans_alt']
                          ];
                           $temel = "UPDATE site SET site_referans=:site_referans, site_referans_alt=:site_referans_alt WHERE site_id='1'";
                            $stmt= $ba->prepare($temel);
                            $stmt->execute($temelbilgi);
                            if(!$stmt){$ba=null;header('Location: ../hakkimda.php?red');
                            }
                            else{$ba=null;header('Location: ../hakkimda.php?onay');
                            }

                        }

            elseif (isset($_POST['degis']))
                  { session_start();
                    $kaptan = $_SESSION['reis'];
                    echo $kaptan;
                    $old = sha1($_POST['degis_old']);
                    $new1 = $_POST['degis_new1'];
                    $new2 = $_POST['degis_new2'];
                    if($new1!=$new2){$ba=null;header('Location: ../degis.php?red');}

                    $owner = $ba -> prepare("SELECT * from patron where patron_reis=?");
                    $owner ->execute([$kaptan]);
                    $ownerbilgi=$owner->fetch(PDO::FETCH_ASSOC);
                    if($ownerbilgi['patron_sihir']!=$old){$ba=null;header('Location: ../degis.php?red');}
                    else {
                      $new = sha1($new1);
                      $ilet = "UPDATE patron SET patron_sihir='$new' WHERE patron_reis='$kaptan'";
                      $stmt= $ba->prepare($ilet);
                      $stmt->execute();
                      if(!$stmt){$ba=null;header('Location: ../degis.php?red');}
                      else{$ba=null;header('Location: logo.php');}
                    }


                  }

              elseif (isset($_POST['makale_sil']))
                {
                  $page_id = $_POST['makale_sil'];
                  $page_img = $_POST['makale_sil_img'];
               $ilet = "DELETE FROM page WHERE page_id=? ";
               $stmt= $ba->prepare($ilet);
               $stmt->execute([$page_id]);
               if(!$stmt){$ba=null;header('Location: ../makale.php');
               }
                else{$ba=null;header('Location: ../makale.php');
                }
                        }

          elseif (isset($_POST['gorseller']))
                {
                   $dosya_sayi = count($_FILES["fileToUpload"]["name"]);
                  for ($i=0; $i < $dosya_sayi ; $i++)
                   {
                     if (!empty($_FILES["fileToUpload"]["name"][$i])) {
                  $uzanti = substr($_FILES["fileToUpload"]["name"][$i], -4,4);
                  $doyaAd = rand(0,9999).rand(0,9999).$uzanti;
                  $target_dir = "../../images/";
                  $target_file = $target_dir.$doyaAd;
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                  // Check if image file is a actual image or fake image
                      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
                      if($check !== false) {
                          $uploadOk = 1;
                      } else {
                        //session_destroy();
                          $uploadOk = 0;
                      }

                  if (file_exists($target_file)) {
                      $uploadOk = 0;
                  }
                  // Check file size
                  if ($_FILES["fileToUpload"]["size"][$i] > 5000000) {
                      $ba=null;
                     header('Location: ../site_gorseller.php?red=Boyut Hatası');
                      $uploadOk = 0;
                  }
                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
                  {   $ba=null;
                     header('Location: ../site_gorseller.php?red=Format Hatası');
                      $uploadOk = 0;
                  }
                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                    $ba=null;
                   header('Location: ../site_gorseller.php?red');
                  // if everything is ok, try to upload file
                  } else
                  {
                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {

                          $ilet = "INSERT INTO gorseller (gorsel_ad) VALUES('$doyaAd') ";
                          $stmt= $ba->prepare($ilet);
                          $stmt->execute();
                      }
                      else
                       {

                        header('Location: ../site_gorseller.php?red');
                       }
                  }
                }

              }

              header('Location: ../site_gorseller.php?onay');

            }

                    elseif (isset($_POST['yeni_makale']))
                    {
                           $page_text = $_POST['editor1'];
                           $page_ozet = substr($_POST['page_ozet'],0,199);
                           $page_title = substr($_POST['page_title'],0,149);
                           $page_img = $_FILES["fileToUpload"]["name"];

                          if ($page_img != NULL)
                          {
                           $uzanti = substr($_FILES["fileToUpload"]["name"], -4,4);
                           $doyaAd = rand(0,9999).rand(0,9999).$uzanti;
                           $target_dir = "../../images/";
                           $target_file = $target_dir.$doyaAd;
                           $uploadOk = 1;
                           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                           // Check if image file is a actual image or fake image
                               $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                               if($check !== false) {
                                   $uploadOk = 1;
                               } else {
                                 //session_destroy();
                                   $uploadOk = 0;
                               }

                           if (file_exists($target_file)) {
                               $uploadOk = 0;
                           }
                           // Check file size
                           if ($_FILES["fileToUpload"]["size"] > 5000000) {
                                $ba=null;
                               header('Location: ../yeni_makale.php?red=Boyut Hatası');
                               $uploadOk = 0;
                           }
                           // Allow certain file formats
                           if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                                $ba=null;
                               header('Location: ../yeni_makale.php?red=Format Hatası');
                               $uploadOk = 0;
                           }
                           // Check if $uploadOk is set to 0 by an error
                           if ($uploadOk == 0)
                            {
                            $ba=null;
                             header('Location: ../yeni_makale.php?red');

                           // if everything is ok, try to upload file
                            }
                            else {
                                   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
                                   {
                                     $page_img = $doyaAd;//dosya adı yeni haliyle atanır
                                     $temelbilgi = [
                                     'page_text' => $page_text,
                                     'page_title' => $page_title,
                                     'page_ozet' => $page_ozet,
                                     'page_img' => $page_img
                                                 ];
                                     $temel = "INSERT INTO page (page_text, page_title, page_ozet, page_img)
                                     VALUES (:page_text, :page_title, :page_ozet, :page_img )";
                                       $stmt= $ba->prepare($temel);
                                       $stmt->execute($temelbilgi);
                                       if (!$stmt)
                                        {$ba=null;
                                         header('Location: ../yeni_makale.php?red');

                                       }
                                      else
                                       {$ba=null;
                                       header('Location: ../yeni_makale.php?onay');
                                       }
                                   }
                                   else
                                   {
                                     $ba=null;
                                     header('Location: ../yeni_makale.php?red');
                                   }
                                  }
                          }
                          else
                          {
                            $temelbilgi = [
                            'page_text' => $page_text,
                            'page_title' => $page_title,
                            'page_ozet' => $page_ozet
                                        ];
                            $temel = "INSERT INTO page (page_text, page_title, page_kategori, page_ozet)
                            VALUES (:page_text, :page_title, :page_ozet )";
                              $stmt= $ba->prepare($temel);
                              $stmt->execute($temelbilgi);
                              if (!$stmt)
                               {
                                 $ba=NULL;
                                header('Location: ../yeni_makale.php?red');
                               }
                             else
                              {
                                $ba=NULL;
                              header('Location: ../yeni_makale.php?onay');
                              }
                          }

                    }

                    elseif (isset($_POST['makale_duzenle']))
                          {
                            $page_text = $_POST['editor1'];
                            $page_ozet = substr($_POST['page_ozet'],0,199);
                            $page_title = substr($_POST['page_title'],0,149);
                            $page_img = $_FILES["fileToUpload"]["name"];
                            $page_id = $_POST['page_id'];
                            $img_sil = $_POST['img_sil'];

                           if ($page_img != NULL)
                           {
                            $uzanti = substr($_FILES["fileToUpload"]["name"], -4,4);
                            $doyaAd = rand(0,9999).rand(0,9999).$uzanti;
                            $target_dir = "../../images/";
                            $target_file = $target_dir.$doyaAd;
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if($check !== false) {
                                    $uploadOk = 1;
                                } else {
                                  //session_destroy();
                                    $uploadOk = 0;
                                }

                            if (file_exists($target_file)) {
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                              $ba=NULL;
                              header('Location: ../index.php?red=Boyut Hatası');
                                $uploadOk = 0;
                            }
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
                            {
                              $ba=NULL;
                                header('Location: ../index.php?red=Format Hatası');
                                $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0)
                             {
                               $ba=NULL;
                              header('Location: ../index.php?red');
                            // if everything is ok, try to upload file
                             }
                             else {
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
                                    {
                                      $page_img = $doyaAd;//dosya adı yeni haliyle atanır
                                      $temelbilgi = [
                                      'page_text' => $page_text,
                                      'page_title' => $page_title,
                                      'page_ozet' => $page_ozet,
                                      'page_img' => $page_img
                                                  ];
                                      $temel = "UPDATE page SET page_text=:page_text, page_title=:page_title,
                                       page_ozet=:page_ozet, page_img=:page_img WHERE page_id='$page_id'";
                                        $stmt= $ba->prepare($temel);
                                        $stmt->execute($temelbilgi);

                                        if (!$stmt)
                                         {
                                           $ba=NULL;
                                          header('Location: ../index.php?red');
                                          }
                                       else
                                        {
                                        $file_delete =  "C:\\xampp\htdocs\FreshBlog\images\\".$img_sil;
                                        unlink($file_delete);
                                        $ba=NULL;
                                        header('Location: ../index.php?onay');
                                        }
                                    }
                                    else
                                    {
                                      $ba=NULL;
                                      header('Location: ../index.php?red');
                                    }
                                   }
                           }
                           else
                           {

                             $temelbilgi = [
                             'page_text' => $page_text,
                             'page_title' => $page_title,
                             'page_ozet' => $page_ozet
                                         ];
                             $temel = "UPDATE page SET page_text=:page_text, page_title=:page_title,
                              page_ozet=:page_ozet WHERE page_id='$page_id'";
                               $stmt= $ba->prepare($temel);
                               $stmt->execute($temelbilgi);
                               if (!$stmt) {
                                 $ba=NULL;
                                 header('Location: ../index.php?red');
                               }
                              else
                               {
                                 $ba=NULL;
                               header('Location: ../index.php?onay');
                               }
                           }

                     }

                                             elseif (isset($_GET['gorsel-sil']))
                                               {
                                                 $gorsel_id = $_GET['gorsel_id'];
                                                 $page_img = $_GET['gorsel-sil'];
                                                 $sil = "../../images/".$page_img;
                                                 echo $sil;
                                              $ilet = "DELETE FROM gorseller WHERE gorsel_id=? ";
                                              $stmt= $ba->prepare($ilet);
                                              $stmt->execute([$gorsel_id]);
                                              unlink($sil);
                                              if(!$stmt){$ba=null;
                                                header('Location: ../site_gorseller.php');
                                              }
                                               else{$ba=null;
                                                 header('Location: ../site_gorseller.php');
                                               }
                                                       }


$ba=null;

}
else{header("Location: ../login.html");}
 ?>
