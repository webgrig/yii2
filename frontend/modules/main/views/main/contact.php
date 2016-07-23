<div class="row contact">
    <div class="col-lg-6 col-sm-6">

        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Name'])->label(false) ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
        <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject'])->label(false) ?>
        <?= $form->field($model, 'body')->textArea(['placeholder' => 'Body', 'rows' => 6 ])->label(false) ?>
        <?= $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            'captchaAction' => \yii\helpers\Url::to(['main/captcha'])
        ]) ?>


        <?=\yii\helpers\Html::submitButton('Send',['class' => 'btn btn-success']) ?>
        <?php \yii\bootstrap\ActiveForm::end(); ?>


        </div>


    </div>