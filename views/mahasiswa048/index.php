<?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

?>
<?=
   Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-primary']);
?>

<?=
  GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'Id048',
        'Nim048',
        'Nama048',
        'Kelas048',
        'Status048',

    ['class' => ActionColumn::className()],
    
    ],       
   ]);
?>