<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SaitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sait-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sait_id') ?>

    <?= $form->field($model, 'sait_surname') ?>

    <?= $form->field($model, 'sait_name') ?>

    <?= $form->field($model, 'sait_patronymic') ?>

    <?= $form->field($model, 'sait_surname_latn') ?>

    <?php // echo $form->field($model, 'sait_name_latn') ?>

    <?php // echo $form->field($model, 'sait_work') ?>

    <?php // echo $form->field($model, 'sait_position') ?>

    <?php // echo $form->field($model, 'sait_status') ?>

    <?php // echo $form->field($model, 'sait_lecture') ?>

    <?php // echo $form->field($model, 'sait_lecture_type') ?>

    <?php // echo $form->field($model, 'sait_tenor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
