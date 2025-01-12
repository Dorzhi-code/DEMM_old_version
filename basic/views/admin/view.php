<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */

$this->title = $model->sait_id;
$this->params['breadcrumbs'][] = ['label' => 'Saits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sait-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sait_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sait_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sait_id',
            'sait_surname',
            'sait_name',
            'sait_patronymic',
            'sait_surname_latn',
            'sait_name_latn',
            'sait_work',
            'sait_position',
            'sait_status',
            'sait_lecture',
            'sait_lecture_type',
            'sait_tenor',
        ],
    ]) ?>

</div>
