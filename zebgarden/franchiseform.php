<?php
include 'header.php';
?>

<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 row fadeInUp my-3" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="./admin/database/processing.php" method="POST">
                    <div>
                        <h4 style="padding-top: 10px;">BAYİLİK FORMU</h4>
                    </div>
                    <div>
                        <fieldset>
                            <input type="name" name="ad" id="ad" placeholder="İsim" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                            <input type="subject" name="soyad" id="soyad" placeholder="Soyad" autocomplete="on">
                        </fieldset>
                        <fieldset>
                            <input type="text" name="mail" id="mail" pattern="[^ @]*@[^ @]*" placeholder="Email"
                                required="">
                        </fieldset>
                        <fieldset>
                            <input type="tel" name="tel" id="tel" placeholder="Sabit Telefon" required="">
                        </fieldset>
                        <fieldset>
                            <input type="tel" name="gsm" id="gsm" placeholder="Telefon" required="">
                        </fieldset>
                        <fieldset>
                            <select name="il">
                                <option value="0">Şehir Seçiniz</option>
                                <option value="1">Adana</option>
                                <option value="2">Adıyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağrı</option>
                                <option value="5">Amasya</option>
                                <option value="6">Ankara</option>
                                <option value="7">Antalya</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydın</option>
                                <option value="10">Balıkesir</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankırı</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizli</option>
                                <option value="21">Diyarbakır</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elazığ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkâri</option>
                                <option value="31">Hatay</option>
                                <option value="32">Isparta</option>
                                <option value="33">Mersin</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="39">Kırklareli</option>
                                <option value="40">Kırşehir</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="47">Mardin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tunceli</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                                <option value="68">Aksaray</option>
                                <option value="69">Bayburt</option>
                                <option value="70">Karaman</option>
                                <option value="71">Kırıkkale</option>
                                <option value="72">Batman</option>
                                <option value="73">Şırnak</option>
                                <option value="74">Bartın</option>
                                <option value="75">Ardahan</option>
                                <option value="76">Iğdır</option>
                                <option value="77">Yalova</option>
                                <option value="78">Karabük</option>
                                <option value="79">Kilis</option>
                                <option value="80">Osmaniye</option>
                                <option value="81">Düzce</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <input type="text" name="ilce" id="ilce" placeholder="İlçe" required="">
                        </fieldset>
                        <fieldset>
                            <input type="text" name="meslek" id="meslek" placeholder="Meslek" required="">
                        </fieldset>
                        <fieldset>
                            <input type="text" name="yatirimbutce" id="yatirimbutce"
                                placeholder="Yatırım için ayırdığınız bütçe?" required="">
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <textarea name="bayiliktercih" type="text" class="form-control" id="bayiliktercih"
                                placeholder="Bayilik Tercihiniz?" required=""></textarea>
                        </fieldset>
                        <fieldset>
                            <select name="urunsatis" id="select">
                                <option value="">Mevcutta bahçe mobilyaları ürünleri satışınız var mı?</option>
                                <option value="">Evet</option>
                                <option value="">Hayır</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <input type="number" name="satistecrube" id="satistecrube"
                                placeholder="Sektörde kaç yıldır satış yapıyorsunuz." required="">
                        </fieldset>
                        <fieldset>
                            <textarea name="nedentercih" type="tercih" class="form-control" id="nedentercih"
                                placeholder="Bölgenizde bahçe mobilyalarını neden tercih ediyorlar?"
                                required=""></textarea>
                        </fieldset>
                        <fieldset>
                            <textarea name="encoktercih" type="tercih2" class="form-control" id="encoktercih"
                                placeholder="Müşterilerinizin en çok tercih ettiği ürünler hangileri?"
                                required=""></textarea>
                        </fieldset>
                        <fieldset>
                            <textarea name="yonetimveortaklik" type="text" class="form-control" id="yonetimveortaklik"
                                placeholder="Yönetim Ve ortaklık" required=""></textarea>
                        </fieldset>
                        <fieldset>
                            <textarea name="neredefarkettiniz" type="text" class="form-control" id="message"
                                placeholder="Bizi nerede farkettiniz?" required=""></textarea>
                        </fieldset>
                        <fieldset>
                            <textarea name="bayiistekneden" type="text" class="form-control" id="message"
                                placeholder="Neden ZEB GARDEN bayisi olmak istiyorsunuz? Bizi neden tercih ettiniz? "
                                required=""></textarea>
                        </fieldset>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <fieldset>
                            <button type="submit" id="form-submit" name="BasvuruGonderFranchise"
                                class="main-button ">Gönder</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>