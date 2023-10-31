<?php
use yii\helpers\Html;
use yii\model\CalculatorForm;
?>


<h1>Январь:</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->январь}) ") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
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