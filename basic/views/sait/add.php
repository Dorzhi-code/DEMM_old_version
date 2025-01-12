<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Добавление доклада";

if(!$flag){
?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="section-heading">Добавление доклада</h2>
            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
            ]);?>
            <div class="col-md-6">
                <?= $form->field($modelReport, 'report_name')->textInput(['placeholder' => 'Название доклада']);?>
                <?= $form->field($modelReport, 'report_type')->radioList(['1' => 'Пленарный', '2' => 'Секционный','3' => 'Стендовый',]); ?>
                <?= $form->field($modelReport, 'report_tenor')->dropDownList([
                    '1' => 'Неклассические задачи математической физики',
                    '2' => 'Вырождающиеся уравнения и уравнения смешанного типа',
                    '3' => 'Спектральная теория дифференциальных операторов',
                    '4' => 'Динамические системы, оптимальные управления и теория дифференциальных игр',
                    '5' => 'Математическое моделирование и вычислительная математика'],
                    ['prompt' => 'Пожалуйста, укажите название секции']);
                ?>
                <?= $form->field($modelReport, 'file')->fileInput(); ?>
                <div class="form-group">
                    <?= Html::submitButton('Добавить доклад', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
    <?php
}
else{
    echo "<h4>Вы успешно добавили новый доклад!</h4>";
    echo '<div style="width: 400px; display: flex; flex-direction: row; justify-content: space-between;">
            <p><a href="/basic/web/index.php?r=sait/profile" style="font-size: 16px"> Вернуться к профилю </a></p>
            <p><a href="/basic/web/" style="font-size: 16px"> Вернуться на главную </a></p>
          </div>';
}
?>
