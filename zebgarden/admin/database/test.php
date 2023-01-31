<?php
include 'admin/database/db.php';

$query = $db->query("SELECT * FROM ayar where ayarId='1'")->fetchAll();

foreach ($query as $result) {
    ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $result->ayarTitle ?>
    </title>
    <meta name="description" content="<?php echo $result->ayarDescription ?> ">
    <meta name="keyword" content="<?php echo $result->ayarKeyword ?>">
    <meta name="author" content="<?php echo $result->ayarAuthor ?>">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Hind%3A300%2Cregular%2C500%2C600%2C700&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=4.9.7'
        type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/rftr-style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all'>
</head>

<body data-rsssl="1"
    class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js realfactory-body realfactory-body-front realfactory-full  realfactory-with-sticky-navigation gdlr-core-link-to-lightbox">
    <div class="realfactory-mobile-header-wrap">
        <div class="realfactory-mobile-header realfactory-header-background realfactory-style-slide"
            id="realfactory-mobile-header">
            <div class="realfactory-mobile-header-container realfactory-container">
                <div class="realfactory-logo  realfactory-item-pdlr">
                    <div class="realfactory-logo-inner">
                        <a href="index.php"><img src="images/<?php echo $result->ayarLogo ?>" alt="logo"></a>
                    </div>
                </div>
                <div class="realfactory-mobile-menu-right">
                    <div class="realfactory-mobile-menu">
                        <a class="realfactory-mm-menu-button realfactory-mobile-menu-button realfactory-mobile-button-hamburger-with-border"
                            href="#realfactory-mobile-menu">
                            <i class="fa fa-bars"></i></a>
                        <div class="realfactory-mm-menu-wrap realfactory-navigation-font" id="realfactory-mobile-menu"
                            data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li
                                    class="menu-item menu-item-has-children current-menu-item menu-item-home realfactory-normal-menu ">
                                    <a href="index.php" class="sf-with-ul-pre">Anasayfa</a>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="hakkimizda.php">Kurumsal</a>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="markalarimiz.php">Markalarımız</a>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="kariyer.php">Kariyer</a>
                                </li>
                                <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                    <a href="iletisim.php">İletişim</a>
                                </li>
                                <br>
                                <div class="realfactory-top-bar-right-social">
                                    <a href="<?php echo $result->ayarFacebook ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="facebook">
                                        <i class="fa fa-facebook fa-lg"></i>
                                    </a>
                                    <a href="<?php echo $result->ayarInstagram ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="instagram">
                                        <i class="fa fa-instagram fa-lg"></i>
                                    </a>
                                    <a href="<?php echo $result->ayarWhatsapp ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="whatsapp">
                                        <i class="fa fa-whatsapp fa-lg"></i>
                                    </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="realfactory-body-outer-wrapper ">
        <div class="realfactory-body-wrapper clearfix  realfactory-with-transparent-navigation realfactory-with-frame">
            <div class="realfactory-top-bar">
                <div class="realfactory-top-bar-background">
                </div>
                <div class="realfactory-top-bar-container clearfix realfactory-container ">
                    <i class="fa fa-envelope">
                        <a href="mailto:info@belgestone.com.tr">
                            <?php echo $result->ayarMail ?>
                        </a>
                    </i>
                    &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-phone">
                        <a href="tel: 4444444">
                            <?php echo $result->ayarGsm ?>
                        </a>
                    </i>
                    <div class="realfactory-top-bar-right realfactory-item-pdlr">
                        <div class="gdlr-core-dropdown-tab gdlr-core-js clearfix">
                            <div class="realfactory-top-bar-right realfactory-item-pdlr">
                                <div class="realfactory-top-bar-right-social">
                                    <a href="<?php echo $result->ayarFacebook ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="facebook">
                                        <i class="fa fa-facebook fa-lg"></i>
                                    </a>
                                    <a href="<?php echo $result->ayarInstagram ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="instagram">
                                        <i class="fa fa-instagram fa-lg"></i>
                                    </a>
                                    <a href="<?php echo $result->ayarWhatsapp ?>" target="_blank"
                                        class="realfactory-top-bar-social-icon" title="whatsapp">
                                        <i class="fa fa-whatsapp fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header
                class="realfactory-header-wrap realfactory-header-style-bar realfactory-header-background  realfactory-style-left">
                <div class="realfactory-header-container clearfix  realfactory-container">
                    <div class="realfactory-header-container-inner">
                        <div class="realfactory-logo  realfactory-item-pdlr">
                            <div class="realfactory-logo-inner">
                                <a href="index.php"><img src="images/<?php echo $result->ayarLogo ?>" alt="logo"></a>
                            </div>
                        </div>
                        <div class="realfactory-navigation-container clearfix  realfactory-container"
                            style="float: right;">
                            <div class="realfactory-navigation realfactory-item-pdlr clearfix ">
                                <div class="realfactory-main-menu" id="realfactory-main-menu">
                                    <ul id="menu-main-navigation-1" class="sf-menu">
                                        <li
                                            class="menu-item  menu-item-home  menu-item-has-children realfactory-normal-menu">
                                            <a href="index.php" class="sf-with-ul-pre">Anasayfa</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                            <a href="hakkimizda.php" class="sf-with-ul-pre">Kurumsal</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                            <a href="markalarimiz.php" class="sf-with-ul-pre">Markalarımız</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children realfactory-normal-menu">
                                            <a href="kariyer.php">Karİyer</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children realfactory-mega-menu">
                                            <a href="iletisim.php" class="sf-with-ul-pre">İletİşİm</a>
                                        </li>
                                    </ul>
                                    <div class="realfactory-navigation-slide-bar" id="realfactory-navigation-slide-bar">
                                    </div>
                                </div>
                                <div class="realfactory-main-menu-right-wrap clearfix ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <?php } ?>