<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Country;

class ConController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $country = new Country;

        $res = $country::find()->all();
        var_dump($res);
    }
}
