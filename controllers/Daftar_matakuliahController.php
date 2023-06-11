<?php

namespace app\controllers;
use app\models\Matakuliah;
use yii\data\ActiveDataProvider;
class Daftar_matakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Matakuliah::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        //memanggil view 'index'
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionRiwayatKrs()
    {
        return $this->render('riwayat-krs');
    }
}
