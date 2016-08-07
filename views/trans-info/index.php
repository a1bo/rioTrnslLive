<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-info-de-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

	<?= Html::a('En', ['trans-info/index', 'lng' => 'En'], ['class' => 'profile-link'])?> 
	<?= Html::a('De', ['trans-info/index', 'lng' => 'De'], ['class' => 'profile-link']) ?>
	<?= Html::a('Pl', ['trans-info/index', 'lng' => 'Pl'], ['class' => 'profile-link']) ?>
	<?= Html::a('Tr', ['trans-info/index', 'lng' => 'Tr'], ['class' => 'profile-link']) ?>
    <p>
        <?= Html::a('Create Trans Info De', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


	    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => '1tem'],
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return  Html::tag('h2',Html::a(Html::encode($model->title), ['view', 'id' => $model->id])).Html::tag('div', Html::decode($model->body));
        },
    ]) ?>


</div>
