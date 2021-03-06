<?php

namespace app\modules\main\controllers;

use common\models\LoginForm;
use frontend\models\ContactForm;
use frontend\models\SignupForm;
use yii\web\Controller;
use frontend\models\Image;
use yii\web\Response;
use yii\widgets\ActiveForm;

class MainController extends Controller
{
    public $layout = 'inner';

    public function actions(){
        return [
            'captcha' => [
              'class' => 'yii\captcha\CaptchaAction',
              'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'test' => [
                'class' => 'frontend\actions\TestAction',
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister(){

        $model = new SignupForm();

        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost){
            if($model->load(\Yii::$app->request->post())){
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
            return false;
        }

        if ($model->load(\Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (\Yii::$app->getUser()->login($user)) {
                    \Yii::$app->session->setFlash('success', 'Register Success');
                    return $this->goHome();
                }
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            \Yii::$app->session->setFlash('success', 'Login Success');
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact(){

        $model = new ContactForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()){
            $body = "<div>Body: <b>$model->body</b></div>";
            $body .= "<div>Email: <b>$model->email</b></div>";
            \Yii::$app->common->sendMail($model->name, $model->email, $model->subject, $body);
            // $userName, $userEmail, $subject, $text
            echo 'Send success';
            exit();
        }
        return $this->render('contact', ['model' => $model]);
    }
}
