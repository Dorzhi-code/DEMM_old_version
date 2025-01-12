<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */

$this->title = 'Update Sait: ' . $model->sait_id;
$this->params['breadcrumbs'][] = ['label' => 'Saits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sait_id, 'url' => ['view', 'id' => $model->sait_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sait-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
