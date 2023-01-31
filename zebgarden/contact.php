<?php
include 'header.php';
$query = $db->query("SELECT * FROM iletisimform")->fetch();

$query = $db->query("SELECT * FROM ayar where id='1'")->fetchAll();
foreach ($query as $result) {

    ?>
<div class="container-fluid">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.4256271460886!2d29.895724815404808!3d40.70864587933216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb45755525040f%3A0x9be5c2ba93264a4b!2sZeb%20Garden!5e0!3m2!1str!2str!4v1673041666463!5m2!1str!2str"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div id="contact" class="contact-us section" style="padding-top: 5px;">
    <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="./admin/database/processing.php" method="POST">
            <div>
                <h4 style="padding-top: 10px;">TEKLİF&İLETİŞİM FORMU</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div>
                            <fieldset>
                                <input type="text" name="ad" id="ad" placeholder="İsim" autocomplete="on" required>
                            </fieldset>
                            <fieldset>
                                <input type="text" name="soyad" id="soyad" placeholder="Soyad" autocomplete="on">
                            </fieldset>
                            <fieldset>
                                <input type="text" name="mail" id="mail" pattern="[^ @]*@[^ @]*" placeholder="Email"
                                    required="">
                            </fieldset>
                        </div>
                        <div>
                            <fieldset>
                                <textarea name="mesaj" type="text" class="form-control" id="message" placeholder="Mesaj"
                                    required=""></textarea>
                            </fieldset>
                        </div>
                        <div>
                            <fieldset>
                                <button type="submit" id="form-submit" name="BasvuruGonderContact"
                                    class="main-button ">Şimdi Mesaj Gönder</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="fill-form">
                            <div class="row" style="padding-top: 100px;">
                                <div>
                                    <div class="info-post">
                                        <i class=" fa fa-map-marker fa-2x " style="color:#018985 ; float:left;"
                                            aria-hidden=" true "></i>
                                        <?php echo $result->adres ?>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="info-post">
                                        <i class=" fa fa-envelope fa-2x " style="color:#018985; float:left;"
                                            aria-hidden=" true "></i>
                                        <?php echo $result->mail ?>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="info-post">
                                        <i class=" fa fa-phone fa-2x " style="color:#018985; float:left;"
                                            aria-hidden=" true "></i>
                                        <?php echo $result->tel ?> | <?php echo $result->gsm ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php }
include 'footer.php';
?>