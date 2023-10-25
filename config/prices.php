<?php

return $prices = [
    "соя" => [
        "январь" => [
            "25" => "137",
            "50" => "147",
            "75" => "112",
            "100" => "122",
        ],
        "февраль" => [
            "25" => "125",
            "50" => "145",
            "75" => "136",
            "100" => "138",
        ],
        "август" => [
            "25" => "124",
            "50" => "145",
            "75" => "136",
            "100" => "138",
        ],
        "сентябрь" => [
            "25" => "122",
            "50" => "143",
            "75" => "112",
            "100" => "117",
        ]
        ,
        "октябрь" => [
            "25" => "137",
            "50" => "119",
            "75" => "141",
            "100" => "117",
        ],
        "ноябрь" => [
            "25" => "121",
            "50" => "118",
            "75" => "137",
            "100" => "142",
        ],
    ], 
    "шрот" => [
        "январь" => [
            "25" => "125",
            "50" => "145",
            "75" => "136",
            "100" => "138",
        ],
        "февраль" => [
            "25" => "121",
            "50" => "118",
            "75" => "137",
            "100" => "142",
        ],
        "август" => [
            "25" => "137",
            "50" => "119",
            "75" => "141",
            "100" => "117",
        ],
        "сентябрь" => [
            "25" => "126",
            "50" => "121",
            "75" => "137",
            "100" => "124",
        ],
        "октябрь" => [
            "25" => "124",
            "50" => "122",
            "75" => "131",
            "100" => "147",
        ],
        "ноябрь" => [
            "25" => "128",
            "50" => "147",
            "75" => "143",
            "100" => "112",
        ],
    ],
    "жмых" => [
        "январь" => [
            "25" => "121",
            "50" => "118",
            "75" => "137",
            "100" => "142",
        ],
        "февраль" => [
            "25" => "137",
            "50" => "121",
            "75" => "124",
            "100" => "131",
        ],
        "август" => [
            "25" => "124",
            "50" => "145",
            "75" => "136",
            "100" => "138",
        ],
        "сентябрь" => [
            "25" => "137",
            "50" => "147",
            "75" => "143",
            "100" => "112",
        ],
        "октябрь" => [
            "25" => "122",
            "50" => "143",
            "75" => "112",
            "100" => "117",
        ],
        "ноябрь" => [
            "25" => "125",
            "50" => "145",
            "75" => "136",
            "100" => "138",
        ]
    ]
];

$month = [
    "январь",
    "",
    "",
    "",
    "",
    "",
    "",
];

$types = [
    "шрот",
    "соя",
    "жмых",
    "",
    "",
    "",
    "",
];

$tonnazh = [
    "25",
    "50",
    "75",
    "100",
];

foreach ($types as $type) {
    $prices[] = $type;
}