<?php

/**
 * @var yii\widgets\ActiveForm    $form
 * @var dektrium\user\models\User $user
 */

?>

<?= $form->field($user, 'username')->textInput(['maxlength' => 25]) ?>
<?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>
<?= $form->field($user, 'password')->passwordInput() ?>
<?= $form->field($user, 'src')->dropDownList(['English' => 'en', 'German' => 'de', 'Turkish' => 'tr', 'Polish'=>'pl', 'Portuguese'=> 'pt', 'Spanish'=>'es', 'Russian'=>'ru']) ?>
<?= $form->field($user, 'dst')->dropDownList(['English' => 'en', 'German' => 'de', 'Turkish' => 'tr', 'Polish'=>'pl', 'Portuguese'=> 'pt', 'Spanish'=>'es', 'Russian'=>'ru']) ?>