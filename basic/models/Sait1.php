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
 * @property string $sait_work
 * @property string $sait_position
 * @property string $sait_status
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
            [['sait_surname', 'sait_name', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_status', 'sait_email'], 'required'],
            [['sait_email'], 'email'],
            [['sait_email'], 'unique', 'targetClass'=>'app\models\Sait'],
            [['file'], 'file',
            'skipOnEmpty' => true],
            [['sait_surname', 'sait_name', 'sait_patronymic','sait_position', 'sait_surname_latn', 'sait_name_latn', 'sait_work', 'sait_status', 'sait_email'], 'string', 'max' => 255],
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
            'sait_work' => 'Место работы',
            'sait_position'=>'Должность',
            'sait_status' => 'Статус',
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
            if($report->report_check){
                $check = 'Да';
            }else{
                $check = 'Нет';
            }
            if($report->report_type == 1){
                $type = 'Секционный';
            }else{
                $type = 'Стендовый';
            }
            switch ($report->report_tenor){
                case 1:
                    $tenor = 'Качественная теория обыкновенных дифференциальных уравнений';
                    break;
                case 2:
                    $tenor = 'Численные методы решения обыкновенных дифференциальных уравнений';
                    break;
                case 3:
                    $tenor = 'Дифференциально-алгебраические уравнения: качественная теория и методы решения';
                    break;
                case 4:
                    $tenor = 'Интегральные и интегро-алгебраические уравнения';
                    break;
                case 5:
                    $tenor = 'Задачи управления динамическими системами';
                    break;
                case 6:
                    $tenor = 'Интегральные и дифференциальные уравнения в прикладных задачах';
                    break;
                case 7:
                    $tenor = 'Вопросы подготовки профильных специалистов';
                    break;
            }
            if($key) {
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
            }
        }
        return false;
    }
}
