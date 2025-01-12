<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<h1>Подтверждение</h1>
<ul>
    <?php $form = ActiveForm::begin(); ?>
    <?php foreach ($members as $member): ?>
        <li>
            <?= Html::encode("{$member->sait_id} {$member->sait_surname} 
            {$member->sait_name} {$member->sait_patronymic} 
            {$member->sait_surname_latn} {$member->sait_name_latn} 
            {$member->sait_work} {$member->sait_position} {$member->sait_status} 
            {$member->sait_lecture} {$member->sait_lecture_type} {$member->sait_tenor} 
            {$member->sait_request} {$member->sait_participation}") ?>
            <?= $form->field($model, 'sait_request')->checkbox(['label' => 'Подтвердить заявку']); ?>
            <?= $form->field($model, 'sait_participation')->checkbox(['label' => 'Подтвердить участие']); ?>
            <div>
                <button class="btn btn-success" type="submit">Подтвердить</button>
            </div>
        </li>
    <?php endforeach; ?>
    <?php ActiveForm::end(); ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

