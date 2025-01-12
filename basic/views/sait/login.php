<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<?php $this->title="Вход в личный кабинет"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="container">
                <h2 class="section-heading">Вход в личный кабинет</h2>
                <?php $form = ActiveForm::begin(); ?>
                <!-- ['action' => '/basic/web/index.php?r=sait/login'] -->
                <div class="col-md-6">
                <?= $form->field($login, 'sait_email')->textInput(['placeholder' => 'Email']) ?>
                <?= $form->field($login, 'sait_password')->passwordInput(['placeholder' => 'Пароль']) ?>
                <?php if ($flag) {
                    echo "Введен неверный пароль или email";
                    }
                ?>
                    <div>
                        <button class="btn btn-success" type="submit">Войти</button>
                    </div>
                <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
