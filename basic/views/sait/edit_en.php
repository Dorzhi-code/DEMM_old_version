<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
?>
<?php $this->title="Edit"; ?>
<?php
if(!$flag){
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <h2 class="section-heading">Edit</h2>
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-6">
                    <?= $form->field($model, 'sait_surname')->textInput(['placeholder' => 'Full name of organization',  'value' => $model->sait_surname])->label('Organization name') ?>
                    <?= $form->field($model, 'sait_name')->textInput(['placeholder' => 'Ivan', 'value' => $model->sait_name])->label('Name') ?>
                    <?= $form->field($model, 'sait_patronymic')->textInput(['placeholder' => 'Ivanovich', 'value' => $model->sait_patronymic])->label('Second name (if available)') ?>
                    <?= $form->field($model, 'sait_surname_latn')->textInput(['placeholder' => 'Ivanov', 'value' => $model->sait_surname_latn])->label('Last name (in latin letter)') ?>
                    <?= $form->field($model, 'sait_name_latn')->textInput(['placeholder' => 'Ivan', 'value' => $model->sait_name_latn])->label('First name(in latin letter)') ?>
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
                    <?= $form->field($model, 'sait_work')->textInput(['placeholder' => 'Full name of organization', 'value' => $model->sait_work])->label('Organization name') ?>
                    <?= $form->field($model, 'sait_position')->textInput(['placeholder' => 'Professor, Associate Professor, Senior Lecturer, Lecturer, Assistant', 'value' => $model->sait_position])->label('Position') ?>
                    <?= $form->field($model, 'sait_address')->textInput(['placeholder' => 'Full address of organization', 'value' => $model->sait_address])->label('Organization address') ?>
                    <?= $form->field($model, 'sait_tel')->textInput(['placeholder' => '555-555, +79999999999', 'value' => $model->sait_tel])->label('Contact telephone') ?>
                    <?= $form->field($model, 'sait_form')->radioList(['1' => 'Full-time form', '0' => 'Remote form'], ['value' => $model->sait_form])->label('Participation form'); ?>
    
                    <?= $form->field($model, 'sait_room_uu')->radioList(['1' => 'Yes', '0' => 'No'], ['value' => $model->sait_room_uu])->label('Do you need for a room in Ulan-Ude?'); ?>
                    <?= $form->field($model, 'sait_room_baikal')->radioList(['1' => 'Yes', '0' => 'No'], ['value' => $model->sait_room_baikal])->label('Do you need for a room on Lake Baikal?'); ?>
                    <?= $form->field($model, 'sait_visa')->radioList(['1' => 'Yes', '0' => 'No'], ['value' => $model->sait_visa])->label('Do you need a visa?'); ?>
                    
                    
                    <div class="form-group">
                        <?= Html::submitButton('Accept', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    else{
        
        echo "<h4>You have successfully changed your data!</h4>";
        echo '<div style="width: 200px; display: flex; flex-direction: row; justify-content: space-between;">
                <p><a href="/basic/web/index.php?r=sait/profile" style="font-size: 16px"> Return to profile </a></p>
                <p><a href="/basic/web/" style="font-size: 16px"> Home </a></p>
              </div>';
        }
    ?>