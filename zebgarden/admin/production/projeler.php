<?php

include 'header.php';

$query = $db->query("SELECT * FROM projeler")->fetchAll();



?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projeler Listeleme <small>,

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
                        <div align="right">

                            <a href="proje-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle</button></a>
                        </div>
                    </div>
                    <div class="x_content">

                        <!-- Div İçerik Başlangıç -->

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sıra No</th>
                                    <th>Resim</th>
                                    <th>Ad</th>
                                    <th>İçerik</th>
                                    <th>Durum</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $say = 0;
                                foreach ($query as $result) {
                                    $say++; ?>


                                <tr>
                                    <td width="20">
                                        <?php echo $say ?></td>
                                    <td><img width="200" height="100" src="../../<?php echo $result->resim ?>"></td>
                                    <td>
                                        <?php echo $result->ad ?>
                                    </td>
                                    <td>
                                        <?php echo $result->icerik ?>
                                    </td>


                                    <td>
                                        <center>
                                            <?php
                                                if ($result->durum == 1) { ?>
                                            <button class="btn btn-success btn-xs">Aktif</button>

                                            <?php
                                                } else {
                                                    ?>
                                            <button class="btn btn-danger btn-xs">Pasif</button>
                                            <?php } ?>
                                        </center>

                                    </td>

                                    <td>
                                        <center><a href="proje-duzenle.php?id=<?php echo $result->id ?>"><button
                                                    class="btn btn-primary btn-xs">Düzenle</button></a></center>
                                    </td>
                                    <td>
                                        <center><a
                                                href="../database/processing.php?id=<?php echo $result->id ?>&projesil=ok"><button
                                                    class="btn btn-danger btn-xs">Sil</button></a></center>
                                    </td>
                                </tr>



                                <?php }

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