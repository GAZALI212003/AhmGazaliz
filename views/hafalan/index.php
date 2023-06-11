<?php
    use app\models\Hafalan;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

    /** @var yii\web\View $this */
    /** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="hafalan-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::button('Tambah Data', ['class' => 'btn btn-primary'])?>
    </p>

<?=
  GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'nip_penasehat',
        'nim',
        'surah',
        'ayat',

        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Hafalan $model, $key, $index, $column) {
                 return Url::toRoute([$action, 'id' => $model->id]);
             }


        ],
    ],       
   ]);