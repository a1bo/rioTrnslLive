<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trans2 */

$this->title = $model->strid;
$this->params['breadcrumbs'][] = ['label' => 'Trans2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->strid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->strid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'strid',
            'str_ru',
            'str_en',
            'str_de',
            'str_tr',
            'str_pl',
            'str_pt',
            'str_es',
            'src_file',
        ],
    ]) ?>

</div>
