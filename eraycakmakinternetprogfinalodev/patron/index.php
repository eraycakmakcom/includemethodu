<?php include'fonks/header.php';
$f_contents = file("fonks/sozler.txt");
$line = $f_contents[array_rand($f_contents)];
$data = $line;


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
else if ($page_number <= $sayac)
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
$pagegetir = $db -> prepare("SELECT * from page ORDER BY page_time DESC LIMIT $num,8");
$pagegetir ->execute(array());
$sayfa=$pagegetir->fetchAll(PDO::FETCH_ASSOC);

 ?>



<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Makale Düzenle/Sil</h1>
                <h1 class="page-subhead-line"><?php echo $data ?></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
          <div class="col-md-12">

          <!--    Context Classes  -->
         <div class="panel panel-default">

             <div class="panel-heading">
                 Context Classes
             </div>

             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover">
                         <thead>
                             <tr>
                                 <th>Makale Başlık</th>
                                  <th>Özet</th>
                                 <th>ID</th>
                                 <th>Tarih</th>
                                 <th>Düzenle</th>
                             </tr>
                         </thead>
                         <tbody>

                           <?php foreach ($sayfa as $key): ?>
                             <tr class="">
                                 <td><?php echo $key['page_title'] ?></td>
                                 <td><?php echo $key['page_ozet'] ?></td>
                                 <td><?php echo $key['page_id'] ?></td>
                                 <td><?php echo $key['page_time'] ?></td>
                                 <td><button  type="submit" class="btn btn-warning"><a href="duzenle.php?page_id=<?php echo $key['page_id'] ?>">Düzenle</a></button></td>

                             </tr>
                           <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             <ul class="pagination">
                  <li><a href="index.php?page=<?php echo $page_number - 1; ?>">&laquo;</a></li>
                  <?php for ($i=1; $i <$sayac; $i++) { ?>

                  <li class="<?php if ($i == $page_number){echo "active";} ?>"><a href="index.php?page=<?php echo $i; ?>"><?php echo $i ?></a></li>
                <?php  } ?>

                  <li><a href="index.php?page=<?php echo $page_number + 1; ?>">&raquo;</a></li>
            </ul>

             </div>
         </div>
         <!--  end  Context Classes  -->
       </div>
    </div>








    <?php include'fonks/footer.php' ?>
