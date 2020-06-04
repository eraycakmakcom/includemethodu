<?php include'fonks/header.php' ?>



<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Yazılarım / Düzenle</h1>
                <h1 class="page-subhead-line">Düzenlemk istediğiniz satır ID üzerine çift tıklayınız.</h1>

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
                                 <th>ID</th>
                                 <th>Başlık</th>
                                 <th>Kategori</th>
                                 <th>Tarih</th>
                             </tr>
                         </thead>
                         <tbody>
                           <?php for ($i=1; $i <=20 ; $i++) {
                             // code...
                            ?>
                             <tr class="">
                                 <td><?php echo $i ?></td>
                                 <td>İStanbulun Yüzleri</td>
                                 <td>Gezilerim</td>
                                 <td>19.04.2020</td>
                             </tr>

                             <?php } ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!--  end  Context Classes  -->

       </div>
    </div>








    <?php include'fonks/footer.php' ?>
