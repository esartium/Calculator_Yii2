<?php
use yii\helpers\Html;
use yii\model\CalculatorForm;
?>


<h1>Shrot</h1>
<ul>
<?php foreach ($calcs as $shrot): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$shrot->id} ({$shrot->январь}) ({$shrot->февраль}) ({$shrot->август}) ({$shrot->сентябрь}) ({$shrot->октябрь}) ({$shrot->ноябрь})") ?>:
        <?= $shrot->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>