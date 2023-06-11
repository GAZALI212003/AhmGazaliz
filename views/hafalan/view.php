<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\YourModel */

$this->user = $user->id;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user">

    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'dataprovide' => $dataProvider,
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'username',
        'password',
        'name',
        'image',
        'tgl_lahir',
            // tambahkan atribut lainnya sesuai kebutuhan
        ]

    );
?>

</div>