<?php 

include 'header.php'; 

$query = $db->query("SELECT * FROM franchisingform")->fetchAll();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Franchising Formu Listeleme <small>,

            <?php         if (isset($_GET['durum'])) {
 

 if ($_GET['durum']=="ok") {?>

 <b style="color:green;">İşlem Başarılı...</b>

 <?php } elseif ($_GET['durum']=="no") {?>

 <b style="color:red;">İşlem Başarısız...</b>

 <?php }}

 ?>




            </small></h2>
        
            <div class="clearfix"></div>
            
            
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th>Sıra No</th>
                  <th>İsim </th>
                  <th>Soyad </th>
                  <th>E-mail</th>
                  <th>Telefon</th>
                  <th>Bayilik Tercihiniz?</th>
                  <th>Mesaj Durum</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

              <?php foreach($query as $result){ ?>


                <tr>
                  <td width="20"><?php echo $result->id  ?></td>
                  <td><?php echo $result->ad  ?></td>
                  <td><?php echo $result->soyad  ?></td>
                  <td><?php echo $result->mail  ?></td>
                  <td><?php echo $result->gsm  ?></td>
                  <td class="text"><?php echo substr($result->bayiliktercih,0,50)."..."  ?></td>


                  <td><center>
                      <?php if ($result->ad==1) { ?> ?>
                      <button class="btn btn-success btn-xs">Okundu</button>
                      <?php    
                      } else {   
                      ?>
                      <button class="btn btn-danger btn-xs">Okunmadı</button>
                      <?php } ?>
                      </center>

                      </td>

                  <td><center><a href="franchising-goruntule.php?id=<?php echo $result->id  ?>"><button class="btn btn-primary btn-xs" name="mesajdurumduzenle">Görüntüle</button></a></center></td>
                  <td><center><a href="../database/processing.php?id=<?php echo $result->id  ?>&franchisingsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>



                <?php  
}
                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
