<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TransInfoDe */

$this->title = 'Create Trans Info De';
$this->params['breadcrumbs'][] = ['label' => 'Trans Info Des', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-info-de-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
