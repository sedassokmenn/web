<?php
include 'db.php';

function foundfile($type)
{
    if ($type == ("slider")) {
        $uploads_dir = '../../images/slider';
        @$tmp_name = $_FILES['resimyol']["tmp_name"];
        @$name = $_FILES['resimyol']["name"];
    } else if ($type == ("urun")) {
        $uploads_dir = '../../images/urun';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];
    } else if ($type == ("proje")) {
        $uploads_dir = '../../images/urun';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];
    }
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(100, 9999);

    $benzersizad = $benzersizsayi1;


    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . "-" . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad-$name");
    return $refimgyol;

}
if (isset($_POST['admingiris'])) {

    $mail = $_POST['mail'];
    $password = md5($_POST['password']);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where mail=? and password=? ");
    $kullanicisor->execute(array($mail, $password));

    $say = $kullanicisor->rowCount();

    if ($say == 1) {

        $_SESSION['mail'] = $mail;
        header("Location:../production/index.php");
        exit;



    } else {

        header("Location:../production/login.php?durum=no");
        exit;
    }


}
if (isset($_POST['genelayarkaydet'])) {
    $query = $db->prepare("UPDATE ayar SET
    title=?,
    description=?,
    keyword=?,
    author=?
    WHERE id=1");
    $insert = $query->execute(
        array(
            $_POST['title'],
            $_POST['description'],
            $_POST['keyword'],
            $_POST['author']
        )
    );
    if ($insert) {
        header("Location:../production/genel-ayar.php?durum=ok");
    } else {
        header("Location:../production/genel-ayar.php?durum=no");
    }
}
if (isset($_POST['iletisimayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET
		tel=?,
		gsm=?,
		mail=?,
		ilce=?,
		il=?,
		adres=?,
		mesai=?
		WHERE id=1");
    $update = $ayarkaydet->execute(
        array(
            $_POST['tel'],
            $_POST['gsm'],
            $_POST['mail'],
            $_POST['ilce'],
            $_POST['il'],
            $_POST['adres'],
            $_POST['mesai']
        )
    );
    if ($update) {
        header("Location:../production/iletisim-ayarlar.php?durum=ok");
    } else {
        header("Location:../production/iletisim-ayarlar.php?durum=no");
    }
}
if (isset($_POST['sosyalayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET
		facebook=?,
        instagram=?,
		twitter=?,
		youtube=?
		WHERE id=1");
    $update = $ayarkaydet->execute(
        array(
            $_POST['facebook'],
            $_POST['instagram'],
            $_POST['twitter'],
            $_POST['youtube']
        )
    );
    if ($update) {

        header("Location:../production/sosyal-ayarlar.php?durum=ok");
    } else {

        header("Location:../production/sosyal-ayarlar.php?durum=no");
    }
}
if (isset($_POST['mailayarkaydet'])) {
    $ayarkaydet = $db->prepare("UPDATE ayar SET
	smtphost=?,user=?,smtppassword=?,smtpport=? WHERE id=1");
    $update = $ayarkaydet->execute(
        array(
            $_POST['smtphost'],
            $_POST['user'],
            $_POST['smtppassword'],
            $_POST['smtpport']
        )
    );
    if ($update) {
        header("Location:../production/mail-ayarlar.php?durum=ok");
    } else {
        header("Location:../production/mail-ayarlar.php?durum=no");
    }
}
if (isset($_POST['kullanicikaydet'])) {
    $mail = $_POST['kullanici_mail'];
    if (!preg_match("/^[^0-9][a-zA-z0-9_]+([.][a-zA-z0-9_]+)*[@][a-zA-z0-9_]+([.][a-zA-z0-9_]+)*[.][a-zA-Z]{2,4}$/i", $mail)) {
        header("Location:../production/kullanici-ekle.php?durum=no");
    }

    //Tablo güncelleme işlemi kodları...
    $kullanicikaydet = $db->prepare("INSERT into kullanici SET
    adSoyad=?, mail=?, gsm=?, password=? ");
    $insert = $kullanicikaydet->execute(
        array(
            $_POST['adSoyad'],
            $_POST['mail'],
            $_POST['gsm'],
            $_POST['password']
        )
    );
    if ($insert) {
        header("Location:../production/kullanici-ekle.php?durum=ok");
    } else {
        header("Location:../production/kullanici-ekle.php?durum=no");
    }

}
if (isset($_POST['kullaniciduzenle'])) {
    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE kullanici SET
		adSoyad=?, mail=?, gsm=?, durum=? WHERE id=?");
    $update = $ayarkaydet->execute(
        array(
            $_POST['adSoyad'],
            $_POST['mail'],
            $_POST['gsm'],
            $_POST['durum'],
            $id
        )
    );
    if ($update) {
        Header("Location:../production/kullanici-duzenle.php?id=$id&durum=ok");
    } else {
        Header("Location:../production/kullanici-duzenle.php?id=$id&durum=no");
    }
}
if (@$_GET['kullanicisil'] == "ok") {
    $sil = $db->prepare("DELETE from kullanici where id=?");
    $kontrol = $sil->execute(array($_GET['id']));
    if ($kontrol) {
        header("location:../production/kullanici.php?sil=ok");
    } else {
        header("location:../production/kullanici.php?sil=no");
    }
}
if (isset($_POST['mesajdurumduzenle'])) {
    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE iletisimform SET durum=? WHERE id= ?");
    $update = $ayarkaydet->execute(array($_POST['durum'], $id));
    if ($update) {
        Header("Location:../production/iletisimform.php?id=$id&durum=ok");
    } else {
        Header("Location:../production/iletisimform.php?id=$id&durum=no");
    }
}
if (@$_GET['iletisimsil'] == "ok") {
    $sil = $db->prepare("DELETE from iletisimform where id=?");
    $kontrol = $sil->execute(array($_GET['id']));
    if ($kontrol) {
        header("location:../production/iletisimform.php?sil=ok");
    } else {
        header("location:../production/iletisimform.php?sil=no");
    }
}
if (isset($_POST['franchisingdurumduzenle'])) {
    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE franchisingform SET durum=? WHERE id= ?");
    $update = $ayarkaydet->execute(array($_POST['durum'], $id));
    if ($update) {
        Header("Location:../production/franchisingform.php?id=$id&durum=ok");
    } else {
        Header("Location:../production/franchisingform.php?id=$id&durum=no");
    }
}
if (@$_GET['franchisingsil'] == "ok") {
    $sil = $db->prepare("DELETE from franchisingform where id=?");
    $kontrol = $sil->execute(array($_GET['id']));
    if ($kontrol) {
        header("location:../production/franchisingform.php?sil=ok");
    } else {
        header("location:../production/franchisingform.php?sil=no");
    }
}
if (isset($_POST['hakkimizdakaydet'])) {
    $hakkimizdakaydet = $db->prepare("UPDATE hakkimizda SET
                        vizyon=?,
                        gizlilikPolitikasi=?,
                        uyelikPolitikasi=?,
                        mutluMusteriler=?,
                        kaliteBelge=?,
                        bayilik=?
                        WHERE id=1");
    $update = $hakkimizdakaydet->execute(
        array(
            $_POST['vizyon'],
            $_POST['gizlilikPolitikasi'],
            $_POST['uyelikPolitikasi'],
            $_POST['mutluMusteriler'],
            $_POST['kaliteBelge'],
            $_POST['bayilik']
        )
    );
    if ($update) {
        header("Location:../production/about.php?durum=ok");
    } else {
        header("Location:../production/about.php?durum=no");
    }
}
if (isset($_POST['urunekle'])) {
    $refimgyol = foundfile("urun");

    $urunkaydet = $db->prepare("INSERT into urunler SET
    kategoriId=?, kategoriAd=?,resim=?, kod=?, modelAdi=?,
    orguModeli=?, fiyat=?, aciklama=?, metalRenk=?, rattanRenk=?,
    minderRenk=?, icerik=?, adet=?,
    showroomİnternerSatis=?, toptanSatisFiyati=?, vadeli=?,
    yurdisiSatisFiyati=?, olculer=?, agirlik=?, parca=?,
    S=?, T=?, U=?, V=?, W=?, X=?, Y=? ");
    $insert = $urunkaydet->execute(
        array(
            $_POST['kategoriId'], $_POST['kategoriAd'],
            $refimgyol,
            $_POST['kod'], $_POST['modelAdi'], $_POST['orguModeli'],
            $_POST['fiyat'], $_POST['aciklama'], $_POST['metalRenk'],
            $_POST['rattanRenk'], $_POST['minderRenk'], $_POST['icerik'],
            $_POST['adet'], $_POST['showroomİnternerSatis'], $_POST['toptanSatisFiyati'],
            $_POST['vadeli'], $_POST['yurdisiSatisFiyati'], $_POST['olculer'],
            $_POST['agirlik'], $_POST['parca'], $_POST['S'], $_POST['T'],
            $_POST['U'], $_POST['V'], $_POST['W'], $_POST['X'], $_POST['Y']
        )
    );
    if ($insert) {
        header("Location:../production/urun-ekle.php?durum=ok");
    } else {
        header("Location:../production/urun-ekle.php?durum=no");
    }
}
if (isset($_POST['urunduzenle'])) {
    $refimgyol = foundfile("urun");

    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE urunler SET     
    kategoriId=?, kategoriAd=?,resim=?, kod=?, modelAdi=?,
    orguModeli=?, fiyat=?, aciklama=?, metalRenk=?, rattanRenk=?,
    minderRenk=?, icerik=?, adet=?,
    showroomİnternerSatis=?, toptanSatisFiyati=?, vadeli=?,
    yurdisiSatisFiyati=?, olculer=?, agirlik=?, parca=?,
    S=?, T=?, U=?, V=?, W=?, X=?, Y=? WHERE id= ?");
    $update = $ayarkaydet->execute(
        array(
            $_POST['kategoriId'], $_POST['kategoriAd'],
            $refimgyol,
            $_POST['kod'], $_POST['modelAdi'], $_POST['orguModeli'],
            $_POST['fiyat'], $_POST['aciklama'], $_POST['metalRenk'],
            $_POST['rattanRenk'], $_POST['minderRenk'], $_POST['icerik'],
            $_POST['adet'], $_POST['showroomİnternerSatis'], $_POST['toptanSatisFiyati'],
            $_POST['vadeli'], $_POST['yurdisiSatisFiyati'], $_POST['olculer'],
            $_POST['agirlik'], $_POST['parca'], $_POST['S'], $_POST['T'],
            $_POST['U'], $_POST['V'], $_POST['W'], $_POST['X'], $_POST['Y'],
            $id
        )
    );
    if ($update) {
        Header("Location:../production/urun-duzenle.php?id=$id&durum=ok");
    } else {
        Header("Location:../production/urun-duzenle.php?id=$id&durum=no");
    }
}
if (@$_GET['urunsil'] == "ok") {
    $sil = $db->prepare("DELETE from urunler where id=?");
    $kontrol = $sil->execute(array($_GET['id']));
    if ($kontrol) {
        header("location:../production/urunler.php?sil=ok");
    } else {
        header("location:../production/urunler.php?sil=no");
    }
}
if (isset($_POST['projeduzenle'])) {
    $refimgyol = foundfile("proje");

    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE projeler SET
		resim=?, ad=?, icerik=?, durum=? WHERE id = ?");
    $update = $ayarkaydet->execute(
        array(
            $refimgyol, $_POST['ad'], $_POST['icerik'],
            $_POST['durum'],
            $id
        )
    );
    if ($update) {
        Header("Location:../production/proje-duzenle.php?Id=$id&durum=ok");
    } else {
        Header("Location:../production/proje-duzenle.php?id=$id&durum=no");
    }
}
if (isset($_POST['projeekle'])) {
    $refimgyol = foundfile("proje");

    $urunkaydet = $db->prepare("INSERT into projeler SET
resim=?, ad=?, icerik=? ");
    $insert = $urunkaydet->execute(
        array(
            $refimgyol, $_POST['ad'], $_POST['icerik']
        )
    );
    if ($insert) {
        header("Location:../production/proje-ekle.php?durum=ok");
    } else {
        header("Location:../production/proje-ekle.php?durum=no");
    }
}
if (@$_GET['projesil'] == "ok") {
    $sil = $db->prepare("DELETE from projeler where id=?");
    $kontrol = $sil->execute(array($_GET['id']));
    if ($kontrol) {
        header("location:../production/projeler.php?sil=ok");
    } else {
        header("location:../production/projeler.php?sil=no");
    }
}
if (isset($_POST['sliderduzenle'])) {
    $refimgyol = foundfile("slider");

    $id = $_POST['id'];
    $ayarkaydet = $db->prepare("UPDATE slider SET
		resimyol=?, ad=?, link=?, sira=?, durum=? WHERE id=?");
    $update = $ayarkaydet->execute(
        array(
            $refimgyol, $_POST['ad'], $_POST['link'],
            $_POST['sira'], $_POST['durum'],
            $id
        )
    );
    if ($update) {
        Header("Location:../production/slider-duzenle.php?id=$id&durum=ok");
    } else {
        Header("Location:../production/slider-duzenle.php?id=$id&durum=no");
    }
}
if (isset($_POST['BasvuruGonderContact'])) {

    //Tablo güncelleme işlemi kodları...
    $kullanicikaydet = $db->prepare("INSERT into iletisimform SET
    ad=?, soyad=?, mail=?, mesaj=? ");
    $insert = $kullanicikaydet->execute(
        array(
            $_POST['ad'],
            $_POST['soyad'],
            $_POST['mail'],
            $_POST['mesaj']
        )
    );
    if ($insert) {
        header("Location:../../contact.php?durum=ok");
    } else {
        header("Location:../../contact.php?durum=no");
    }

}
if (isset($_POST['BasvuruGonderFranchise'])) {

    //Tablo güncelleme işlemi kodları...
    $kullanicikaydet = $db->prepare("INSERT into franchisingform SET
    ad=?, soyad=?, mail=?, tel=?, gsm=?, il=?, ilce=?, meslek=?, yatirimbutce=?,
    bayiliktercih=?, urunsatis=?, satistecrube=?, nedentercih=?, encoktercih=?, 
    yonetimveortaklik=?, neredefarkettiniz=?, bayiistekneden=? ");
    $insert = $kullanicikaydet->execute(
        array(
            $_POST['ad'], $_POST['soyad'], $_POST['mail'], $_POST['tel'],
            $_POST['gsm'], $_POST['il'], $_POST['ilce'], $_POST['meslek'],
            $_POST['yatirimbutce'], $_POST['bayiliktercih'], $_POST['urunsatis'],
            $_POST['satistecrube'], $_POST['nedentercih'], $_POST['encoktercih'],
            $_POST['yonetimveortaklik'], $_POST['neredefarkettiniz'], $_POST['bayiistekneden'],
        )
    );
    if ($insert) {
        header("Location:../../franchiseform.php?durum=ok");
    } else {
        header("Location:../../franchiseform.php?durum=no");
    }

}