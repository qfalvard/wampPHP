<?php

// 1
$ab = array(0, 1, 2, 3, 4);
var_dump($ab[3]);

// 2
$a = [
    [0, 1],
    [2, [3]],
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "quatre" => 4,
];
var_dump($a[1][1]);

// 3
$a = [
    [0, 1],
    [
        2,
        [3]
    ]
];
var_dump($a[1][1]);

// 4
$a = [
    "a" => [
        "b" => 0,
        "c" => 1,
    ],
    "d" => [
        "e" =>  2,
        "f" => [
            "g" => 3
        ]
    ]
];
var_dump($a['d']['f']);

//5
$a = [
    "a" => [
    "b" => 0,
    "c" => 1,
    ],
    "d" => [
        2,
        "f" => [
            "g" => 3
        ]
    ]
];

// 6

$a = [0, 1, 2, 3, 4, 5, 6];

echo array_sum ($a);

// 7 Créez un array $films contenant les données suivantes :

$films = [
    'The Shawshank Redemption' => [
        'Année' => 1994,
        'Note' => 9.2
    ],
    'The Godfather' => [
        'Année' => 1972,
        'Note' => 9.1
    ],  
    'The Dark Knight' => [
        'Année' => 2008,
        'Note' => 9.0
    ],
    'The Lord of the Rings: The Return of the King' => [
        'Année' => 2003,
        'Note' => 8.9
    ],
    'Pulp Fiction' => [
        'Année' => 1994,
        'Note' => 8.9
    ]
    ];

// 8 a
$films = [
    'The Shawshank Redemption',
    'The Godfather',
    'The Dark Knight',
    'The Lord of the Rings: The Return of the King',
    'Pulp Fiction'
];
// 8 b
foreach ($films as $key) {
    var_dump($key);
}
// 8 c
foreach ($films as $key) {
    echo'<h4>' . $key .  '</h4>';

// 8 d
}foreach ($films as $key) {
    echo'<ul><li>' . $key .  '</li></ul>';
}

// 9
$array = [
    "The Shawshank Redemption" => "Frank Darabont",
    "The Godfather" => "Francis Ford Coppola",
    "The Dark Knight" => "Christopher Nolan",
    "The Lord of the Rings" => "Peter Jackson",
    "Pulp Fiction" => "Quentin Tarantino",
];

// 9 b c
$films = [
    'The Shawshank Redemption' => [
        'Année' => 1994,
        'Note' => 9.2
    ],
    'The Godfather' => [
        'Année' => 1972,
        'Note' => 9.1
    ],
    'The Dark Knight' => [
        'Année' => 2008,
        'Note' => 9.0
    ],
    'The Lord of the Rings: The Return of the King' => [
        'Année' => 2003,
        'Note' => 8.9
    ],
    'Pulp Fiction' => [
        'Année' => 1994,
        'Note' => 8.9
    ]
];

echo('<ul>');
foreach ($films as $key => $value) {
    echo('<li>Titre : ' . $key);
    foreach($value as $kkey => $vvalue) {
        echo('<br>' . $kkey . ' : ' . $vvalue);
    };
    echo('</li>');
};
echo('</ul>');