<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
$this->title="Редактирование тезиса";


?>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h2 class="section-heading">Регистрация</h2>
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => '/basic/web/index.php?r=sait/edit-process']);?>
                <div class="col-md-6">
                    <?= $form->field($model, 'report_name')->textInput(['placeholder' => 'Название доклада']);?>
                    <?= $form->field($model, 'report_type')->radioList(['1' => 'Пленарный', '2' => 'Секционный','3' => 'Стендовый',]); ?>
                    <?= $form->field($model, 'report_tenor')->dropDownList([
                                '1' => 'Неклассические задачи уравнений математической физики',
                                '2' => 'Вырождающиеся уравнения и уравнения смешанного типа',
                                '3' => 'Спектральная теория дифференциальных операторов',
                                '4' => 'Динамические системы, оптимальные управления и теория дифференциальных игр',
                                '5' => 'Математическое моделирование и вычислительная математика'],
                                ['prompt' => 'Пожалуйста, укажите название секции']);
                            ?>
                            <?= $form->field($model, 'file')->fileInput(); ?>
                            <?php
                          //  echo $form->field($model, 'report_id')->hiddenInput(['value'=> $model->report_id])->label(false);
                            ?>
                            <input type="hidden" name="report_id" value="<?= $model->report_id?>">
                            <div class="form-group">
                                <?= Html::submitButton('Добавить доклад', ['class' => 'btn btn-primary']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>

