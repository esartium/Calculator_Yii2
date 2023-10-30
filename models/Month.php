<?php

namespace app\models;

abstract class Month extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    private static $month = [

        'январь' => [
            'шрот' => [
                '25'=> '125',
                '50'=> '145',
                '75'=> '136',
                '100'=> '138',
            ],
            'жмых'=> [
                '25'=> '121',
                '50'=> '118',
                '75'=> '137',
                '100'=> '142',
            ],
            'соя'=> [
                '25'=> '137',
                '50'=> '147',
                '75'=> '112',
                '100'=> '122',
            ],
        ],
        'февраль' => [
            'шрот' => [
                '25'=> '121',
                '50'=> '118',
                '75'=> '137',
                '100'=> '142',
            ],
            'жмых'=> [
                '25'=> '137',
                '50'=> '121',
                '75'=> '124',
                '100'=> '131',
            ],
            'соя'=> [
                '25'=> '125',
                '50'=> '145',
                '75'=> '136',
                '100'=> '138',
            ],
        ],
        'август' => [
            'шрот' => [
                '25'=> '137',
                '50'=> '119',
                '75'=> '141',
                '100'=> '117',
            ],
            'жмых'=> [
                '25'=> '124',
                '50'=> '145',
                '75'=> '136',
                '100'=> '138',
            ],
            'соя'=> [
                '25'=> '124',
                '50'=> '145',
                '75'=> '136',
                '100'=> '138',
            ],
        ],
        'сентябрь' => [
            'шрот' => [
                '25'=> '126',
                '50'=> '121',
                '75'=> '137',
                '100'=> '124',
            ],
            'жмых'=> [
                '25'=> '137',
                '50'=> '147',
                '75'=> '143',
                '100'=> '112',
            ],
            'соя'=> [
                '25'=> '122',
                '50'=> '143',
                '75'=> '112',
                '100'=> '117',
            ],
        ],
        'октябрь' => [
            'шрот' => [
                '25'=> '124',
                '50'=> '122',
                '75'=> '131',
                '100'=> '147',
            ],
            'жмых'=> [
                '25'=> '122',
                '50'=> '143',
                '75'=> '112',
                '100'=> '117',
            ],
            'соя'=> [
                '25'=> '137',
                '50'=> '119',
                '75'=> '141',
                '100'=> '117',
            ],
        ],
        'ноябрь' => [
            'шрот' => [
                '25'=> '128',
                '50'=> '147',
                '75'=> '143',
                '100'=> '112',
            ],
            'жмых'=> [
                '25'=> '125',
                '50'=> '145',
                '75'=> '136',
                '100'=> '138',
            ],
            'соя'=> [
                '25'=> '121',
                '50'=> '118',
                '75'=> '137',
                '100'=> '142',
            ],
        ],

    ];
}