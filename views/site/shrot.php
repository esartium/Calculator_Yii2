<?php
use yii\helpers\Html;
use yii\models\CalculatorForm;
?>

<p class="y">Вы ввели следующую информацию:</p>
<ul class="y">
    <li><label>тип сырья</label>: <?= Html::encode($model->raw_types) ?></li>
    <li><label>тоннаж</label>: <?= Html::encode($model->tonnazh) ?></li>
    <li><label>месяц</label>: <?= Html::encode($model->month) ?></li>
</ul>

<div>
<?php
echo 'Вычисленная стоимость: ' . $st;
?>
</div>

<?php 
$model->pricelist();
?>


