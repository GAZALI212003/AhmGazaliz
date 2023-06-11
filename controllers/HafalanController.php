<?php

namespace app\controllers;
use app\models\Hafalan;
use yii\data\ActiveDataProvider;

class HafalanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Hafalan::find();
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
        $Hafalan = new hafalan;
        // $Hafalan->id = '2';
        $Hafalan->nip_penasehat = '28284';
        $Hafalan->nim = '603';
        $Hafalan->surah = 'Al-Ala';
        $Hafalan->ayat = 'Surah ke 10';
        if ($Hafalan->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Hafalan->getError());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $Hafalan = hafalan::findOne($id);
        $Hafalan->nip_penasehat = '28285';
        if ($Hafalan->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Hafalan->getsError());
            die();
        }

    }

    public function actionDelete($id)
    {
        $Hafalan = hafalan::findOne($id);
        if ($Hafalan->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Hafalan->getError());
            die();
        }
    }

    public function actionView($id)
    {
        $Hafalan = Hafalan::findOne($id);
    
        if (!$Hafalan) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    
        return $this->render('hafalan', [
            'Hafalan' => $Hapalan,
        ]);
    }
    


}
