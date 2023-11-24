<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

use app\models\LoginForm;
?>

<div class="login">

    <p><strong>Вход в аккаунт</strong></p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label('Почта') ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->label('Запомнить меня')  ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div style="color:#999;">
                <br> Ещё не зарегистрированы?
                <br><?= Html::a('Создать аккаунт', ['signup'], ['class' => 'btn btn-primary']) ?>
                <br>   
                <br> Чтобы использовать калькулятор в гостевом режиме, введите следующие данные: <br><strong>почта: </strong> guest@pochta.pochta <br><strong>пароль:</strong> guest1
                <br> Вам будет доступна функция расчёта стоимости доставки без сохранения результатов.
            </div>

        </div>
    </div>
</div>
