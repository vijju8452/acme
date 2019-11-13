<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm; 

$this->title = Yii::t('app','register');
?>
<div class="site-login">
<h1><?= Html::encode($this->title) ?></h1>

    <p><?php echo Yii::t('app','Please, signup'); ?></p>

    <?php $registerForm = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $registerForm->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
        <?= $registerForm->field($newUser, 'email') ?>
        <?= $registerForm->field($newUser, 'password')->passwordInput(['value'=> '']) ?>

        

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton(Yii::t('app','sign up'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>


