<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<?php $this->title="Login to your account"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="container">
                <h2 class="section-heading">Login to your account</h2>
                <?php $form = ActiveForm::begin(); ?>
                <div class="col-md-6">
                <?= $form->field($login, 'sait_email')->textInput(['placeholder' => 'Email']) ?>
                <?= $form->field($login, 'sait_password')->passwordInput(['placeholder' => 'Password'])->label('Password') ?>
                <?php if ($flag) {
                    echo "Invalid password or email";
                    }
                ?>
                    <div>
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
