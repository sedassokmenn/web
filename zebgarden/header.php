<?php
session_start();
if (!$_SESSION["dil"]) {
    require("dil/tr.php");
} else {
    require("dil/" . $_SESSION["dil"] . ".php");
}

include 'admin/database/db.php';
$query = $db->query("SELECT * FROM ayar where id='1'")->fetchAll();
foreach ($query as $result) {



    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Bahçe Mobilyası İndirimli Fiyatları ve Çeşitleri Zeb Garden’da! | Zeb Garden</title>
    <meta name="description" content="<?php echo $result->description ?> ">
    <meta name="keyword" content="<?php echo $result->keyword ?>">
    <meta name="author" content="<?php echo $result->author ?>">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>
    <div class="pre-header">
        <div class="d-flex flex-row mb-3 justify-content-end align-items-center">
            <div class="border-first-button px-3">
                <button id="myBtn">Bayilik Girişi</button>
            </div>
            <div class="px-3">
                <i class="fa fa-clock-o " style="color:white" aria-hidden="true">
                    <h8 style="color:white">
                        <?php echo $result->mesai ?>
                    </h8>
                </i>
            </div>
        </div>
    </div>


    <a href="index.php" class="logo p-3" style="float: left;">
        <img src="assets\images\logo.png" width="90" height="70" style="padding-right:180px;padding-left:10px">
    </a>
    <div class="topnav" id="myTopnav" style="padding-right:30px">
        <a href="index.php">Anasayfa</a>
        <div class="dropdown">
            <button class="dropbtn">Bizi Tanıyın
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="vizyon.php">Vizyon</a>
                <a href="gizlilikpolitikasi.php">Gizlilik Politikası</a>
                <a href="membershippolicy.php">Üyelik Politikası</a>
                <a href="kalitebelgelerimiz.php">Kalite Belgelerimiz</a>
                <a href="mutlumusteriler.php">Mutlu Müşteriler</a>
                <a href="franchiseform.php">Bayilik(Franchise)</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Ürünlerimiz
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="products.php">Ürünlerimiz</a>
            </div>
        </div>
        <a href="projects.php">Projelerimiz</a>
        <a href="contact.php">İletişim</a>

        <a href="<?php echo $result->facebook ?>" rel="nofollow"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $result->instagram ?>" rel="nofollow"><i class="fa fa-instagram"></i></a>
        <a href="<?php echo $result->twitter ?>" rel="nofollow"><i class="fa fa-twitter"></i></a>
        <a href="<?php echo $result->youtube ?>" rel="nofollow"><i class="fa fa-youtube"></i></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        <a href="dil.php?dil=tr" style="padding-right:0px">
            <?php echo $dil["trdil"]; ?> |
        </a>
        <a href="dil.php?dil=en" style="padding-left:5px">
            <?php echo $dil["ingdil"]; ?>
        </a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ÜYE OLMA FORMU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="#">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Firma Adınız:</label>
                            <input class="form-control" id="message-text">
                            <label for="message-text" class="col-form-label">Telefon Numaranız: </label>
                            <input class="form-control" id="message-text">
                            <label for="message-text" class="col-form-label">E-posta Adresiniz:</label>
                            <input class="form-control" id="message-text">
                        </div>
                    </form>
                </div>
                <button type="button" class="btn btn-outline-info" id="kayitol" name="kayitol"
                    style="border-radius: 36px;margin-top:8px;">Kayıt Ol</button>

            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"> BAYİ GİRİŞ FORMU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="#">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Bayi Adınız:</label>
                            <input class="form-control" id="message-text">
                            <label for="message-text" class="col-form-label">E-posta Adresiniz:</label>
                            <input class="form-control" id="message-text">
                            <label for="message-text" class="col-form-label">Şifreniz:</label>
                            <input class="form-control" id="message-text">
                            <button type="button" class="btn btn-outline-info" id="clickButton"
                                style="border-radius: 36px;width: 30%;margin-top:8px;">Üye Ol</button>
                            <button type="button" class="btn btn-outline-success" name="giris"
                                style="border-radius: 36px;width: 30%;margin-top:8px;float:right">Success</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">
    $('#myBtn').click(function() {
        $('#myModal').modal('show');

    });
    </script>

    <script type="text/javascript">
    $('#clickButton').click(function() {

        $('#myModal').modal('hide');
        $('#exampleModal').modal('show');

    });
    </script>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
    <?php } ?>