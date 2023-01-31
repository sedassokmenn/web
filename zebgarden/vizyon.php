<?php
include 'header.php';

$query = $db->query("SELECT * FROM hakkimizda")->fetch();

?>

<div id="bannermember" class="bannermember">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-lg-4">
                <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h8 style="color:White">Bizi Tanıyın</h8>
                    <h4 style="color:white">ÜYELİK POLİTİKASI</h4>
                </div>
            </div>
            <div class="col-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-xl-4 col-md-4 col-xs-12">
            <div class="tab" style="width: 100%;">
                <button class="tablinks" onclick="openCity(event, 'Vizyonumuz')" id="defaultOpen">
                    <h8>Vizyonumuz</h8>
                </button>
                <button class="tablinks" onclick="openCity(event, 'Gizlilik Politikası')">
                    <h8>Gizlilik Politikası</h8>
                </button>
                <button class="tablinks" onclick="openCity(event, 'Üyelik Politikası')">
                    <h8>Üyelik Politikası</h8>
                </button>
                <button class="tablinks" onclick="openCity(event, 'Mutlu Müşteriler')">
                    <h8>Mutlu Müşteriler</h8>
                </button>
                <button class="tablinks" onclick="openCity(event, 'Bayilik(Franchise)')">
                    <h8>Bayilik(Franchise)</h8>
                </button>
            </div>
        </div>
        <div class="col-xl-8 col-md-8 col-xs-12">
            <div class="tabcontent" id="Vizyonumuz" style="width: 100%;">
                <h3>Vizyonumuz</h3>
                <p>
                    <?php echo $query->vizyon ?>
                </p>

            </div>
            <div id="Gizlilik Politikası" class="tabcontent">
                <h3>Gizlilik Politikası</h3>
                <p><?php echo $query->gizlilikPolitikasi ?></p>
            </div>

            <div id="Üyelik Politikası" class="tabcontent">
                <h3>Üyelik Politikası</h3>
                <p>
                    <?php echo $query->uyelikPolitikasi ?>
                </p>
            </div>
            <div id="Mutlu Müşteriler" class="tabcontent">
                <h3>Mutlu Müşteriler</h3>
                <p><?php echo $query->mutluMusteriler ?></p>
            </div>
            <div id="Bayilik(Franchise)" class="tabcontent">
                <h3>Bayilik(Franchise)</h3>
                <p>
                    <?php echo $query->bayilik ?>
                </p>
            </div>
        </div>

    </div>

</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php
include 'footer.php';
?>