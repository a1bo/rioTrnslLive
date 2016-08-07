<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditorInline;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>
	<h2>
	<?php CKEditorInline::begin(['preset' => 'basic']);?>
    <?= $model->title ?>
	<?php CKEditorInline::end();?>
	</h2>
	<?php CKEditorInline::begin(['preset' => 'full']);?>
    <?= $model->body ?>
<?php CKEditorInline::end();?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
