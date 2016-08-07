<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trans2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Trans2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'strid',
            'str_ru',
            'str_en',
            'str_de',
            'str_tr',
            // 'str_pl',
            // 'str_pt',
            // 'str_es',
            // 'src_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
