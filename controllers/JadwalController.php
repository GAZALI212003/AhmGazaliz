<?php

namespace app\controllers;
use app\models\Jadwal;
use yii\data\ActiveDataProvider;

class JadwalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Jadwal::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        //memanggil view 'index'
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }
}
