<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trans2 */

$this->title = 'Update Trans2: ' . ' ' . $model->strid;
$this->params['breadcrumbs'][] = ['label' => 'Trans2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->strid, 'url' => ['view', 'id' => $model->strid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trans2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
