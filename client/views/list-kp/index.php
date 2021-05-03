<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use kartik\grid\GridView;

$this->title = 'List Tempat KP';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=
	GridView::widget([
		'id' => 'list-KP',
		'dataProvider' => $dataProvider,
		'pjax' => true,
		'columns' => [
			[
				'class' => 'kartik\grid\SerialColumn',
				'width' => '30px',
			],
			[
				'class' => 'kartik\grid\DataColumn',
				'attribute' => 'name',
			],
			[
				'class' => 'kartik\grid\DataColumn',
				'attribute' => 'address',
			],
			[
				'class' => 'kartik\grid\DataColumn',
				'attribute' => 'description',
			],
			[
				'class' => 'kartik\grid\DataColumn',
				'attribute' => 'contact',
			],
		],
		'toolbar' => [
			[
				'content' => 
					Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                    ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                   	'{toggleData}'.
                    '{export}'
			],
		],
		'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'panel' => [
            'type' => 'primary', 
            'heading' => '<i class="glyphicon glyphicon-list"></i> List Tempat KP',
        ],
	])
?>