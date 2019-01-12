<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datosclien */

$this->title = 'Create Datosclien';
$this->params['breadcrumbs'][] = ['label' => 'Datoscliens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datosclien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
