<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class ContController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $country = new Country;

        $query = $country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

        $res= $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render("index",['countries'=>$res,'pagination'=>$pagination]);
    }
}
