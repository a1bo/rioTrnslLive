<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TransInfoDe */

$this->title = 'Update Trans Info De: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Trans Info Des', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trans-info-de-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
