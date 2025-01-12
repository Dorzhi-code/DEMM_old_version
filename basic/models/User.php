<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "sait".
 *
 * @property int $sait_id
 * @property string $sait_email
 * @property string $sait_password
 * @property string $sait_surname
 * @property string $sait_name
 * @property string $sait_patronymic
 * @property string $sait_surname_latn
 * @property string $sait_name_latn
 * @property string $sait_work
 * @property string $sait_position
 * @property string $sait_status
 * @property int $sait_lecture
 * @property int $sait_lecture_name
 * @property int $sait_lecture_type
 * @property int $sait_tenor
 */

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'sait';
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->sait_id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }
}