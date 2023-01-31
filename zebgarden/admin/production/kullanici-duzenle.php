<?php

include 'header.php';

$query = $db->prepare("SELECT * FROM kullanici WHERE id=?");
$query->execute([@$_GET['id']]);
$query = $query->fetch();

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kullanıcı Düzenleme <small>,
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
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
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
                        <form action="../database/processing.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="adSoyad"
                                        value="<?php echo $query->adSoyad ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="mail" value="<?php echo $query->mail ?>"
                                        required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="gsm" value="<?php echo $query->gsm ?>"
                                        required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı
                                    Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="durum" required>



                                        <!-- Kısa İf Kulllanımı 

                    <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>

                  -->




                                        <option value="1" <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>>Aktif
                                        </option>



                                        <option value="0" <?php if ($query->durum == 0) {
                                            echo 'selected=""';
                                        } ?>>Pasif</option>
                                        <!-- <?php

                                        if ($query->durum == 0) { ?>


                                 <option value="0">Pasif</option>
                                 <option value="1">Aktif</option>


                   <?php } else { ?>

                                 <option value="1">Aktif</option>
                                 <option value="0">Pasif</option>

                   <?php }

                                        ?> -->


                                    </select>
                                </div>
                            </div>


                            <input type="hidden" name="id" value="<?php echo $query->id ?>">


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="kullaniciduzenle"
                                        class="btn btn-success">Güncelle</button>
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