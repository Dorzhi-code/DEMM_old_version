<?php

namespace app\controllers;

use Yii;
use yii\base\Model;
use app\models\Sait;
use app\models\SaitConfirm;
use app\models\SaitSearch;
use app\models\Login;
use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;

/**
 * AdminController implements the CRUD actions for Sait model.
 */
class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    throw new \Exception('У вас нет доступа к этой странице');
                },
                'only' => ['login', 'logout', 'index', 'create','view','update','delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout','index','view','create','update','delete'],
                        'roles' => ['@'],

                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Sait models.
     * @return mixed
     */
    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->redirect("index.php?r=admin/index");
        }

        $login_model = new Login();

        if(Yii::$app->request->post('Login'))
        {
            $login_model->attributes=Yii::$app->request->post('Login');
            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect("index.php?r=admin/index");
            }
        }

        return $this->render('login', ['login_model'=>$login_model]);
    }
    public function actionConfirm()
    {
        $query = Sait::find();
        $model = new SaitConfirm();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $members = $query->orderBy('sait_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        if ($model->load(Yii::$app->request->post())) {
            if (Model::loadMultiple($members, Yii::$app->request->post()) && Model::validateMultiple($members))
            {
                foreach ($members as $member) {
                    $member->save();
                }
            }
        }
        return $this->render('confirm', [
            'members' => $members,
            'pagination' => $pagination,
            'model' => $model,
        ]);
    }
    public function actionLogout()
    {
        if(!Yii::$app->user->isGuest)
        {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }
    public function actionIndex()
    {
        $searchModel = new SaitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sait model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sait model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sait();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sait_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sait model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sait_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sait model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sait model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sait the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sait::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
