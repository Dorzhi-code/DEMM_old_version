<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
?>
<?php
if(!$flag){
?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="section-heading">Редактирование</h2>
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-6">
                <?= $form->field($model, 'sait_surname')->textInput(['placeholder' => 'Иванов', 'value' => $model->sait_surname]) ?>
                <?= $form->field($model, 'sait_name')->textInput(['placeholder' => 'Иван', 'value' => $model->sait_name]) ?>
                <?= $form->field($model, 'sait_patronymic')->textInput(['placeholder' => 'Иванович', 'value' => $model->sait_patronymic]) ?>
                <?= $form->field($model, 'sait_surname_latn')->textInput(['placeholder' => 'Ivanov', 'value' => $model->sait_surname_latn]) ?>
                <?= $form->field($model, 'sait_name_latn')->textInput(['placeholder' => 'Ivan', 'value' => $model->sait_name_latn]) ?>
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
                <?= $form->field($model, 'sait_work')->textInput(['placeholder' => 'Полное название организации', 'value' => $model->sait_work]) ?>
                <?= $form->field($model, 'sait_position')->textInput(['placeholder' => 'Профессор, доцент, ст. преп., преп., ассистент', 'value' => $model->sait_position]) ?>
                <?= $form->field($model, 'sait_address')->textInput(['placeholder' => 'Полный адрес организации', 'value' => $model->sait_address]) ?>
                <?= $form->field($model, 'sait_tel')->textInput(['placeholder' => '555-555, +79999999999', 'value' => $model->sait_tel]) ?>
                <?= $form->field($model, 'sait_form')->radioList(['1' => 'Очная', '0' => 'Дистанционная'], ['value' => $model->sait_form]) ?>

                <?= $form->field($model, 'sait_room_uu')->radioList([1 => 'Да', 0 => 'Нет']) ?>
                <?= $form->field($model, 'sait_room_baikal')->radioList([1 => 'Да', 0 => 'Нет']) ?>
                <?= $form->field($model, 'sait_visa')->radioList([1 => 'Да', 0 => 'Нет'])->label('Необходимость в визе') ?>
                
                
                <div class="form-group">
                    <?= Html::submitButton('Принять', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<?php
}
else{

    echo "<h4>Вы успешно изменили свои данные!</h4>";
    echo '<div style="width: 400px; display: flex; flex-direction: row; justify-content: space-between;">
            <p><a href="/basic/web/index.php?r=sait/profile" style="font-size: 16px"> Вернуться к профилю </a></p>
            <p><a href="/basic/web/" style="font-size: 16px"> Вернуться на главную </a></p>
          </div>';
    }
?>