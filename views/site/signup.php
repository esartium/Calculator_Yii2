<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<div class="login">

    <p><strong>Регистрация</strong></p>

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

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Имя пользователя')  ?>

            <?= $form->field($model, 'email')->textInput()->label('Почта')  ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Пароль')  ?>

            <?= $form->field($model, 'passconfirm')->passwordInput()->label('Повторите пароль')  ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div style="color:#999;">
                <br>Уже есть аккаунт? 
                <br><?= Html::a('Войти', ['login'], ['class' => 'btn btn-primary']) ?>
                <br> 
                <br> Чтобы использовать калькулятор в гостевом режиме, введите следующие данные: <br><strong>почта: </strong> guest@pochta.pochta <br><strong>пароль:</strong> guest1
                <br> Вам будет доступна функция расчёта стоимости доставки без сохранения результатов.
            </div>
                
            </div>

        </div>
    </div>
</div>
