<?php

include 'header.php';


$query = $db->prepare("SELECT * FROM franchisingform WHERE id=?");
$query->execute([@$_GET['id']]);

$query = $query->fetch();
if (!$query) {
    echo "No found";
    exit;
}
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Franchising Görüntüleme<small>,

                                <?php
                                if (isset($_GET['durum'])) {


                                    if ($_GET['durum'] == "ok") { ?>

                                <b style="color:green;">İşlem Başarılı...</b>

                                <?php } elseif ($_GET['durum'] == "no") { ?>

                                <b style="color:red;">İşlem Başarısız...</b>

                                <?php }
                                }

                                ?>


                            </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-franchising" role="franchising">

                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                        <form action="../database/processing.php" method="POST" enctype="multipart/form-data"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="ad" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->ad ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="soyad" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->soyad ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="mail" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->mail ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="tel" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->tel ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="gsm" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->gsm ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="il" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->il ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="ilce" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                         <?php echo $query->ilce ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="meslek" class="form-control col-md-7 col-xs-12" rows="1"
                                        cols="1" disabled>
                                        <?php echo $query->meslek ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="yatirimbutce" class="form-control col-md-7 col-xs-12"
                                        rows="1" cols="1" disabled>
                                         <?php echo $query->yatirimbutce ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="bayiliktercih" class="form-control col-md-7 col-xs-12"
                                        rows="4" cols="50" disabled>
                                        <?php echo $query->bayiliktercih ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="urunsatis" class="form-control col-md-7 col-xs-12"
                                        rows="1" cols="1" disabled>
                                        <?php echo $query->urunsatis ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="satistecrube" class="form-control col-md-7 col-xs-12"
                                        rows="1" cols="1" disabled>
                                        <?php echo $query->satistecrube ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="nedentercih" class="form-control col-md-7 col-xs-12"
                                        rows="4" cols="50" disabled>
                                        <?php echo $query->nedentercih ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="encoktercih" class="form-control col-md-7 col-xs-12"
                                        rows="4" cols="50" disabled>
                                        <?php echo $query->encoktercih ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="yonetimveortaklık"
                                        class="form-control col-md-7 col-xs-12" rows="4" cols="50" disabled>
                                        <?php echo $query->yonetimveortaklik ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="neredefarkketiniz"
                                        class="form-control col-md-7 col-xs-12" rows="4" cols="50" disabled>
                                        <?php echo $query->neredefarkettiniz ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesaj<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="bayiistekneden" class="form-control col-md-7 col-xs-12"
                                        rows="4" cols="50" disabled>
                                         <?php echo $query->bayiistekneden ?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="durum" required>
                                        <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>
                                        <option value="1" <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>>
                                            Okundu
                                        </option>
                                        <option value="0" <?php if ($query->durum == 0) {
                                            echo 'selected=""';
                                        } ?>> Okunmadı</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php $query->id ?>">
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="franchisingform.php"><button class="btn btn-primary btn-xs"
                                            name="franchisingdurumduzenle">Geri Dön</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <hr>
    </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>