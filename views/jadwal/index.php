<?php
    use yii\grid\GridView;
?>

<?=
  GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'kelompok',
        'materi',
        'sesi',
        'tanggal',
        
    ]
  ])

  
?>