<?php

include 'header.php';

$query = $db->prepare("SELECT * FROM slider WHERE id=?");
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
                        <h2>Slider Düzenleme <small>,
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
                        <form action="../database/processing.php" method="POST" enctype="multipart/form-data"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider resim
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php if (strlen($query->resimyol) > 0) { ?>
                                    <img width="500" height="200" src="../../<?php echo $query->resimyol ?>">
                                    <?php } else { ?>
                                    <img width="500" height="200" src="../../images/resim-yok.png">
                                    <?php } ?>
                                    <input type="file" id="first-name" name="resimyol"
                                        value="<?php echo $query->resimyol ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ad" value="<?php echo $query->ad ?>"
                                        required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider URL
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="link" value="<?php echo $query->link ?>"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="sira" value="<?php echo $query->sira ?>"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider
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
                                    <button type="submit" name="sliderduzenle" class="btn btn-success">Güncelle</button>
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