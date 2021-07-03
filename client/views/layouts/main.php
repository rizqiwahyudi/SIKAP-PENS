<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use client\assets\ClientAsset;
// use client\assets\ImageAsset;
// use common\widgets\Alert;
ClientAsset::register($this);

// ImageAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode('SIKAP' . ' - ' . $this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- Header Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="brand">
                            <a href="<?= Yii::$app->request->baseUrl ?>/">
                                <img src="<?= Yii::$app->request->baseUrl ?>/img/logo-Pens.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="https://api.whatsapp.com/send?phone=6281133305005"><i class="fa fa-phone-alt"></i>+62 811-3330-5005</a>
                            </div>
                            <div class="topbar-col">
                                <a href="mailto:admin@sikap.pens.ac.id"><i class="fa fa-envelope"></i>admin@sikap.pens.ac.id</a>
                            </div>
                            <div class="topbar-col">
                                <div class="topbar-social">
                                    <a href="https://twitter.com/penseepis"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/pens.eepis"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/channel/UCgCH04Vjy22hnfTZBTMDccQ"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/penseepis/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar navbar-expand-lg bg-light navbar-light">
                            <a href="#" class="navbar-brand">MENU</a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="<?= Yii::$app->request->baseUrl ?>/" class="nav-item nav-link <?= $this->title == 'Home' ? 'active' : '' ?>">Home</a>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/about" class="nav-item nav-link <?= $this->title == 'About' ? 'active' : '' ?>">About Us</a>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/list-kp/" class="nav-item nav-link <?= $this->title == 'List Tempat KP' ? 'active' : '' ?>">List KP</a>
                                  <!--   <a href="portfolio.html" class="nav-item nav-link">Portfolio</a>
                                    <a href="single.html" class="nav-item nav-link">Single Page</a> -->
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/contact" class="nav-item nav-link <?= $this->title == 'Contact' ? 'active' : '' ?>">Contact Us</a>
                                    <a href="https://drive.google.com/drive/folders/1Fr4qr748Mni6OcPy5LmBim7PQiNbJDF3?usp=sharing" class="btn"><i class="fa fa-download"></i>Download Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <?= $content ?>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-about">
                            <h2>SIKAP - PENS</h2>
                            <p>
                                Web ini di khususkan untuk informasi seputar aturan akademis dan kehidupan kampus dari pens, silahkan kunjungi website https://www.pens.ac.id untuk mengakses website official pens
                            </p>
                            <br>
                            <p><a href="https://goo.gl/maps/NbWni7tpzX32" target="_blank" rel="noopener"><i class="fa fa-map-marker-alt"></i> Raya ITS &#8211; Kampus PENS Sukolilo<br />Surabaya 60111, INDONESIA</a></p>
                            <p><a href="https://api.whatsapp.com/send?phone=6281133305005"><i class="fa fa-phone-alt"></i>+62 811-3330-5005</a></p>
                            <p><a href="mailto:admin@sikap.pens.ac.id"><i class="fa fa-envelope"></i>sikap.pens.ac.id</a></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Useful Link</h2>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/about">About Us</a>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/about">Our Story</a>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/about">Our Team</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Useful Link</h2>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/site/contact">Contact Us</a>
                                    <a href="<?= Yii::$app->request->baseUrl ?>/">FAQs</a>
                                    <a href="https://goo.gl/maps/NbWni7tpzX32" target="_blank" rel="noopener">Site Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="">Copyright ©2021 </a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Template By <a href="">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>