<?php
// 4 1
$tableau = [
    'nom' => 'tonton',
    'prenom' => 'David',
    'adresse' => 'allée'
];
var_dump($tableau['prenom']);

//5 1

$saison = [
    // Premier type tableau
    'printemps' => [
        'celeri' => [
            'quantité' => 10,
            'prix' => 1
        ],
        'radis' => [
            'quantité' => 3,
            'prix' => 5
        ]
    ],
    // deuxième type tableau
    'été' => [
        [
            'nom' => 'tomate',
            'quantité' => 10,
            'prix' => 167
        ],
        [
            'nom' => 'fraises',
            'quantité' => 10,
            'prix' => 1
        ]
    ]
];
// var-dump 1er type
var_dump($saison['printemps']['radis']['quantité']);
// var_dump 2eme tableau
var_dump($saison['été'][0]);
var_dump($saison['été'][0]['nom']);
var_dump($saison['été'][0]['prix']);


$pays = [
    'france' => [
        'capitale' => 'Paris',
        'population' => 50,
    ],
    'irlande' => [
        'capitale' => 'Dublin',
        'population' => 10,
    ],
    'allemagne' => [
        'capitale' => 'Berlin',
        'population' => 01234,
    ]
];

$paysChoisi = 'irlande';

var_dump('population pays  '.$pays[$paysChoisi]['population']);

//6 1
$nombre = 23;

// fonction if classique
if ($nombre < 100) {
    var_dump('trop petit');
} else {
    var_dump('ok c est bon');
}
// fonction ternaire
$test = ($nombre < 100) ? var_dump('trop petit') : var_dump('ok c est bon') ;

// 7

$date = date('Y');



// 8

$year = 1944;

if($year %4) {
    var_dump($year . ' pas bissextile');
} else {
    var_dump($year . ' est bissextile');
}

// comparaison date avec timestamp
