<?php

namespace client\controllers;

use common\models\ListKp;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use \yii\web\Response;
use yii\helpers\Html;

class ListKpController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$dataProvider = new ActiveDataProvider([
    		'query' => ListKp::find(),
    	]);
        return $this->render('index', compact('dataProvider'));
    }

}
