<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datosclien */

$this->title = 'Update Datosclien: ' . $model->idcliente;
$this->params['breadcrumbs'][] = ['label' => 'Datoscliens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcliente, 'url' => ['view', 'id' => $model->idcliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datosclien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
