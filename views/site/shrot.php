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

<?php 
$model->price();
// $mon = $model->month;
// $r_t = $model->raw_types;
// $ton = $model->tonnazh;
?>

<p class="y"><b> => стоимость2: </b> <?= Html::encode($model->stoimost) ?> </p>
<p class="y"><b> => стоимость3: </b> <?php echo $model->stoimost; ?> </p>
<p class="y"><b> => стоимость4: </b> <?php var_dump($model->price()); ?> </p>




<h1>Январь:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->январь}) ") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Январь:</h1>
<ul>
    <?php
print_r($st);
var_dump($st);
?>
</ul>

<h1>Февраль:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->февраль})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Август:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->август})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Сентябрь:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->сентябрь})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Октябрь:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->октябрь})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Ноябрь:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->ноябрь})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>