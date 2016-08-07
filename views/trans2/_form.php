<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trans2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'strid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_de')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_tr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_pl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_es')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'src_file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
