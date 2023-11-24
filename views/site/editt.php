<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-3 form-control'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); ?>

<?= $form->field($model, 'calculation_id')->textInput(['autofocus' => true])->label('ID расчёта')  ?>

<?= $form->field($model, 'tonnage')->textInput()->label('Тоннаж')  ?>

<?= $form->field($model, 'month')->textInput()->label('Месяц')  ?>

<?= $form->field($model, 'raw_types')->textInput()->label('Тип сырья')  ?>

<?= $form->field($model, 'price')->textInput()->label('Стоимость доставки')  ?>

<div class="form-group">
    <div>
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>