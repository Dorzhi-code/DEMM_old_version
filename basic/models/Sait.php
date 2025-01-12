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
 * @property string $sait_form
 * @property int $sait_room_uu
 * @property int $sait_room_baikal
 * @property int $sait_visa
 */
class Sait extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sait';
    }
    public $file;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sait_email', 'sait_surname', 'sait_name', 'sait_surname_latn', 'sait_name_latn', 'sait_degree', 'sait_rank', 'sait_work', 'sait_form'], 'required'],
            [['sait_email'], 'email'],
            [['sait_email'], 'unique', 'targetClass'=>'app\models\Sait'],
            [['file'], 'file', 'skipOnEmpty' => true],
            [['sait_request','sait_participation'],'default','value' => 0],
            [['sait_email', 'sait_surname', 'sait_name', 'sait_patronymic', 'sait_surname_latn', 'sait_name_latn', 'sait_degree', 'sait_rank', 'sait_work', 'sait_position', 'sait_address', 'sait_tel'], 'string', 'max' => 255],
            [['sait_room_uu', 'sait_room_baikal', 'sait_visa'], 'default', 'value' => 0],
            [['sait_form'], 'integer'],
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
            'sait_patronymic' => 'Отчество (при наличии)',
            'sait_surname_latn' => 'Фамилия (латинскими буквами)',
            'sait_name_latn' => 'Имя (латинскими буквами)',
            'sait_degree' => 'Ученая степень',
            'sait_rank' => 'Ученое звание',
            'sait_work' => 'Место работы',
            'sait_position'=>'Должность',
            'sait_address' => 'Адрес организации',
            'sait_tel' => 'Контактный телефон',
            'sait_form' => 'Форма участия',
            'sait_room_uu' => 'Потребность в номере в Улан-Удэ',
            'sait_room_baikal' => 'Потребность в номере на Байкале',
            'sait_visa' => 'Потребность в визе',
            'file' => 'Тезис доклада',
        ];
    }
    function setPassword($password)
    {
        $this->sait_password = Yii::$app->security->generatePasswordHash($password);
    }
    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function contact($text,$report,$path,$key)
    {
        if ($this->validate()) {

            // if($report->report_form == 1){
            //     $form = 'Очная';
            // } else {
            //     $form = 'Дистанционная';
            // }

            switch($report->report_type){
                case 1:
                    $type = 'Пленарный';
                    break;
                case 2:
                    $type = 'Секционный';
                    break;
                case 3:
                    $type = 'Стендовый';
                    break;
            }
            
            switch ($report->report_tenor){
                case 1:
                    $tenor = 'Неклассические задачи уравнений математической физики';
                    break;
                case 2:
                    $tenor = 'Вырождающиеся уравнения и уравнения смешанного типа';
                    break;
                case 3:
                    $tenor = 'Спектральная теория дифференциальных операторов';
                    break;
                case 4:
                    $tenor = 'Динамические системы, оптимальные управления и теория дифференциальных игр';
                    break;
                case 5:
                    $tenor = 'Математическое моделирование и вычислительная математика';
                    break;
            }

            /* if($key) {
                Yii::$app->mailer->compose()
                    ->setTo('conf-2019@yandex.ru')
                    ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                    ->setSubject('Новая заявка на сайте')
                    ->setTextBody('На сайте зарегистрирован новый участник.
                    Email: ' . $text->sait_email . '
                    Фамилия: ' . $text->sait_surname . '
                    Имя: ' . $text->sait_name . '
                    Отчество: ' . $text->sait_patronymic . '
                    Фамилия (латинскими буквами): ' . $text->sait_surname_latn . '
                    Имя (латинскими буквами) : ' . $text->sait_name_latn . '
                    Место работы: ' . $text->sait_work . '
                    Должность: ' . $text->sait_position . '
                    Статус: ' . $text->sait_status . '
                    Название доклада: ' . $report->report_name . '
                    Планируете ли выступить с докладом: ' . $check . '
                    Вид доклада: '. $type .'
                    Направлние доклада: '. $tenor .'
                    Тезис доклада: во вложении')
                    ->attach($path . $text->file->extension)
                    ->send();
                Yii::$app->mailer->compose()
                    ->setTo('vdumn0v@yandex.ru')
                    ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                    ->setSubject('Новая заявка на сайте')
                    ->setTextBody('На сайте зарегистрирован новый участник.
                    Email: ' . $text->sait_email . '
                    Фамилия: ' . $text->sait_surname . '
                    Имя: ' . $text->sait_name . '
                    Отчество: ' . $text->sait_patronymic . '
                    Фамилия (латинскими буквами): ' . $text->sait_surname_latn . '
                    Имя (латинскими буквами) : ' . $text->sait_name_latn . '
                    Место работы: ' . $text->sait_work . '
                    Должность: ' . $text->sait_position . '
                    Статус: ' . $text->sait_status . '
                    Название доклада: ' . $report->report_name . '
                    Планируете ли выступить с докладом: ' . $check . '
                    Вид доклада: '. $type .'
                    Направлние доклада: '. $tenor .'
                    Тезис доклада: во вложении')
                    ->attach($path . $text->file->extension)
                    ->send();
                return true;
            }else{
                Yii::$app->mailer->compose()
                    ->setTo('conf-2019@yandex.ru')
                    ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                    ->setSubject('Новая заявка на сайте')
                    ->setTextBody('На сайте зарегистрирован новый участник.
                    Email: ' . $text->sait_email . '
                    Фамилия: ' . $text->sait_surname . '
                    Имя: ' . $text->sait_name . '
                    Отчество: ' . $text->sait_patronymic . '
                    Фамилия (латинскими буквами): ' . $text->sait_surname_latn . '
                    Имя (латинскими буквами) : ' . $text->sait_name_latn . '
                    Место работы: ' . $text->sait_work . '
                    Должность: ' . $text->sait_position . '
                    Статус: ' . $text->sait_status . '
                    Название доклада: ' . $report->report_name . '
                    Планируете ли выступить с докладом: ' . $check . '
                    Вид доклада: '. $type .'
                    Направлние доклада: '. $tenor)
                    ->send();
                Yii::$app->mailer->compose()
                    ->setTo('vdumn0v@yandex.ru')
                    ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                    ->setSubject('Новая заявка на сайте')
                    ->setTextBody('На сайте зарегистрирован новый участник.
                    Email: ' . $text->sait_email . '
                    Фамилия: ' . $text->sait_surname . '
                    Имя: ' . $text->sait_name . '
                    Отчество: ' . $text->sait_patronymic . '
                    Фамилия (латинскими буквами): ' . $text->sait_surname_latn . '
                    Имя (латинскими буквами) : ' . $text->sait_name_latn . '
                    Место работы: ' . $text->sait_work . '
                    Должность: ' . $text->sait_position . '
                    Статус: ' . $text->sait_status . '
                    Название доклада: ' . $report->report_name . '
                    Планируете ли выступить с докладом: ' . $check . '
                    Вид доклада: '. $type .'
                    Направлние доклада: '. $tenor)
                    ->send();
                return true;
            }*/
        }
        return false;
    }

    // public function beforeSave($insert) {
    //     if (parent::beforeSave($insert)) {
    //         if($this->sait_room_uu_col > 0){
    //             $this->sait_room_uu = 1;
    //         } else {
    //             $this->sait_room_uu = 0;
    //         }
    //         return true;
    //     }
    //     return false;
    // }
}
