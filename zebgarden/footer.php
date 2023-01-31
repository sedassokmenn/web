<?php
include 'admin/database/db.php';

$query = $db->query("SELECT * FROM ayar where id='1'")->fetchAll();
foreach($query as $result){
?>


<footer id="footer" style="background-color:#11131F">
  <div class="footer-top pt-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 col-md-6 pb-2" style="text-align: center;">
          <h4 style="color:white">Hizmetlerimiz ile ilgili tüm sorularınızı yanıtlamaya her zaman hazırız</h4>
        </div>
        <div class="col-lg-3 col-md-6 pb-2 border-first-button" style="text-align: center;">
          <a href="tel:<?php echo $result->tel ?>">Bizi Arayın</a>
        </div>
        <div class="col-lg-3 col-md-6 pb-2 border-first-button" style="text-align: center;">
          <a href="franchiseform.php">Bayilik(Franchise)</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6 col-md-6" style="text-align:center">
          <div class="footer-info">
            <img src="assets\images\logo.png" alt="" class="img-fluid mb-1" style="width:150px">
            <p>Yavuzer Ev Bahçe Dizayn Tic.Ltd.Şti tescilli markasıdır.</p>
            <p>Balkon ve Bahçe Mobilyalarını daha yaşanılacak bir hale getirecek. 
              En geniş, en kaliteli ve en trend yeni sezon ürünleri olan, bahçe salıncağı
               ve balkon salıncağı modelleri ile hayalinizdeki bahçeyi, Rattan, iroko ve 
               hasır modele kampanyalı fiyatlarıyla Zeb Garden'da yaratın!
            </p>

          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4 style=" color:white">Kurumsal</h4>
          <hr>
          <ul>
            <li><i class=" fa fa-map-marker " style="color:white" aria-hidden=" true "></i><a style="color:white"> Rahmiye Mah. Çuhane Sok.<br>Beyazgül Sok. No:50/A<br> Kartepe/Kocaeli</a>
              </a>
            </li>
            <li><i class=" fa fa-phone " style="color:white" aria-hidden=" true "></i><a href="tel:<?php echo $result->gsm ?>" style="color:white"><?php echo $result->gsm ?></a>
              </a>
            </li>
            <li><i class=" fa fa-envelope " style="color:white" aria-hidden=" true "></i><a style="color:white"> <?php echo $result->mail ?></a>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4 style=" color:white">Bizi Tanıyın</h4>
          <hr>
          <ul>
            <li><i class=" fa fa-angle-right" style="color:white" aria-hidden="true"></i><a style="color:white" href=#> Vizyonumuz</a></li>
            <li><i class=" fa fa-angle-right" style="color:white" aria-hidden="true"></i><a style="color:white" href=#> Gizlilik Politikası</a></li>
            <li><i class=" fa fa-angle-right" style="color:white" aria-hidden="true"></i><a style="color:white" href=#> Üyelik Sözleşmesi</a></li>
            <li><i class=" fa fa-angle-right" style="color:white" aria-hidden="true"></i><a style="color:white" href=#> Mutlu Müşteriler</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="copyright col-lg-12 col-md-12 col-sm-12 order-1 order-sm-0">
        <p style="text-align: center;">© Copyright  |  All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/slider-min.js"></script>



</body>

</html>
<?php } ?>