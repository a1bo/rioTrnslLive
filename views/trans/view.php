<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trans */

$this->title = $model->strid;
$this->params['breadcrumbs'][] = ['label' => 'Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->strid], ['class' => 'btn btn-primary']) ?>
      
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			'str_'.\Yii::$app->user->identity->src,
			'str_'.\Yii::$app->user->identity->dst,
						
            //'strid',
            // 'str_ru',
            //'str_en',
            //'str_de',
            //'str_tr',
            // 'str_pl',
            // 'str_pt',
            // 'str_es',
            'src_file',
        ],
    ]) ?>

</div>
