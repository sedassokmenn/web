<?php
include 'header.php';
$query = $db->query("SELECT * FROM hakkimizda")->fetchAll();

foreach ($query as $result) {
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hakkımızda Ayarları <small>
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
                        <form action="../database/processing.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="vizyon"><?php echo $result->vizyon ?>
                                    </textarea>
                                </div>
                            </div>

                            <!-- CK Editör başlangıç -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="first-name">gizlilikPolitikasi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="gizlilikPolitikasi"><?php echo $result->gizlilikPolitikasi ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="first-name">uyelikPolitikasi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="uyelikPolitikasi"><?php echo $result->uyelikPolitikasi ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="first-name">mutluMusteriler<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="mutluMusteriler"><?php echo $result->mutluMusteriler ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="first-name">kaliteBelge<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="kaliteBelge"><?php echo $result->kaliteBelge ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">bayilik<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="bayilik"><?php echo $result->bayilik ?>
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
                                    <button type="submit" name="hakkimizdakaydet"
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

<?php }
include 'footer.php';
?>