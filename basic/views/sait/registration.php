<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Регистрация";

    if(!$flag){
?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="section-heading">Регистрация</h2>
            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
            ]);?>
            <div class="col-md-6">
                <?= $form->field($model, 'sait_email')->textInput(['placeholder' => 'Введите свой email']) ?>
                <?= $form->field($model, 'sait_surname')->textInput(['placeholder' => 'Фамилия']) ?>
                <?= $form->field($model, 'sait_name')->textInput(['placeholder' => 'Имя']) ?>
                <?= $form->field($model, 'sait_patronymic')->textInput(['placeholder' => 'Отчество']) ?>
                <?= $form->field($model, 'sait_surname_latn')->textInput(['placeholder' => 'Фамилия (латинскими буквами)']) ?>
                <?= $form->field($model, 'sait_name_latn')->textInput(['placeholder' => 'Имя (латинскими буквами)']) ?>
                <?= $form->field($model, 'sait_work')->textInput(['placeholder' => 'Место работы (полное название организации)']) ?>
                <?= $form->field($model, 'sait_position')->textInput(['placeholder' => 'Должность']) ?>
                <?= $form->field($model, 'sait_status')->textInput(['placeholder' => 'Студент, аспирант, кандидат наук, доктор и т.п.']) ?>
                <?= $form->field($modelReport, 'report_check')->checkbox(['label' => 'Планируете ли выступить с докладом?']);?>
                <?= $form->field($modelReport, 'report_name')->textInput(['placeholder' => 'Название доклада']);?>
                <?= $form->field($modelReport, 'report_type')->radioList(['1' => 'Секционный', '2' => 'Стендовый',]); ?>
                <?= $form->field($modelReport, 'report_tenor')->dropDownList(['1' => 'Качественная теория обыкновенных дифференциальных уравнений',
                    '2' => 'Численные методы решения обыкновенных дифференциальных уравнений',
                    '3' => 'Дифференциально-алгебраические уравнения: качественная теория и методы решения',
                    '4' => 'Интегральные и интегро-алгебраические уравнения',
                    '5' => 'Задачи управления динамическими системами',
                    '6' => 'Интегральные и дифференциальные уравнения в прикладных задачах',
                    '7' => 'Вопросы подготовки профильных специалистов'],
                    ['prompt' => 'Пожалуйста, укажите направление']);?>
                <?= $form->field($model, 'file')->fileInput(); ?>
                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
            <hr>
            <i>Заполните <b>все</b> поля формы и нажмите кнопку "Зарегистрироваться".</i>
            </div>
        </div>
    </div>
</div>
<?php
    }
    else{
        echo "Вы успешно зарегистрированы, ваш пароль: " . $pass;

    }
?>