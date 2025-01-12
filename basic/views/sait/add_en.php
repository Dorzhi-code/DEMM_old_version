<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Adding a report";

if(!$flag){
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h2 class="section-heading">Adding a report</h2>
                <?php $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data']
                ]);?>
                <div class="col-md-6">
                <?= $form->field($modelReport, 'report_name')->textInput(['placeholder' => 'Name of report'])->label('Name of report');?>
                <?= $form->field($modelReport, 'report_type')->radioList(['1' => 'Plenary', '2' => 'Sectional','3' => 'Post',])->label('Type of report'); ?>
                <?= $form->field($modelReport, 'report_tenor')->dropDownList([
                        '1' => 'Non-classical problems of mathematical physics',
                        '2' => 'Degenerate equations and equations of mixed type',
                        '3' => 'Spectral theory of differential operators',
                        '4' => 'Dynamical systems, optimal controls and the theory of differential games',
                        '5' => 'Mathematical modeling and computational mathematics'],
                        ['prompt' => 'Please choose section'])->label('Section direction');
                    ?>
                    <?= $form->field($modelReport, 'file')->fileInput()->label('Report file'); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Add report', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
else{
    echo "<h4>You have successfully added a new report!</h4>";
        echo '<div style="width: 200px; display: flex; flex-direction: row; justify-content: space-between;">
                <p><a href="/basic/web/index.php?r=sait/profile" style="font-size: 16px"> Return to profile </a></p>
                <p><a href="/basic/web/" style="font-size: 16px"> Home </a></p>
              </div>';

}
?>
