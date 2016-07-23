<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{
    const EVENT_NOTIFY = 'notifyAdmin';
    public function sendMail($userName, $userEmail, $subject, $text){
        $supportEmail = \Yii::$app->params['supportEmail'];
        if(\Yii::$app->mail->compose()
            ->setFrom($supportEmail)
            ->setTo([$supportEmail, 'webgrig@mail.ru'])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()){
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin(){
        echo 'Notify Admin';
    }
}