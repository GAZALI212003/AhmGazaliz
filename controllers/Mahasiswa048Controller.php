<?php

namespace app\controllers;
use app\models\Mahasiswa048;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa048Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa048::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        //memanggil view 'index'
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa048 = new Mahasiswa048;
        // $Hafalan->id = '1';
        $mahasiswa048->Nim048 = '60200121048';
        $mahasiswa048->Nama048= 'BAGAS';
        $mahasiswa048->Kelas048= 'D';
        $mahasiswa048->Status048 = 'baru';
        if ($mahasiswa048->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa048->getError());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa048 = Mahasiswa048::findOne(['Id048' => $id]);
        if ($mahasiswa048 !== null) {
            $mahasiswa048->Kelas048 = 'B';
            $mahasiswa048->Status048 = 'Update';
            $mahasiswa048->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate'); 
        }

        return $this->redirect(['index']);

    }

    public function actionDelete($id)
    {
        $mahasiswa048 = Mahasiswa048::findOne($id);
        if ($mahasiswa048->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa048->getError());
            die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa048 = Mahasiswa048::findOne(['Id048' => $id]);
        if ($mahasiswa048->delete()) 
        return $this->render('view', ['mahasiswa048'=>$mahasiswa048]);
        
    }
}
