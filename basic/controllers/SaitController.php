<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Sait;
use app\models\Report;
use app\models\Login;
use \app\models\Mailer;
class SaitController extends \yii\web\Controller
{
    public $layout = 'action';

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->open();
       /* if ($session->get('language') == 'ru')
        {
            $this->layout = 'event';
		$session->get('language') == 'ru'
            return $this->render('index_ru');
        }
        else{
            $this->layout = 'event_en';
            return $this->render('index_en');
        }*/

        if ($session->get('language') == 'en') {
            $session['language'] = 'en';
            $this->layout = 'event_en';
            return $this->render('index_en');
            } else {
                $session['language'] = 'ru';
                $this->layout = 'event';
                return $this->render('index_ru');
            }
    }

    public function actionRegistration()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        $model = new \app\models\Sait();
        $modelReport = new \app\models\Report();
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
                    // В report_file_path лежит путь к файлу, если при регистрации user загрузил файл, иначе ''
                    $modelReport->report_file_path = $path . $model->file->extension;
                    $modelReport->save();
                    Mailer::sendPassword($model->sait_email, ['pass' => $password, 'lang' => $language]);
                    if($language == 'ru') {
                        $this->layout = 'action';
                        return $this->render('registration_ru', ['flag' => 1, 'pass' => $password, 'model' => $model]);
                    }else{
                        $this->layout = 'action_en';
                        return $this->render('registration_en', ['flag' => 1, 'pass' => $password, 'model' => $model]);
                    }
                }else{
                    $password = $model->generateRandomString(5);
                    $model->setPassword($password);
                    $model->save();
                    $modelReport->sait_id = $model->sait_id;
                    $modelReport->save();
                    $model->contact($model, $modelReport, 0, 0);
                    
                    Mailer::sendPassword($model->sait_email, ['pass' => $password, 'lang' => $language]);
                    if($language == 'ru') {
                        $this->layout = 'action';
                        return $this->render('registration_ru', ['flag' => 1, 'pass' => $password, 'model' => $model]);
                    }else{
                        $this->layout = 'action_en';
                        return $this->render('registration_en', ['flag' => 1, 'pass' => $password, 'model' => $model]);
                    }
                    //return $this->render('registration', ['flag' => 1, 'pass' => $password]);
                }
            }
        }
        if($language=='ru')
        {
            $this->layout = 'action';
            return $this->render('registration_ru', ['model' => $model,'modelReport' => $modelReport,'flag' => 0]);
        }
        else{
            $this->layout = 'action_en';
            return $this->render('registration_en', ['model' => $model,'modelReport' => $modelReport,'flag' => 0]);
        }
        //return $this->render('registration', ['model' => $model,'modelReport' => $modelReport,'flag' => 0]);
    }
    public function actionOrganization()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if($language=='ru'){
            $this->layout = 'action';
            return $this->render('organization');
        }else
        {
            $this->layout = 'action_en';
            return $this->render('organization_en');
        }

    }

    public function actionAbstract()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if($language=='ru'){
            $this->layout = 'action';
            return $this->render('abstract');
        }

        if ($language == 'en')
        {
            $this->layout = 'action_en';
            return $this->render('abstract_en');
        }
    }

    public function actionPolytics()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if($language=='ru'){
            $this->layout = 'action';
            return $this->render('polytics');
        }

        if ($language == 'en')
        {
            $this->layout = 'action_en';
            return $this->render('polytics_en');
        }
    }

    public function actionAbout()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if($language=='ru'){
            $this->layout = 'action';
            return $this->render('about');
        }else
        {
            $this->layout = 'action_en';
            return $this->render('about_en');
        }
    }
    
    public function actionLogin()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');

        if (!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        } else {
            $login = new Login();
            // return $this->redirect('login');
            if ($login->load(Yii::$app->request->post()))
            {
                $login->attributes = Yii::$app->request->post('Login');
                if ($login->validate()) {
                    if($login->validatePassword()) {

                        Yii::$app->user->login($login->getUser($login->sait_email));
                        return $this->goHome();
                    } else {
                        if($language == 'ru'){
                            $this->layout = 'action';
                            return $this->render('login', ['login'=>$login, 'flag' => 1]);
                        } 
                        if ($language == 'en') {
                            $this->layout = 'action_en';
                            return $this->render('login_en', ['login'=>$login, 'flag' => 1]);
                        }
                    }
                }
            }
            if($language=='ru'){
                    $this->layout = 'action';
                    return $this->render('login', ['login'=>$login, 'flag' => 0]);
            } else {
                    $this->layout = 'action_en';
                    return $this->render('login_en', ['login'=>$login, 'flag' => 0]);
            }
        }
    }

    public function actionLogout()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if(!Yii::$app->user->isGuest)
        {
            if ($language == 'en') {
                Yii::$app->user->logout();
                return $this->goHome();
            }
            if ($language == 'ru') {
                Yii::$app->user->logout();
                return $this->goHome();
            }
        }
    }

    public function actionProfile()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if(!Yii::$app->user->isGuest)
        {
            $model = new \app\models\Login();
            $modelReport = new \app\models\Report();
            $user = $model->getUser(Yii::$app->user->identity->sait_email);
            $userReport = $modelReport->getReport($user->sait_id);
            if($language=='ru'){
                $this->layout = 'action';
                return $this->render('profile', ['user' => $user,'userReport' => $userReport]);
            }else
            {
                $this->layout = 'action_en';
                return $this->render('profile_en', ['user' => $user,'userReport' => $userReport]);
            }
            //return $this->render('profile', ['user' => $user,'userReport' => $userReport]);
        }
        else
        {
            return $this->redirect(['login']);
        }
    }

    public function actionEdit()
    {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if(!Yii::$app->user->isGuest)
        {
            //$model = new \app\models\SaitEdit();
            $model = \app\models\SaitEdit::findOne(Yii::$app->user->id);
            $user = $model->getUser(Yii::$app->user->identity->sait_email);
            $flag = 0;
            

            // echo "<br><br><br><br><br><br>".$user->sait_id;
            if ($model->load(Yii::$app->request->post()) && $model->validate())
            {
                $model->save();
                $flag = 1;
            }
            if($language=='ru'){
                $this->layout = 'action';
                return $this->render('edit', ['model' => $model, 'flag' => $flag, 'user' => $user]);
            }else
            {
                $this->layout = 'action_en';
                return $this->render('edit_en', ['model' => $model, 'flag' => $flag, 'user' => $user]);
            }
            //return $this->render('edit', ['model' => $model, 'flag' => $flag, 'user' => $user]);
        }
        else
        {
            return $this->redirect(['login']);
        }
    }
    
    public function actionEditReport() {
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if(!Yii::$app->user->isGuest)
        {
            $report = Report::findOne($_GET['report_id']); 
        }

        if ($language == 'ru') {
            return $this->render('edit_report', ['model' => $report]);
        }
        if ($language == 'en') {
            return $this->render('edit_report_en', ['model' => $report]);
        }
    }

    public function actionEditProcess() {
        
            $modelReport = Report::findOne($_POST['report_id']);
            if ($modelReport->load(Yii::$app->request->post()) && $modelReport->validate())
            {
                $modelReport->file = UploadedFile::getInstance($modelReport, 'file');
                if ($modelReport->file) {
                    
                    $path = Yii::getAlias('@webroot') . '/uploads/' . $modelReport->report_id . '.';
                    $modelReport->file->saveAs($path . $modelReport->file->extension);
                    $modelReport->report_file_path = $path . $modelReport->file->extension;
                } 
                
                $modelReport->save();

                return $this->redirect(['profile']);
            }
    }

    public function actionAdd()
    {
        
        $session = Yii::$app->session;
        $session->open();
        $language = $session->get('language');
        if(!Yii::$app->user->isGuest)
        {
            
            $modelReport = new \app\models\Report();
            if ($modelReport->load(Yii::$app->request->post()) && $modelReport->validate())
            {
                //print_r($modelReport);
                $model = new \app\models\Login();
                $user = $model->getUser(Yii::$app->user->identity->sait_email);
                $modelReport->sait_id = $user->sait_id;
                $model->sait_form = $user->sait_form;
                $modelReport->file = UploadedFile::getInstance($modelReport, 'file');

                if ($modelReport->validate())
                {
                    if ($modelReport->file) {
                        
                        /*$path = Yii::$app->params['pathUploads'] . 'uploads/' . $modelReport->report_id . '.';*/
                        $modelReport->save();
                        $path = Yii::getAlias('@webroot') . '/uploads/' . $modelReport->report_id . '.';
                        $modelReport->file->saveAs($path . $modelReport->file->extension);
                        $modelReport->report_file_path = $path . $modelReport->file->extension;
                        $modelReport->contact($modelReport, $user, $path, 1);
                        $modelReport->save();
                        if($language=='ru'){
                            $this->layout = 'action';
                            return $this->render('add', ['flag' => 1]);
                        }
                        if ($language == 'en')
                        {
                            $this->layout = 'action_en';
                            return $this->render('add_en', ['flag' => 1]);
                        }
                        // return $this->render('add', ['flag' => 1]);
                        
                    } else {
                        $model = new \app\models\Login();
                        $user = $model->getUser(Yii::$app->user->identity->sait_email);
                        $modelReport->sait_id = $user->sait_id;
                        $modelReport->save();
                        //$path = Yii::$app->params['pathUploads'] . 'uploads/' . $modelReport->report_id . '.';
                        //$modelReport->file->saveAs($path . $modelReport->file->extension);
                        // $modelReport->report_file_path = $path . $modelReport->file->extension;
                        $modelReport->contact($modelReport, $user, 0, 0);
                        $modelReport->save();

                        if($language=='ru'){
                            $this->layout = 'action';
                            return $this->render('add', ['flag' => 1]);
                        }
                        if ($language == 'en')
                        {
                            $this->layout = 'action_en';
                            return $this->render('add_en', ['flag' => 1]);
                        }
                        // return $this->render('add', ['flag' => 1]);
                    }
                }
            }
            
            if($language=='ru'){
                $this->layout = 'action';
                return $this->render('add', ['modelReport' => $modelReport, 'flag' => 0]);
            }
            if ($language == 'en')
            {
                $this->layout = 'action_en';
                return $this->render('add_en', ['modelReport' => $modelReport, 'flag' => 0]);
            }
            //return $this->render('add', ['modelReport' => $modelReport, 'flag' => 0]);
        }
        else
        {
            return $this->redirect(['login']);
        }
    }
    
    public function actionChangeLang($lang='en'){
        $session = Yii::$app->session;
        $session->open();
        if ($lang=='en'){
            $session['language'] = 'en';
        }else{
            $session['language'] = 'ru';
        }
        return $this->redirect(['index']);
        //index.php?r=sait/change-lang&lang='ru'
    }

}


