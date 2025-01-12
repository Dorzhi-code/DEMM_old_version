<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sait".
 *
 * @property string $sait_surname
 * @property string $sait_name
 * @property string $sait_patronymic
 * @property string $sait_surname_latn
 * @property string $sait_name_latn
 * @property string $sait_work
 * @property string $sait_position
 * @property string $sait_status
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
            [['sait_surname', 'sait_name', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_status',], 'required'],
            [['sait_surname', 'sait_name', 'sait_patronymic','sait_position', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_status',], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sait_surname' => 'Фамилия',
            'sait_name' => 'Имя',
            'sait_patronymic' => 'Отчество',
            'sait_surname_latn' => 'Фамилия (латинскими буквами)',
            'sait_name_latn' => 'Имя (латинскими буквами)',
            'sait_work' => 'Место работы',
            'sait_position'=>'Должность',
            'sait_status' => 'Статус',
        ];
    }
    public function getUser($param)
    {
        return User::findOne(['sait_email'=>$param]);
    }
    public function contactEdit($before, $after)
    {
        if ($this->validate()) {
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
            return true;
        }
        return false;
    }
}
