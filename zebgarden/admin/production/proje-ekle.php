<?php

include 'header.php';

$query = $db->query("SELECT * FROM projeler where id=''")->fetchAll();
?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Proje Ekleme <small>,
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
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />


                        <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                        <form action="../database/processing.php" method="POST" enctype="multipart/form-data"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="resim"
                                        class="form-control col-md-7 col-xs-12">
                                    <!--type file dersek resim yükleme alanı oluyor -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ad" placeholder="kod giriniz"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> İçerik
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="icerik">
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




                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="projeekle" class="btn btn-success">Kaydet</button>
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