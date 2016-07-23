<?php

namespace app\modules\main\controllers;


use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'bootstrap';
        return $this->render('index');
    }

    public function actionEvent(){

        $component = \Yii::$app->common;
        $component->on($component::EVENT_NOTIFY, [$component, 'notifyAdmin']);
        $component->sendMail('test@domain.com', 'Test', 'Test text');

    }
}
