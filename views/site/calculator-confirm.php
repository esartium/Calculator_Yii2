<?php

use yii\helpers\Html;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>


<p class="y">Вы ввели следующую информацию:</p>
<ul class="y">
    <li><label>тип сырья</label>: <?= Html::encode($model->raw_types) ?></li>
    <li><label>тоннаж</label>: <?= Html::encode($model->tonnazh) ?></li>
    <li><label>месяц</label>: <?= Html::encode($model->month) ?></li>
</ul>

<p class="y"><b> => стоимость: </b> <?= Html::encode($model->price()); ?> </p>
<p class="y"><b> => стоимость: </b> <?php echo $model->stoimost; ?> </p>
<p class="y"><b> => стоимость: </b> <?php var_dump($model->price()); ?> </p>

<div class="y">
стоимость рассчитана с помощью таблицы: <?= Html::encode($model->pricelist()) ?>
</div>

