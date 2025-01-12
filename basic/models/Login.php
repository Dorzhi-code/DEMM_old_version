<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "sait".
 *
 * @property string $sait_email
 * @property string $sait_password
 * @property string $sait_id
 */
class Login extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'sait';
    }
    public function rules()
    {
        return [
            [['sait_email','sait_password'], 'required'],
            [['sait_email'], 'email'],
            //['sait_password', 'validatePassword']
        ];
    }
    public function validatePassword()
    {
        $user = $this->getUser($this->sait_email);
        if(!$user) {

        }
        else{
            return Yii::$app->security->validatePassword($this->sait_password, $user->sait_password);
        }
    }
    public function getUser($param)
    {
        return User::findOne(['sait_email'=>$param]);
    }
    public function attributeLabels()
    {
        return [
            'sait_email' => 'Email',
            'sait_password' => 'Пароль',
        ];
    }
}