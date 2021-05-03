<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ListKp */
?>
<div class="list-kp-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'address',
            'description',
            'contact',
        ],
    ]) ?>

</div>
