<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $sait_id
 * @property int $report_id
 * @property string $report_name
 * @property string $report_file_path
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
            [['sait_id', 'report_type', 'report_tenor'], 'integer'],
            [['report_name', 'report_type', 'report_tenor'], 'required'],
            ['report_file_path', 'default', 'value' => ''],
            [['report_name', 'report_file_path'], 'string', 'max' => 255],
            [['file'], 'file','skipOnEmpty' => true],
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
            'report_name' => 'Название доклада',
            'report_file_path' => 'File Path',
            'report_type' => 'Вид доклада',
            'report_tenor' => 'Направление секции',
        ];
    }
    public function getReport($param)
    {
        return Report::findAll(['sait_id'=>$param]);
    }
    public function contact($report,$user,$path,$key)
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

            /*if($key) {
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
                Yii::$app->mailer->compose()
                    ->setTo('buldaev@mail.ru')
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
                Yii::$app->mailer->compose()
                    ->setTo('buldaev@mail.ru')
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
            }*/
        }
        return false;
    }
}
