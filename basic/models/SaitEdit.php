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
 * @property int $sait_room_baikal
 * @property int $sait_visa
 */
class SaitEdit extends \yii\db\ActiveRecord
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
            [['sait_room_uu','sait_email', 'sait_surname', 'sait_name', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_form', 'sait_room_uu', 'sait_room_baikal'], 'required'],
            [['sait_email', 'sait_surname', 'sait_name', 'sait_patronymic', 'sait_surname_latn', 'sait_name_latn', 'sait_degree', 'sait_rank', 'sait_work', 'sait_position', 'sait_address', 'sait_tel'], 'string', 'max' => 255],
            [['sait_room_uu', 'sait_room_baikal', 'sait_visa'], 'default', 'value' => 0],
            ['sait_form', 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sait_id' => 'Sait ID',
            'sait_email' => 'Email',
            'sait_surname' => 'Фамилия',
            'sait_name' => 'Имя',
            'sait_patronymic' => 'Отчество',
            'sait_surname_latn' => 'Фамилия (латинскими буквами)',
            'sait_name_latn' => 'Имя (латинскими буквами)',
            'sait_degree' => 'Ученая степень',
            'sait_rank' => 'Ученое звание',
            'sait_work' => 'Место работы',
            'sait_position'=>'Должность',
            'sait_address' => 'Адрес организации',
            'sait_tel' => 'Номер телефона',
            'sait_form' => 'Форма участия',
            'sait_room_uu' => 'Потребность в номере в Улан-Удэ',
            'sait_room_baikal' => 'Потребность в номере на Байкале',
            'sait_room_baikal' => 'Потребность в номере на Байкале',
        ];
    }
    public function getUser($param)
    {
        return User::findOne(['sait_email'=>$param]);
    }
    public function contactEdit($before, $after)
    {
        /*if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('conf-2019@yandex.ru')
                ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                ->setSubject('Изменение данных пользователя на сайте')
                ->setTextBody('На сайте участник поменял свои данные.
                Было                                Стало
                Фамилия: ' . $before->sait_surname . ' -> ' . $after->sait_surname . '
                Имя: ' . $before->sait_name . ' -> ' . $after->sait_name . '
                Отчество: ' . $before->sait_patronymic . ' -> ' . $after->sait_patronymic . '
                Фамилия (латинскими буквами): ' . $before->sait_surname_latn . ' -> ' . $after->sait_surname_latn . '
                Имя (латинскими буквами) : ' . $before->sait_name_latn . ' -> ' . $after->sait_name_latn . '
                Место работы: ' . $before->sait_work . ' -> ' . $after->sait_work . '
                Должность: ' . $before->sait_position . ' -> ' . $after->sait_position . '
                Статус: ' . $before->sait_status.' -> ' . $after->sait_status)
                ->send();
            Yii::$app->mailer->compose()
                ->setTo('buldaev@mail.ru')
                ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                ->setSubject('Изменение данных пользователя на сайте')
                ->setTextBody('На сайте участник поменял свои данные.
                Было                                Стало
                Фамилия: ' . $before->sait_surname . ' -> ' . $after->sait_surname . '
                Имя: ' . $before->sait_name . ' -> ' . $after->sait_name . '
                Отчество: ' . $before->sait_patronymic . ' -> ' . $after->sait_patronymic . '
                Фамилия (латинскими буквами): ' . $before->sait_surname_latn . ' -> ' . $after->sait_surname_latn . '
                Имя (латинскими буквами) : ' . $before->sait_name_latn . ' -> ' . $after->sait_name_latn . '
                Место работы: ' . $before->sait_work . ' -> ' . $after->sait_work . '
                Должность: ' . $before->sait_position . ' -> ' . $after->sait_position . '
                Статус: ' . $before->sait_status.' -> ' . $after->sait_status)
                ->send();
            return true;
        }*/
        return false;
    }

    // public function beforeSave($insert) {
    //     if (parent::beforeSave($insert)) {
    //         if($this->sait_room_uu_col > 0){
    //             $this->sait_room_uu = 1;
    //             echo "Yes";
    //         } else {
    //             $this->sait_room_uu = 0;
    //         }
    //         return true;
    //     }
    //     return false;
    // }
}
