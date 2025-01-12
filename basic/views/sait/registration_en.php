<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Registration";

    if(!$flag){
?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="container">
                <h2 class="section-heading">Registration</h2>
                <p class="text-left"><i>Fill <b>all</b> fields and click "Register"</i>.</p>
                <?php $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data']
                ]);?>
                <div class="col-md-6">
                    <?= $form->field($model, 'sait_email')->textInput(['placeholder' => 'email@example.com'])->label('E-mail') ?>
                    <?= $form->field($model, 'sait_surname')->textInput(['placeholder' => 'Ivanov'])->label('Surname') ?>
                    <?= $form->field($model, 'sait_name')->textInput(['placeholder' => 'Ivan'])->label('Name') ?>
                    <?= $form->field($model, 'sait_patronymic')->textInput(['placeholder' => 'Ivanovich'])->label('Second name (if available)') ?>
                    <?= $form->field($model, 'sait_surname_latn')->textInput(['placeholder' => 'Ivanov'])->label('Last name (in latin letter)') ?>
                    <?= $form->field($model, 'sait_name_latn')->textInput(['placeholder' => 'Ivan'])->label('First name(in latin letter)') ?>
                    <?= $form->field($model, 'sait_degree')->dropDownList([
                        '1' => 'Doctor of of Science',
                        '2' => 'Ph.D. of Science',
                        '3' => 'No'], 
                        ['prompt' => 'Please choose your academic degree'])->label('Academic degree'); 
                    ?>
                    <?= $form->field($model, 'sait_rank')->dropDownList([
                        '1' => 'Professor',
                        '2' => 'Associate Professor',
                        '3' => 'Academic',
                        '4' => 'No'], 
                        ['prompt' => 'Please choose your academic rank'])->label('Academic rank'); 
                    ?>
                    <?= $form->field($model, 'sait_work')->textInput(['placeholder' => 'Full name of organization'])->label('Organization name') ?>
                    <?= $form->field($model, 'sait_position')->textInput(['placeholder' => 'Professor, Associate Professor, Senior Lecturer, Lecturer, Assistant'])->label('Position') ?>
                    <?= $form->field($model, 'sait_address')->textInput(['placeholder' => 'Full address of organization'])->label('Organization address') ?>
                    <?= $form->field($model, 'sait_tel')->textInput(['placeholder' => '555-555, +79999999999'])->label('Contact telephone') ?>
                    <?= $form->field($model, 'sait_form')->radioList(['1' => 'In-person form', '0' => 'Online form'])->label('Participation form'); ?>
                    <?= $form->field($modelReport, 'report_tenor')->dropDownList([
                        '1' => 'Non-classical problems of mathematical physics',
                        '2' => 'Degenerate equations and equations of mixed type',
                        '3' => 'Spectral theory of differential operators',
                        '4' => 'Dynamical systems, optimal controls and the theory of differential games',
                        '5' => 'Mathematical modeling and computational mathematics'],
                        ['prompt' => 'Please choose section'])->label('Section direction');
                    ?>
                    <?= $form->field($modelReport, 'report_name')->textInput(['placeholder' => 'Name of report'])->label('Name of report');?>
                    <?= $form->field($modelReport, 'report_type')->radioList(['1' => 'Plenary', '2' => 'Sectional','3' => 'Post',])->label('Type of report'); ?>
                    <?= $form->field($model, 'file')->fileInput()->label('Report file'); ?>
                    <p class="text-center text-danger">The following fields are filled in for in-person participation </p>
                    <?= $form->field($model, 'sait_room_uu')->radioList(['1' => 'Yes', '0' => 'No'])->label('Do you need for a room in Ulan-Ude?'); ?>
                    <?= $form->field($model, 'sait_room_baikal')->radioList(['1' => 'Yes', '0' => 'No'])->label('Do you need for a room on Lake Baikal?'); ?>
                    <?= $form->field($model, 'sait_visa')->radioList(['1' => 'Yes', '0' => 'No'])->label('Do you need a visa?'); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
<!-- 
                <h3 class="text-center" style="text-transform: none">
                Sorry, registration is closed.<br> For all questions, please contact the postal address: <br>
                    <?= Html::a('pmduconf@yandex.ru', null, ['href' => 'mailto:pmduconf@yandex.ru'])?>
                </h3>
-->
            </div>
        </div>
    </div>
</div>
<?php
    }
    else{
?>
        <h4 class="text-center text-success"> You have successfully registered!</h2>
        <h4 class="text-center text-success"> Your password: <span style="color: #000; text-transform: none"><?= $pass;?></span></h4>
        <h4 class="text-center text-warning">This password has been sent to <span style="color: #000; text-transform: none"><?= $model->sait_email ?></span></h4>
<?php
    }
?>