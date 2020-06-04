<?php include 'fonks/header.php';

if (isset($_GET['id']))
{
  $page = $_GET['id'];
  settype($page, "integer");

if ($page == NULL)
   {
header("Location: $base");

  }

}
else
{
header("Location: $base ");
}

echo $page;
$page_getir = $db -> prepare("SELECT * from page where page_id=?");
$page_getir ->execute(array($page));
$makale=$page_getir->fetch(PDO::FETCH_ASSOC);

if ($page == NULL)
{
  header("Location: $base");
}?>

<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                 <div class="about-info">

                         <h1><?php echo $makale['page_title']; ?></h1>
                         <p> <?php echo $makale['page_text']; ?> </p>


               </div>
          </div>
     </div>
</section>

<?php include 'fonks/tavsiye.php' ?>


<!-- CONTACT -->
<?php include 'fonks/soru.php' ?>

<!-- FOOTER -->
<?php include 'fonks/footer.php' ?>
