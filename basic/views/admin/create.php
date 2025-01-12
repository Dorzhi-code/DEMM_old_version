<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sait */

$this->title = 'Create Sait';
$this->params['breadcrumbs'][] = ['label' => 'Saits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sait-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
