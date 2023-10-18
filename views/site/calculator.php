<?php
use app\models\CalculatorForm;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\helpers\html;

$model = new CalculatorForm;

$form = ActiveForm::begin([
    'id' => 'form', 
    'method' => 'post',
]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="/Applications/MAMP/htdocs/web_dz_2/CSS/main.css">
</head>
<body>
    <div id="header"> <div class="subheader"><span id="calc">калькулятор расчёта стоимости доставки </span></div></div>
    
    <div class="mb-3">
        <?= 
        $form->field($model, 'raw_types')
        ->label('тип сырья')
        ->dropDownList([
            'шрот'=>'шрот',
            'жмых'=>'жмых',
            'соя'=>'соя'
        ]);
        ?>
    </div>

    <div class="mb-3">
        <?= 
        $form->field($model, 'tonnazh')
        ->label('тоннаж')
        ->dropDownList([
            '25'=>'25',
            '50'=>'50',
            '75'=>'75',
            '100'=>'100'
        ]);
        ?>
    </div>

    <div class="mb-3">
        <?= 
        $form->field($model, 'month')
        ->label('месяц')
        ->dropDownList([
            'январь'=>'январь',
            'февраль'=>'февраль',
            'август'=>'август',
            'сентябрь'=>'сентябрь',
            'октябрь'=>'октябрь',
            'ноябрь'=>'ноябрь'
        ]);
        ?>
    </div>

    <?= 
    Html::submitButton('рассчитать', ['class'=>'btn-success'])
    ?>

        <?php 
        ActiveForm::end();
        ?>



    <!-- <div id="main">
    <div class="block" id="block">
    <div class="choose" id="obvl">выберите месяц текущего года:</div> -->

    <!-- <div class="selector"><form>
        <label></label>
        <select class="form">
            <option selected disabled>...</option>
            <option> январь </option>
            <option> февраль </option>
            <option> август </option>
            <option> сентябрь </option>
            <option> октябрь </option>
            <option> ноябрь </option>
        </select>
    </form></div>
</div> -->

<!-- <div class="block" id="blockk">
    <div class="choose">выберите тип сырья:</div>

    <div class="selector"><form>
        <label></label>
        <select class="form">
            <option selected disabled>...</option>
            <option> шрот </option>
            <option> жмых </option>
            <option> соя </option>
        </select>
    </form></div>
</div> -->

<!-- <div class="block" id="blockkk">
    <div class="choose" id="obvr">выберите тоннаж:</div>

    <div class="selector"><form>
        <label></label>
        <select class="form">
            <option selected disabled>...</option>
            <option> 25 </option>
            <option> 50 </option>
            <option> 75 </option>
            <option> 100 </option>
        </select>
    </form></div>
</div> -->

<!-- <div id="krug">
<div id="krugg"> -->
<!-- <div id="knopka">
    <form>
        <button type="submit" id="button">рассчитать</button>
    </form>
    <img src="/Applications/MAMP/htdocs/web_dz_2/pic/pngimg.com - wheat_PNG17.png" id="pic" width: 60px;>
</div>
</div>
</div>
</div> -->

</body>
</html>
