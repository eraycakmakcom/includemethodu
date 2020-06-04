<?php
include 'fonks/baglan.php';
$sitegetir = $db -> prepare("SELECT * from site where site_id=?");
$sitegetir ->execute(array(1));
$site=$sitegetir->fetch(PDO::FETCH_ASSOC);
$base = $site['site_url'];
 ## Burada config dosyamızın yani veritabanı bağlantısı yapılan dosyamızı Ã§ağırıyoruz isterseniz direk olarak sayfa üzerindede bağlantı yapabilirsiniz.Ben direkt olarak include ettim sayfayı.
## Xml olarak göstermek iÃ§in girilen komut
header("Content-Type: text/xml");
## Sitemap Bilgileri
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '
<urlset
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="
		http://www.sitemaps.org/schemas/sitemap/0.9
		http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
';
## Site Menüleri
## Menüler dinamik değil el ile girdim Ã§ünkü benm veritabımda menüler isminde bir tablo yoktu zaten sitede menü de olmadığı iÃ§in el ile girmek daha makul gözüktü
echo '
	<url>
       <loc>'.$base.'</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.5000</priority>
	</url>
	  <url>
       <loc>'.$base.'hakkimda</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
  <url>
       <loc>'.$base.'projelerim</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.8000</priority>
  </url>
';
## Makaleleri Listele
## Bu alanda ise PDO ile verilerimizi veritabanından Ã§ekiyoruz Bu alanda değişeceğiniz yerler.
## Tablo adınızı girmelisiniz eğerki sitenizde bir şart var ise onu girmelisiniz benim sitemde yazı_onay=0 olan yazıları göstermediğim iÃ§in bir şart belirledim sizlerde şart yoksa kaldırabilirsiniz.
## yazi_id yazan yere ise Ã§ekeceğiniz verilerin id sinin bulunduğu sutunun ismini giriniz.
$yazisor=$db->prepare("SELECT * FROM page ORDER BY page_time DESC");
$yazisor->execute(array());
	while($yazicek=$yazisor->fetch(PDO::FETCH_ASSOC)){
## Alttaki alanda ise değişeceğiniz yerler ise seo ve yazi_id kısımları bunları neye göre değişeim diye soracaksanız
## Sitenizde bulunan yazılara nasıl eriştiğiniz yani adres satırında nasıl gözüktüğüne bakarak bu ayarlamaları gerÃ§ekleştireceksiniz.
## Benim yazılarımda kullanmış olduğum seo ve sonuna eklenen yazi_id olduğu iÃ§in bu alanı bu şekilde modifiye etttim.
## Tüm ayarlamaları doğru bir şekilde yaparsanız dosyamız sorunsuz bir şekilde Ã§alışacaktır.
$yaz = seo($yazicek["page_title"]);
echo'
	<url>
	   <loc>'.$base.$yaz."/".$yazicek["page_id"].'</loc>
	   <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
	   <changefreq>daily</changefreq>
	   <priority>0.5000</priority>
	</url>
';
}
echo '</urlset>';
?>
