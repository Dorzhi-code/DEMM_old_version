<?php

namespace app\models;

use Yii;

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
 * @property string $sait_degree
 * @property string $sait_rank
 * @property string $sait_work
 * @property string $sait_position
 * @property string $sait_address
 * @property string $sait_tel
 * @property int $sait_room_uu
 * @property int $sait_room_uu_col
 * @property int $sait_room_baikal
 * @property int $sait_room_baikal__col
 * @property int $sait_lecture
 * @property int $sait_lecture_type
 * @property int $sait_tenor
 * @property int $sait_request
 * @property int $sait_participation
 */
class SaitConfirm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sait';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sait_request', 'sait_participation'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
}
