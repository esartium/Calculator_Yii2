<?php
use yii\helpers\Html;
?>



<h1>Январь:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->январь}) ") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Февраль:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->февраль})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Август:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->август})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Сентябрь:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->сентябрь})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Октябрь:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->октябрь})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>

<h1>Ноябрь:</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->ноябрь})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>
