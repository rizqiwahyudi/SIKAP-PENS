<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<img alt="404" src="https://illustatus.herokuapp.com/?title=Oops, Sorry <?= nl2br(Html::encode($message)) ?>&fill=%234f86ed"/>
