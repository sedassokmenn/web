<?php
include 'header.php';
$query = $db->query("SELECT * FROM projeler")->fetchAll();

?>
<div id="bannerproject" class="bannerproject">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-lg-4">
                <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h7 style="color:white;">Projelerimiz</h7>
                    <h4 style="color:white">Projelerimiz</h4>
                </div>
            </div>
            <div class="col-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            </div>
        </div>
    </div>
</div>

<div class="conteiner my-5 ">
    <?php
  $say = 0;
  foreach ($query as $result) {
    $say++;
    if ($say % 2 == 0) {
      echo '
    <div id="section_1" class="shop-intro-banner section fix pt-90 pb-100 pt-xs-50 pb-xs-50" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row row-5 align-items-center">
                <div class="col-lg-6 col-md-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    <div class="shop-intro-banner-content-two">
                        <h4>' . $result->ad . '</h4>
                        <p style="margin-right: 50px;">' . $result->icerik . '</p>
                        <div class="border-first-button">
                            <a href="tel:0(262)331 21 65" class="button">Bize Ulaşın</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <div class="shop-intro-image-five">
                        <a href="tuna-rattan-bahce-seti-sd-34">
                            <img src="' . $result->resim . '" alt="Tuna Rattan Bahçe Seti">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    } else {

      echo '<div id="section_2" class="shop-intro-banner section fix bg-gray  pt-90 pb-100 pt-xs-50 pb-xs-50" style="padding-top: 50px;">
        <div class="container-fluid pl-70 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-70 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
            <div class="row row-5 align-items-center">
                <div class="col-lg-6 col-md-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                    <div class="shop-intro-image-two">
                        <a href="gediz-rattan-bahce-seti-sd-35">
                            <img src="' . $result->resim . '" alt="Gediz Rattan Bahçe Seti">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <div class="shop-intro-banner-content-two">
                        <h4>' . $result->ad . '</h4>
                        <p style="margin-right: 50px;">' . $result->icerik . '</p>
                        <div class="border-first-button">
                            <a href="tel:0(262)331 21 65" class="button">Bize Ulaşın</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    }
  } ?>
</div>
<!-- <div id="section_3" class="shop-intro-banner section fix pt-90 pb-100 pt-xs-50 pb-xs-50" style="margin-top:50px;margin-bottom: 50px;">
    <div class="container">
      <div class="row row-5 align-items-center">
        <div class="col-lg-6 col-md-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
          <div class="shop-intro-banner-content-two">
            <h4>Lorem</h4>
            <p style="margin-right: 50px;">Lorem Ipsum dolor sit amet,
              consectetur adipiscing elit,
              mollit anim id est laborum.</p>
            <a href="#" class="button">Bize Ulaşın</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
          <div class="shop-intro-image-five">
            <a href="tuna-rattan-bahce-seti-sd-34">
              <img src="assets\images\product1.png" alt="Tuna Rattan Bahçe Seti">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="section_4" class="shop-intro-banner section fix bg-gray  pt-90 pb-100 pt-xs-50 pb-xs-50" style="padding-top: 50px;">
    <div class="container-fluid pl-70 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-70 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
      <div class="row row-5 align-items-center">
        <div class="col-lg-6 col-md-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
          <div class="shop-intro-image-two">
            <a href="gediz-rattan-bahce-seti-sd-35">
              <img src="assets\images\product2.png" alt="Gediz Rattan Bahçe Seti">
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
          <div class="shop-intro-banner-content-two">
            <h4>Lorem</h4>
            <p style="margin-right: 50px;">Lorem Ipsum dolor sit amet,
              consectetur adipiscing elit,
              mollit anim id est laborum.</p>
            <a href="#" class="button">Bize Ulaşın</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>



<!-- <div class="container">
  <div class="row" data-aos="fade-up">
    <div class="col-5">
      <img src="assets/images/webtasarim.png" class="img-fluid" alt="" style="padding:50px;">
    </div>
    <div class="col-7 " style="padding-top: 2.5rem">
      <p style="margin-right: 50px;">Lorem Ipsum dolor sit amet,
        consectetur adipiscing elit,
        mollit anim id est laborum.</p>
    </div>
    <div class="row" data-aos="fade-up" style="background-color:#E9E9E9;">
      <div class="col-7 " style="padding-top: 2.5rem ">
        <p style="margin-left: 50px;">
          Lorem Ipsum dolor sit amet,
          consectetur adipiscing elit,
          mollit anim id est laborum.</p>
      </div>
      <div class="col-5">
        <img src="assets/images/webtasarim.png" class="img-fluid" alt="" style="padding:50px;">
      </div>
    </div>
  </div>
</div> -->
<?php
include 'footer.php';
?>