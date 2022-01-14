<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MyCarsController extends Controller
{
    public $layout = 'site';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
   * Lern Class
   *
   * @return mixed
   */
    public function actionClassMyCars()
    {
        /**
         * 
         */
        class Car{
            
            public static $id;
            public $name;
            public $engine;
            public $speed;
            public $mustange;

            public function Car($name, $engine, $speed, $mustange){
                $this->name = $name;
                $this->engine = $engine;
                $this->speed = $speed;
                $this->mustange = $mustange;
            }

            public function CarInformation(){
                echo "Моя $id машина $name. Её параметры следующие:<br>
                1. Объем двигателя составляет $engine;<br>
                2. Скорость $speed;<br>
                3. Количество л.с. $mustange.<br><br>";
            }
        }

        function MyCars(){
            echo "Данные про мои авто:";

            $car1 = new Car('ВАЗ 21013', '1.2', '320', '64');
            echo $car1->CarInformation();

            $car2 = new Car('Loncin LX250GY-3', '0.223', '120', '18');
            echo $car2->CarInformation();
        }

        $result = MyCars();

        return $this->render('mycars', [
            'result' -> $result,
        ]);
    }
}
