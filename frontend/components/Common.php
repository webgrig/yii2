<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{
    const EVENT_NOTIFY = 'notifyAdmin';
    public function sendMail($email, $subject, $body, $name = ''){
        /*Yii::$app->mail->compose()
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
            ->setTo([$email => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();*/
        $this->trigger(self::EVENT_NOTIFY);
    }

    public function notifyAdmin(){
        echo 'Notify Admin';
    }
}