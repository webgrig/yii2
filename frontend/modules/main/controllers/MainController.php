<?php

namespace app\modules\main\controllers;

use yii\web\Controller;
use frontend\models\Image;

class MainController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
