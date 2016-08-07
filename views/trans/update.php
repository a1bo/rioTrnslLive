<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\Trans */

$this->title = 'Update Trans: ' . ' ' . $model->strid;
$this->params['breadcrumbs'][] = ['label' => 'Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->strid, 'url' => ['view', 'id' => $model->strid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trans-update">
  <?= Yii::$app->session->getFlash('error'); ?>
    <h1><?= Html::encode($this->title) ?></h1>
		<?php $usr=\Yii::$app->user->identity ?>

		<?php $yt=\Yii::$app->translate->translate($usr->src, $usr->dst, $model['str_'.$usr->src] )['text'][0]; ?>

		<?= $model->setAttributes(['yandex' => $yt], 'safe') ?>
	    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			'str_'.\Yii::$app->user->identity->src, 
			 ['label'  => 'Yandex','value'  => $yt ],
        /*     'strid',
            'str_ru',
            'str_en',
            'str_de',
            'str_tr',
            'str_pl',
            'str_pt',
            'str_es', */
            'src_file',
        ],
    ]) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
