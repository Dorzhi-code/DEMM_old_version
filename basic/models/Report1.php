<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $sait_id
 * @property int $report_id
 * @property int $report_check
 * @property string $report_name
 * @property int $report_type
 * @property int $report_tenor
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }
    public $file;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sait_id', 'report_check', 'report_type', 'report_tenor'], 'integer'],
            [['report_name', 'report_type', 'report_tenor'], 'required'],
            [['file'], 'file',
                'skipOnEmpty' => true],
            [['report_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'file' => 'Тезис доклада',
            'report_id' => 'Report ID',
            'sait_id' => 'Sait ID',
            'report_check' => 'Report Check',
            'report_name' => 'Название доклада',
            'report_type' => 'Вид доклада',
            'report_tenor' => 'Направление',
        ];
    }
    public function getReport($param)
    {
        return Report::findAll(['sait_id'=>$param]);
    }
    public function contact($report,$user,$path,$key)
    {
        if ($this->validate()) {
            if($report->report_check){
                $check = 'Да';
            }else{
                $check = 'Нет';
            }
            if($report->report_type){
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
                    ->setSubject('Пользователь добавил новый доклад')
                    ->setTextBody('На сайте участник добавил новый доклад.
                Email: ' . $user->sait_email . '
                Фамилия: ' . $user->sait_surname . '
                Имя: ' . $user->sait_name . '
                Отчество: ' . $user->sait_patronymic . '
                Фамилия (латинскими буквами): ' . $user->sait_surname_latn . '
                Имя (латинскими буквами) : ' . $user->sait_name_latn . '
                Место работы: ' . $user->sait_work . '
                Должность: ' . $user->sait_position . '
                Статус: ' . $user->sait_status . '
                Название доклада: ' . $report->report_name . '
                Планируете ли выступить с докладом: ' . $check . '
                Вид доклада: '. $type .'
                Направлние доклада: '. $tenor .'
                Тезис доклада: во вложении')
                    ->attach($path . $report->file->extension)
                    ->send();
                return true;
            }else{
                Yii::$app->mailer->compose()
                    ->setTo('conf-2019@yandex.ru')
                    ->setFrom(['n.optconf@yandex.ru' => 'Optconf'])
                    ->setSubject('Пользователь добавил новый доклад')
                    ->setTextBody('На сайте участник добавил новый доклад.
                Email: ' . $user->sait_email . '
                Фамилия: ' . $user->sait_surname . '
                Имя: ' . $user->sait_name . '
                Отчество: ' . $user->sait_patronymic . '
                Фамилия (латинскими буквами): ' . $user->sait_surname_latn . '
                Имя (латинскими буквами) : ' . $user->sait_name_latn . '
                Место работы: ' . $user->sait_work . '
                Должность: ' . $user->sait_position . '
                Статус: ' . $user->sait_status . '
                Название доклада: ' . $report->report_name .'
                Планируете ли выступить с докладом: ' . $check . '
                Вид доклада: '. $type .'
                Направлние доклада: '. $tenor)
                    ->send();
                return true;
            }
        }
        return false;
    }
}
