<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

            <?=$form->field($model,'username')->textInput(['placeholder' => 'Username'])->label(false)?>
            <?=$form->field($model,'password')->passwordInput(['placeholder' => 'Password'])->label(false)?>
            <?=$form->field($model,'rememberMe')->checkbox(['style' => 'height: inherit;']) ?>
            <!--Remember Me-->

            <?=\yii\helpers\Html::submitButton('Login',['class' => 'btn btn-success']) ?>

        <?php \yii\bootstrap\ActiveForm::end(); ?>



</div>

    </div>