<?php

include 'header.php';

$query = $db->query("SELECT * FROM urunler")->fetchAll();


?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ürün Listeleme <small>,

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
                        <div align="right">

                            <a href="urun-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle</button></a>
                        </div>
                    </div>
                    <div class="x_content">


                        <!-- Div İçerik Başlangıç -->

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sıra No:</th>
                                    <th>Kategori No:</th>
                                    <th>Kategori Ad:</th>
                                    <th>Resim</th>
                                    <th>Ürün Kodu</th>
                                    <th>Model Adı</th>
                                    <th>orguModeli</th>
                                    <th>fiyat</th>
                                    <th>aciklama</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($query as $result) { ?>


                                <tr>
                                    <td><?php echo $result->id ?></td>
                                    <td>
                                        <?php echo $result->kategoriId ?>
                                    </td>
                                    <td><?php echo $result->kategoriAd ?></td>
                                    <td>
                                        <?php echo $result->resim ?>
                                    </td>
                                    <td><?php echo $result->kod ?></td>
                                    <td>
                                        <?php echo $result->modelAdi ?>
                                    </td>
                                    <td><?php echo $result->orguModeli ?></td>
                                    <td>
                                        <?php echo $result->fiyat ?>
                                    </td>

                                    <td>
                                        <?php echo $result->aciklama ?>
                                    </td>
                                    <td>
                                        <center><a href="urun-duzenle.php?id=<?php echo $result->id ?>"><button
                                                    class="btn btn-primary btn-xs">Düzenle</button></a></center>
                                    </td>
                                    <td>
                                        <center><a
                                                href="../database/processing.php?id=<?php echo $result->id ?>&urunsil=ok"><button
                                                    class="btn btn-danger btn-xs">Sil</button></a></center>
                                    </td>
                                </tr>



                                <?php
                                }
                                ?>


                            </tbody>
                        </table>

                        <!-- Div İçerik Bitişi -->


                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>