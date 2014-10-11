<?php

namespace app\modules\tcadmin\controllers;

//use yii\web\Controller;
use yii\rest\ActiveController;

class GoodsController extends ActiveController
{
    public $modelClass = 'app\models\tcadmin\Goods';
    public function actionIndex()
    {
        return $this->render('index');
    }
}
