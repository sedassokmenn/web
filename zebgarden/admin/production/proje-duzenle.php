<?php

include 'header.php';

$query = $db->prepare("SELECT * FROM projeler WHERE id=?");
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
                        <form action="../database/processing.php" enctype="multipart/form-data" method="POST"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> resim
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="resim" value="<?php echo $query->resim ?>"
                                        required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Ad
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ad" value="<?php echo $query->ad ?>"
                                        required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İçerik
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="icerik"><?php echo $query->icerik ?>
                                  </textarea>
                                </div>
                            </div>
                            <script type="text/javascript">
                            CKEDITOR.replace('editor1', {
                                filebrowserBrowserUrl: 'ckfinder/ckfinder.html',
                                filebrowserImageBrowserUrl: 'ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowserUrl: 'ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                forcePasteAsPlainText: true
                            });
                            </script>





                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                    Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="durum" required>
                                        <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>
                                        <option value="1" <?php echo $query->durum == '1' ? 'selected=""' : ''; ?>>Aktif
                                        </option>
                                        <option value="0" <?php if ($query->durum == 0) {
                                            echo 'selected=""';
                                        } ?>>Pasif</option>
                                        <?php
                                        if ($query->durum == 0) { ?>
                                        <?php } else { ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <input type="hidden" name="id" value="<?php echo $query->id ?>">


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="projeduzenle" class="btn btn-success">Güncelle</button>
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