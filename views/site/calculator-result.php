<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid" id="header2">
        <div class="subheader2" class="container-fluid">
            <span id="calc2">вы ввели следующую информацию:</span>
            <div>
                <p class="yyy">тип сырья: <?= Html::encode($model->raw_types) ?></p>
                <p class="yyy">тоннаж: <?= Html::encode($model->tonnage) ?></p>
                <p class="yyy">месяц: <?= Html::encode($model->month) ?></p>
            </div>
            <span id="calc2">
                <?php
                    echo 'Вычисленная стоимость: ' . $st;
                ?>
            </span>
        </div>
</div>

<div id="pricelist">
    <p>стоимость была вычислена с помощью таблицы: </p>
        <?php 
            $model->pricelist();
        ?>
</div>

</body>
</html>