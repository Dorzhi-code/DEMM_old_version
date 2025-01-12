<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sait-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sait_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_surname_latn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_name_latn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sait_lecture')->textInput() ?>

    <?= $form->field($model, 'sait_lecture_type')->textInput() ?>

    <?= $form->field($model, 'sait_tenor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
