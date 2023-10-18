<?php

use yii\helpers\Html;

?>

<p>Вы ввели следующую информацию:</p>
<ul>
    <li><label>тип сырья</label>: <?= Html::encode($model->raw_types) ?></li>
    <li><label>тоннаж</label>: <?= Html::encode($model->tonnazh) ?></li>
    <li><label>месяц</label>: <?= Html::encode($model->month) ?></li>
    <li><label>стоимость</label><?= Html::encode($model->stoimost) ?></li>
</ul>

<p>стоимость: <?= Html::encode($model->stoimost) ?></p>
