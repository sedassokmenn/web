<?php
include 'header.php';
$query = $db->query("SELECT * FROM slider")->fetchAll();

?>
<div id="carouselExampleIndicators" class="carousel slide ">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        $say = 0;
        foreach ($query as $result) {
            $say++;
            if ($say == 1) {
                echo '<div class="carousel-item active">
      <img src="' . $result->resimyol . '" class="d-block w-100" alt="...">
    </div>';
            } else {
                echo '<div class="carousel-item">
      <img src="' . $result->resimyol . '" class="d-block w-100" alt="...">
    </div>';
            }
        } ?>
        <!-- <div class="carousel-item">
      <img src="assets\images\slider3.jpg" class="d-block w-100" alt="...">
    </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>ÜRÜN GRUPLARI</h4>
                    <h6>Ürünlerimizi keşfetmeye hazır mısnız?</h6>
                    <div class="container-fluid">
                        <div class="row my-3 ">
                            <div class="col-4 ">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\masatakimi.png" alt="#" /></i>
                                </div>
                            </div>
                            <div class="col-4">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\koltuktakimi.png" alt="#" /></i>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\balkonseti.png" alt="#" /></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row my-3">
                            <div class="col-4  ">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\masatakimi.png" alt="#" /></i>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\koltuktakimi.png" alt="#" /></i>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div id="wa_hover" class="wallet_box text_align_center m-1">
                                    <i><img src="assets\images\balkonseti.png" alt="#" /></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="free-quote" class="free-quote">
    <div class="d-flex justify-content-center">
        <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h5 style="color:white"><b>Fuar Davetiyenizi</b> Aldınız mı?</h5>
            <p style="color:white">Fuarlarımızı ziyaret etmek için hemen tıklayın ve detaylı bilgi alın.</p>
            <div class="border-first-button"><a href="products.php">Detaylı Bilgi ></a></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"></div>
    </div>
</div>

<div class="conteiner">
    <div id="section_1" class="shop-intro-banner section fix pt-90 pb-100 pt-xs-50 pb-xs-50"
        style="margin-bottom: 50px;">
        <div class="container" style="margin-top: 50px;">
            <div class="row row-5 align-items-center">
                <div class="col-lg-6 col-md-6 wow slideInLeft"
                    style="visibility: visible; animation-name: slideInLeft;">
                    <div class="shop-intro-banner-content-two">
                        <h4 style="margin-left: 50px;"><strong>Dünya markası</strong> Olma Yolunda</h4>
                        <p style="margin-left: 50px;">
                            Türkiye'nin nadir yerli üretim bahçe mobilyaları imalatı yapan firmalarında
                            biri olmatan gurur duyuyoyruz. Her gün yeninlenen ürü portföyümüz ve değişime
                            açık dinamik yapımız sayesinde hızla büyüyor ve bir dünya markası olma yolunda
                            ilerliyoruz. Siz de bu değere ortak olmak için yolculuğumuza katılın...</p>
                        <div class="border-first-button">
                            <a style="margin-left: 50px;background-color:#018985" href="franchiseform.php"
                                class="button">Daha
                                Fazla</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow slideInRight"
                    style="visibility: visible; animation-name: slideInRight;">
                    <div class="shop-intro-image-five">
                        <a href="tuna-rattan-bahce-seti-sd-34">
                            <img src="assets\images\product1.png" alt="Tuna Rattan Bahçe Seti">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="our-portfolio section" style="background-color:#E9E9E9 ;">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-12 ">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>Referanslarımız</h6>
                    <h4>Son <em>Projelerimize</em> bakın</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-12">
                <div class="loop owl-carousel">
                    <div class="container">
                        <img src="assets\images\proje1.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje2.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje3.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje4.jpg" alt="" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje5.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje6.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje7.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                    <div class="container">
                        <img src="assets\images\proje8.jpg" class="image" style="width:100%">
                        <div class="middle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>