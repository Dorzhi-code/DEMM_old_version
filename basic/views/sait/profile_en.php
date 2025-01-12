<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sait */
/* @var $form ActiveForm */
?>
<?php $this->title="Profile"; ?>
<div class="row">
    <div class="col-lg-12">
    <div class="row">
            <h1 class="section-heading">Personal information</h1>
            <p class="text-left"><b>Email: </b> <?php echo $user->sait_email ?> </p>
            <p class="text-left"><b>Last name: </b> <?php echo $user->sait_surname ?></p>
            <p class="text-left"><b>First name: </b> <?php echo $user->sait_name ?></p>
            <p class="text-left"><b>Patronymic (if available): </b> <?php echo $user->sait_patronymic  ?></p>
            <p class="text-left"><b>Last name (in latin letter): </b> <?php echo $user->sait_surname_latn ?></p>
            <p class="text-left"><b>First name (in latin letter): </b> <?php echo $user->sait_name_latn  ?></p>
            <p class="text-left"><b>Academic degree: </b> <?php switch($user->sait_degree) {
                case 1:
                    echo 'Doctor of Science';
                    break;
                case 2:
                    echo 'Ph.D. of Science';
                    break;
                case 3:
                    echo 'No';
                    break;
            }   
            ?></p>
            <p class="text-left"><b>Academic rank: </b> <?php switch($user->sait_rank) {
                case 1:
                    echo 'Professor';
                    break;
                case 2:
                    echo 'Associate Professor';
                    break;
                case 3:
                    echo 'Academic';
                    break;
                case 4:
                    echo 'No';
                    break;
            }   
            ?></p>
            <p class="text-left"><b>Organization name: </b> <?php echo $user->sait_work  ?></p>
            <p class="text-left"><b>Position: </b> <?php echo $user->sait_position  ?></p>
            <p class="text-left"><b>Адрес места работы: </b> <?php echo $user->sait_address  ?></p>
            <p class="text-left"><b>Place of work address: </b> <?php echo $user->sait_tel  ?></p>
            <p class="text-left"><b>Participation form: </b> <?php if ($user->sait_form == 1) {echo 'In-person';} else {echo 'Online';} ?></p>
            <p class="text-left"><b>Do you need for a room in Ulan-Ude?: </b> <?php if ($user->sait_room_uu == 1) {echo 'Yes';} else {echo 'No';}  ?></p>
            <p class="text-left"><b>Do you need for a room on Lake Baikal?: </b> <?php if ($user->sait_room_baikal == 1) {echo 'Yes';} else {echo 'No';} ?></p>
            <p class="text-left"><b>Do you need a visa?: </b> <?php if ($user->sait_visa == 1) {echo 'Yes';} else {echo 'No';} ?></p>
            <p class="text-left">
                <b>List of abstracts (Please click on the abstract title to edit): </b><br>
                <?php foreach ($userReport as $userReports): ?>
                <a href="/basic/web/index.php?r=sait/edit-report&report_id=<?= $userReports->report_id?>"><?php echo $userReports->report_name ?></a>
                (
                    <?php
                        if($userReports->report_file_path!="") {
                            echo "Abstract uploaded";
                        }  
                        else{
                            echo "Abstract NOT uploaded";
                        }
                    ?>

                )    
            </p>
            <?php endforeach; ?>
            
            <div class="form-group">
                <a href="index.php?r=sait/edit" class="btn btn-primary">Edit profile</a>
                <a href="index.php?r=sait/add" class="btn btn-primary">Add report</a>
                <a href="index.php?r=sait/logout" class="btn btn-primary">Exit</a>
            </div>
        </div>
    </div>
</div>