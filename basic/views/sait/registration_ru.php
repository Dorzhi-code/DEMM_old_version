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
            <div class="container">
                 <h2 class="section-heading">Регистрация</h2>
                <p class="text-left"><i>Заполните <b>ВСЕ</b> поля формы и нажмите кнопку "Зарегистрироваться".</i></p>
                <?php $form = ActiveForm::begin([
                    'options' => ['enctype' => 'multipart/form-data']
                ]);?>
                <div class="col-md-6">
                    <?= $form->field($model, 'sait_email')->textInput(['placeholder' => 'email@example.com']) ?>
                    <?= $form->field($model, 'sait_surname')->textInput(['placeholder' => 'Иванов']) ?>
                    <?= $form->field($model, 'sait_name')->textInput(['placeholder' => 'Иван']) ?>
                    <?= $form->field($model, 'sait_patronymic')->textInput(['placeholder' => 'Иванович']) ?>
                    <?= $form->field($model, 'sait_surname_latn')->textInput(['placeholder' => 'Ivanov']) ?>
                    <?= $form->field($model, 'sait_name_latn')->textInput(['placeholder' => 'Ivan']) ?>
                    <?= $form->field($model, 'sait_degree')->dropDownList([
                        '1' => 'Доктор наук',
                        '2' => 'Кандидат наук',
                        '3' => 'Нет'], 
                        ['prompt' => 'Пожалуйста, укажите ученую степень']); 
                    ?>
                    <?= $form->field($model, 'sait_rank')->dropDownList([
                        '1' => 'Профессор',
                        '2' => 'Доцент',
                        '3' => 'Академик',
                        '4' => 'Нет'], 
                        ['prompt' => 'Пожалуйста, укажите ученое звание']); 
                    ?>
                    <?= $form->field($model, 'sait_work')->textInput(['placeholder' => 'Полное название организации']) ?>
                    <?= $form->field($model, 'sait_position')->textInput(['placeholder' => 'Профессор, Доцент, Ст. преп., Преп., Ассистент']) ?>
                    <?= $form->field($model, 'sait_address')->textInput(['placeholder' => 'Полный адрес организации']) ?>
                    <?= $form->field($model, 'sait_tel')->textInput(['placeholder' => '555-555, +79999999999']) ?>
                    <?= $form->field($model, 'sait_form')->radioList(['1' => 'Очная', '0' => 'Дистанционная']); ?>
                    <?= $form->field($modelReport, 'report_tenor')->dropDownList([
                        '1' => 'Неклассические задачи математической физики',
                        '2' => 'Вырождающиеся уравнения и уравнения смешанного типа',
                        '3' => 'Спектральная теория дифференциальных операторов',
                        '4' => 'Динамические системы, оптимальные управления и теория дифференциальных игр',
                        '5' => 'Математическое моделирование и вычислительная математика'],
                        ['prompt' => 'Пожалуйста, укажите название секции']);
                    ?>
                    <?= $form->field($modelReport, 'report_name')->textInput(['placeholder' => 'Название доклада']);?>
                    <?= $form->field($modelReport, 'report_type')->radioList(['1' => 'Пленарный', '2' => 'Секционный','3' => 'Стендовый',]); ?>
                    <?= $form->field($model, 'file')->fileInput(); ?>
                    <p class="text-center text-danger">Следующие поля заполняются для очного участия </p>
                    <?= $form->field($model, 'sait_room_uu')->radioList(['1' => 'Да', '0' => 'Нет']); ?>
                    <?= $form->field($model, 'sait_room_baikal')->radioList(['1' => 'Да', '0' => 'Нет']); ?>
                    <?= $form->field($model, 'sait_visa')->radioList(['1' => 'Да', '0' => 'Нет']); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div> 
		<!--
                <h3 class="text-center" style="text-transform: none">
                    К сожалению, регистрация закрыта.<br> По всем вопросам просьба обращаться на почтовый адрес:<br>
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
        <h4 class="text-center text-success"> Вы успешно зарегистрированы!</h2>
        <h4 class="text-center"> Ваш пароль: <span style="color: #000; text-transform: none"><?= $pass;?></span></h4>
        <h4 class="text-center"> Данный пароль был выслан на <span style="color: #000; text-transform: none"><?= $model->sait_email ?></span></h4>
<?php
    }
?>