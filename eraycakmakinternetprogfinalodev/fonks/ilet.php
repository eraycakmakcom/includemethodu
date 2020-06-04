<?php

try
{

  $db=new PDO("mysql:host=localhost;dbname=single_blog;charset=utf8", 'root','');
  //echo "Veri Bağlantısı başarılı";
    //$db->query("SET CHARACTER SET utf8");
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
$owner = $db -> prepare("SELECT * from owner where owner_id=?");
$owner ->execute(array(1));
$signal=$owner->fetch(PDO::FETCH_ASSOC);
$db=NULL;
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
 {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$headers = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //
  mail( $signal['owner_mail'], $_POST['subject'], $_POST['message'], $headers );

  //      ^
  //  Replace with your email
  $gonderen = $_POST['$gonderen']
  header("Location: $gonderen");


}
else
 {
   header("Location: $signal['owner_url']");

}


 ?>
