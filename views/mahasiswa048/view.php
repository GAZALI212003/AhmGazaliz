<?php
use yii\widgets\DetailView;
?>

<?= 
   DetailView::widget([
    'model'  => $mahasiswa048,
    'attributes'  => [
        'Id048',
        'Nim048',
        'Nama048',
        'Kelas048',
        'Status048',
        
    ]
   ])

?>