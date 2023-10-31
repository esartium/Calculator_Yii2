<?php
use yii\helpers\Html;
?>



<h1>Январь:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->январь}) ") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Февраль:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->февраль})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Август:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->август})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Сентябрь:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->сентябрь})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Октябрь:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->октябрь})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Ноябрь:</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->ноябрь})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>