<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Edit report";


?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="section-heading">Edit report</h2>
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => '/basic/web/index.php?r=sait/edit-process']);?>
                <div class="col-md-6">
                <?= $form->field($model, 'report_name')->textInput(['placeholder' => 'Name of report'])->label('Name of report');?>
                <?= $form->field($model, 'report_type')->radioList(['1' => 'Plenary', '2' => 'Sectional','3' => 'Post',])->label('Type of report'); ?>
                <?= $form->field($model, 'report_tenor')->dropDownList([
                        '1' => 'Non-classical problems of mathematical physics',
                        '2' => 'Degenerate equations and equations of mixed type',
                        '3' => 'Spectral theory of differential operators',
                        '4' => 'Dynamical systems, optimal controls and the theory of differential games',
                        '5' => 'Mathematical modeling and computational mathematics'],
                        ['prompt' => 'Please choose section'])->label('Section direction');
                    ?>
                <?= $form->field($model, 'file')->fileInput()->label('Report file'); ?>
                            <?php
                          //  echo $form->field($model, 'report_id')->hiddenInput(['value'=> $model->report_id])->label(false);
                            ?>
                            <input type="hidden" name="report_id" value="<?= $model->report_id?>">
                            <div class="form-group">
                                <?= Html::submitButton('Edit report', ['class' => 'btn btn-primary']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>

