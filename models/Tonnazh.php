<?php

namespace app\models;
class Tonnazh extends \yii\base\BaseObject 
{
    private static $tonnazh = [
        '25' => [
            'шрот' => [
                'январь' => '125',
                'февраль' => '121',
                'август' => '137',
                'сентябрь' => '126',
                'октябрь' => '124',
                'ноябрь' => '128',
            ],
            'жмых' => [
                'январь' => '121',
                'февраль' => '137',
                'август' => '124',
                'сентябрь' => '137',
                'октябрь' => '122',
                'ноябрь' => '125',
            ],
            'соя' => [
                'январь' => '137',
                'февраль' => '125',
                'август' => '124',
                'сентябрь' => '122',
                'октябрь' => '137',
                'ноябрь' => '121',
            ],
        ],
        '50' => [
            'шрот' => [
                'январь' => '145',
                'февраль' => '118',
                'август' => '119',
                'сентябрь' => '121',
                'октябрь' => '122',
                'ноябрь' => '147',
            ],
            'жмых' => [
                'январь' => '118',
                'февраль' => '121',
                'август' => '145',
                'сентябрь' => '147',
                'октябрь' => '143',
                'ноябрь' => '145',
            ],
            'соя' => [
                'январь' => '147',
                'февраль' => '145',
                'август' => '145',
                'сентябрь' => '143',
                'октябрь' => '119',
                'ноябрь' => '118',
            ],
        ],
        '75' => [
            'шрот' => [
                'январь' => '136',
                'февраль' => '137',
                'август' => '141',
                'сентябрь' => '137',
                'октябрь' => '131',
                'ноябрь' => '143',
            ],
            'жмых' => [
                'январь' => '137',
                'февраль' => '124',
                'август' => '136',
                'сентябрь' => '143',
                'октябрь' => '112',
                'ноябрь' => '136',
            ],
            'соя' => [
                'январь' => '112',
                'февраль' => '136',
                'август' => '136',
                'сентябрь' => '112',
                'октябрь' => '141',
                'ноябрь' => '137',
            ],
        ],
        '100' => [
            'шрот' => [
                'январь' => '138',
                'февраль' => '142',
                'август' => '117',
                'сентябрь' => '124',
                'октябрь' => '147',
                'ноябрь' => '112',
            ],
            'жмых' => [
                'январь' => '142',
                'февраль' => '131',
                'август' => '138',
                'сентябрь' => '112',
                'октябрь' => '117',
                'ноябрь' => '138',
            ],
            'соя' => [
                'январь' => '122',
                'февраль' => '138',
                'август' => '138',
                'сентябрь' => '117',
                'октябрь' => '117',
                'ноябрь' => '142',
            ],
        ],
    ];
}