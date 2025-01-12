<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Saits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sait-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sait', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
