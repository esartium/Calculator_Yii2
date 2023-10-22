<?php
use app\models\CalculatorForm;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\helpers\html;


$model = new CalculatorForm;

// $form = ActiveForm::begin([
//     'id' => 'form', 
//     'method' => 'post',
// ]);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="../web/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid" id="header1">
        <div class="subheader" class="container-fluid">
            <span id="calc">калькулятор расчёта стоимости доставки</span>
        </div>
    </div>


    <!-- <div id="mainshtuka"> -->

    

    <div class="row" id="highline2">
                <div class="col-md-3">
                <div class="choose" id="obvl">выберите месяц текущего года</div>
                </div>
                <div class="col-md-3">
                <div class="choose">выберите тип сырья</div>
                </div>
                <div class="col-md-3">
                <div class="choose" id="obvr">выберите тоннаж</div>
                </div>
    </div>
    </div>

                <!-- <div class="col-md-6" > -->
                <div>
                <?php
                $form = ActiveForm::begin([
                'id' => 'form', 
                'method' => 'post',
                ]);
                ?>
                
                <!-- <div class="block" id="block"> -->
                <div class="selector">
                <?= 
                $form->field($model, 'raw_types')
                ->label('тип сырья:')
                ->dropDownList([
                    'шрот'=>'шрот',
                    'жмых'=>'жмых',
                    'соя'=>'соя'
                ]);
                ?>
                </div>
            <!-- </div> -->

                
                <!-- <div class="block" id="blockk"> -->
                <div class="selector">
                <?= 
                $form->field($model, 'tonnazh')
                ->label('тоннаж:')
                ->dropDownList([
                    '25'=>'25',
                    '50'=>'50',
                    '75'=>'75',
                    '100'=>'100'
                ]);
                ?>
                </div>
            <!-- </div> -->

                
                <!-- <div class="block" id="blockkk"> -->
                <div class="selector">
                <?= 
                $form->field($model, 'month')
                ->label('месяц:')
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
            <!-- </div> -->
                </div>
            

                <div id="righ">
                <div id="knopka">
                <?= 
                Html::submitButton('рассчитать', ['class'=>'btn-success', 'id' => 'button'])
                ?>
                <img src="https://pngimg.com/d/wheat_PNG17.png" id="pic" width: 60px;>
                <div id="krug">
                <div id="krugg">
                </div></div></div>
                </div>


    <?php 
    ActiveForm::end();
    ?>

            </div>
    </div>


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
