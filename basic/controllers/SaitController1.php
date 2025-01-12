<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Sait;

class SaitController extends \yii\web\Controller
{
    public $layout = 'action';

    public function actionIndex()
    {
        $this->layout = 'event';
        return $this->render('index');
    }

    public function actionRegistration()
    {
        $model = new \app\models\Sait();
        $modelReport = new \app\models\Report();
        //$flag = 0;
       /* echo Yii::getAlias('@webroot');
        exit(0);*/
        if ($model->load(Yii::$app->request->post()) && $modelReport->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->validate() && $modelReport->validate()) {
                if ($model->file) {
                    //$flag = 1;
                    $password = $model->generateRandomString(5);
                    $model->setPassword($password);
                    $model->save();
                    $modelReport->sait_id = $model->sait_id;
                    $modelReport->save();
                    $path = Yii::getAlias('@webroot') . '/uploads/' . $modelReport->report_id . '.';
                    $model->file->saveAs($path . $model->file->extension);
                    $model->contact($model, $modelReport, $path, 1);
                    //var_dump($path . $model->file->extension);
                    return $this->render('registration', ['flag' => 1, 'pass' => $password]);
                }else{
                    //$flag = 1;
                    $password = $model->generateRandomString(5);
                    $model->setPassword($password);
                    $model->save();
                    $modelReport->sait_id = $model->sait_id;
                    $modelReport->save();
                    $model->contact($model, $modelReport, 0, 0);
                    //var_dump($model);
                    return $this->render('registration', ['flag' => 1, 'pass' => $password]);
                }
            }
        }
        return $this->render('registration', ['model' => $model,'modelReport' => $modelReport,'flag' => 0]);
    }
    public function actionOrganization()
    {
        return $this->render('organization');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $login_model = new \app\models\Login();
        if($login_model->load(Yii::$app->request->post()))
        {
            $login_model->attributes=Yii::$app->request->post('Login');
            if($login_model->validate())
            {
                if($login_model -> validatePassword()) {
                    Yii::$app->user->login($login_model->getUser($login_model->sait_email));
                    return $this->goHome();
                }
                else {
                    return $this->render('login', ['login_model'=>$login_model, 'flag' => 1]);
                }
            }
        }
        return $this->render('login', ['login_model'=>$login_model, 'flag' => 0]);
    }
    public function actionTest(){
        var_dump(Yii::$app->params['pathUploads']);
    }
    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }
    public function actionProfile()
    {
        if(!Yii::$app->user->isGuest)
        {
            $model = new \app\models\Login();
            $modelReport = new \app\models\Report();
            $user = $model->getUser(Yii::$app->user->identity->sait_email);
            $userReport = $modelReport->getReport($user->sait_id);
            return $this->render('profile', ['user' => $user,'userReport' => $userReport]);
        }
        else
        {
            return $this->redirect(['login']);
        }
    }
    public function actionEdit()
    {
        if(!Yii::$app->user->isGuest)
        {
            $model = new \app\models\SaitEdit();
            $user = $model->getUser(Yii::$app->user->identity->sait_email);
            $flag = 0;
            if ($model->load(Yii::$app->request->post()))
            {
                if ($model->validate())
                {
                    $model->contactEdit($user, $model);
                    $user->sait_surname = $model->sait_surname;
                    $user->sait_name = $model->sait_name;
                    $user->sait_patronymic = $model->sait_patronymic;
                    $user->sait_surname_latn = $model->sait_surname_latn;
                    $user->sait_name_latn = $model->sait_name_latn;
                    $user->sait_work = $model->sait_work;
                    $user->sait_position = $model->sait_position;
                    $user->sait_status = $model->sait_status;
                    $user->update();
                    $flag = 1;
                    return $this->render('edit', ['flag' => $flag]);
                }
            }
            return $this->render('edit', ['model' => $model, 'flag' => $flag, 'user' => $user]);
        }
        else
        {
            return $this->redirect(['login']);
        }
    }
    public function actionAdd()
    {
        if(!Yii::$app->user->isGuest)
        {
            $modelReport = new \app\models\Report();
            if ($modelReport->load(Yii::$app->request->post()))
            {
                $modelReport->file = UploadedFile::getInstance($modelReport, 'file');
                if ($modelReport->validate())
                {
                    if ($modelReport->file) {
                        $model = new \app\models\Login();
                        $user = $model->getUser(Yii::$app->user->identity->sait_email);
                        $modelReport->sait_id = $user->sait_id;
                        $modelReport->report_check = 1;
                        $modelReport->save();
                        /*$path = Yii::$app->params['pathUploads'] . 'uploads/' . $modelReport->report_id . '.';*/
                        $path = Yii::getAlias('@webroot') . '/uploads/' . $modelReport->report_id . '.';
                        $modelReport->file->saveAs($path . $modelReport->file->extension);
                        $modelReport->contact($modelReport, $user, $path,1);
                        return $this->render('add', ['flag' => 1]);
                    }else{
                        $model = new \app\models\Login();
                        $user = $model->getUser(Yii::$app->user->identity->sait_email);
                        $modelReport->sait_id = $user->sait_id;
                        $modelReport->report_check = 1;
                        $modelReport->save();
                        //$path = Yii::$app->params['pathUploads'] . 'uploads/' . $modelReport->report_id . '.';
                        //$modelReport->file->saveAs($path . $modelReport->file->extension);
                        $modelReport->contact($modelReport, $user, 0, 0);
                        return $this->render('add', ['flag' => 1]);
                    }
                }
            }
            return $this->render('add', ['modelReport' => $modelReport, 'flag' => 0]);
        }
        else
        {
            return $this->redirect(['login']);
        }

    }
}

