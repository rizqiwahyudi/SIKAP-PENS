<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

// use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="<?= Yii::$app->request->baseUrl ?>/">Home</a>
                <a href="<?= Yii::$app->request->baseUrl ?>/site/contact">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-title">Get In Touch</h2>
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3138.3260971582295!2d112.79156701405527!3d-7.2758417735167455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sPoliteknik%20Elektronika%20Negeri%20Surabaya!5e1!3m2!1sen!2sbd!4v1623230227007!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <h3>Our Location:</h3>
                    <p>
                        Sepuluh Nopember Institute of Technology (ITS),<br> Kampus, Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota Surabaya, <br>Jawa Timur 60111, Indonesia
                    </p>
                    <h3>Mobile <span>+012 345 6789</span></h3>
                    <h3>E-mail <span>contact@example.com</span></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="editor-info">
                    <h2 class="section-title">Contact Person</h2>
                    <div class="editor-item">
                        <div class="editor-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/img/pens-surabaya.jpg" alt="Pens Image">
                        </div>
                        <div class="editor-text">
                            <h3>PENS KAMPUS (PUSAT)</h3>
                            <a href="mailto:humas@pens.ac.id">Email Now</a>
                        </div>
                    </div>
                    <div class="editor-item">
                        <div class="editor-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/img/pens-sumenep.jpg" alt="Pens Image">
                        </div>
                        <div class="editor-text">
                            <h3>PENS KAMPUS (SUMENEP)</h3>
                            <a href="mailto:humassumenep@pens.ac.id">Email Now</a>
                        </div>
                    </div>
                    <div class="editor-item">
                        <div class="editor-img">
                            <img src="<?= Yii::$app->request->baseUrl ?>/img/pens-lamongan.jpg" alt="Pens Image">
                        </div>
                        <div class="editor-text">
                            <h3>PENS KAMPUS (LAMONGAN)</h3>
                            <a href="mailto:humaslamongan@pens.ac.id">Email Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->