<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <?php $form = \yii\bootstrap\ActiveForm::begin([
            'enableClientValidation' => true,
            'enableAjaxValidation' => false
        ]); ?>
            <?php echo $form->field($model, 'username')->textInput(['placeholder' => 'Full Name'])->label(false)?>
            <?php echo $form->field($model, 'email')->textInput(['placeholder' => 'Enter Email'])->label(false)?>
            <?php echo $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false)?>
            <?php echo $form->field($model, 'repassword')->passwordInput(['placeholder' => 'Confirm Password'])->label(false)?>

            <?php echo \yii\helpers\Html::submitButton('Register', ['class' => 'btn btn-success']); ?>

        <?php $form = \yii\bootstrap\ActiveForm::end(); ?>
    </div>

</div>