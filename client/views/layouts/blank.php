<?php

/* @var $this \yii\web\View */
/* @var $content string */

use client\assets\ClientAsset;
use yii\helpers\Html;

ClientAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode('SIKAP ADMIN'.' - '.$this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="blank">
<?php $this->beginBody() ?>

<div class="container">

    <div class="wrap">
        <?= $content ?>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
