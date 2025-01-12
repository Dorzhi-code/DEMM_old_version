<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
?>
<?php $this->title="Личный кабинет"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <h1 class="section-heading">Личная информация</h1>
            <p class="text-left"><b>Email: </b> <?php echo $user->sait_email ?> </p>
            <p class="text-left"><b>Фамилия: </b> <?php echo $user->sait_surname ?></p>
            <p class="text-left"><b>Имя: </b> <?php echo $user->sait_name ?></p>
            <p class="text-left"><b>Отчество (при наличии): </b> <?php echo $user->sait_patronymic  ?></p>
            <p class="text-left"><b>Фамилия (латинскими буквами): </b> <?php echo $user->sait_surname_latn ?></p>
            <p class="text-left"><b>Имя (латинскими буквами): </b> <?php echo $user->sait_name_latn  ?></p>
            <p class="text-left"><b>Ученая степень: </b> <?php switch($user->sait_degree) {
                case 1:
                    echo 'Доктор наук';
                    break;
                case 2:
                    echo 'Кандидат наук';
                    break;
                case 3:
                    echo 'Нет';
                    break;
            }   
            ?></p>
            <p class="text-left"><b>Ученое звание: </b> <?php switch($user->sait_rank) {
                case 1:
                    echo 'Профессор';
                    break;
                case 2:
                    echo 'Доцент';
                    break;
                case 3:
                    echo 'Академик';
                    break;
                case 4:
                    echo 'Нет';
                    break;
            }   
            ?></p>
            <p class="text-left"><b>Название организации: </b> <?php echo $user->sait_work  ?></p>
            <p class="text-left"><b>Должность: </b> <?php echo $user->sait_position  ?></p>
            <p class="text-left"><b>Адрес места работы: </b> <?php echo $user->sait_address  ?></p>
            <p class="text-left"><b>Контактный телефон: </b> <?php echo $user->sait_tel  ?></p>
            <p class="text-left"><b>Форма участия: </b> <?php if ($user->sait_form == 1) {echo 'Очная';} else {echo 'Дистанционная';} ?></p>
            <p class="text-left"><b>Необходимость в номере в г. Улан-Удэ: </b> <?php if ($user->sait_room_uu == 1) {echo 'Да';} else {echo 'Нет';}  ?></p>
            <p class="text-left"><b>Необходимость в номере на оз. Байкал: </b> <?php if ($user->sait_room_baikal == 1) {echo 'Да';} else {echo 'Нет';} ?></p>
            <p class="text-left"><b>Необходимость в визе: </b> <?php if ($user->sait_visa == 1) {echo 'Да';} else {echo 'Нет';} ?></p>
            <p class="text-left">
                <b>Названия докладов (нажмите на имя доклада для редактирования): </b><br>
                <?php foreach ($userReport as $userReports): ?>
                <a href="/basic/web/index.php?r=sait/edit-report&report_id=<?= $userReports->report_id?>"><?php echo $userReports->report_name ?></a>
                (
                    <?php
                        if($userReports->report_file_path!="") {
                            echo "Доклад загружен";
                        }  
                        else{
                            echo "Доклад НЕ загружен";
                        }
                    ?>

                )    
            </p>
            <?php endforeach; ?>
            
            <div class="form-group">
                <a href="index.php?r=sait/edit" class="btn btn-primary">Редактировать</a>
                <a href="index.php?r=sait/add" class="btn btn-primary">Добавить доклад</a>
                <a href="index.php?r=sait/logout" class="btn btn-primary">Выход</a>
            </div>
        </div>
    </div>
</div>