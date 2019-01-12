<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatosclienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datoscliens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datosclien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datosclien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcliente',
            'edad',
            'area',
            'saldo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
