<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'str_'.\Yii::$app->user->identity->dst)->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
