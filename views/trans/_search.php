<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'strid') ?>

    <?= $form->field($model, 'str_ru') ?>

    <?= $form->field($model, 'str_en') ?>

    <?= $form->field($model, 'str_de') ?>

    <?= $form->field($model, 'str_tr') ?>

    <?php // echo $form->field($model, 'str_pl') ?>

    <?php // echo $form->field($model, 'str_pt') ?>

    <?php // echo $form->field($model, 'str_es') ?>

    <?php // echo $form->field($model, 'src_file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
