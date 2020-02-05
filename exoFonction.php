<?php

//hello
function hello() {
    return('hello <br>');
}
echo(hello());

// vitesse
function calcul(int $metre = 0, int $sec = 0) {
    echo($metre / $sec . 'm/s <br>');
}
echo(calcul(10, 5));

//brin ADN

$str1 = 'CATCGTAATGACGGCCT';
$str2 = 'GAGCCTACTAACGGGAT';

$arr1 = str_split($str1);
$arr2 = str_split($str2);

print_r($arr1);
echo('<br>');
print_r($arr2);

echo('<br>');
echo('<br>');
$result = array_diff_assoc($arr1, $arr2);

print_r(count($result) . '<br><br>');

// Ajouter des secondes à une date donnée

function addSecs (string $date) {

    $dateObject = new DateTime($date);

    var_dump($dateObject);

    $gigaseconds = pow(10,9);
    $gigaseconds = 10e9;
    $gigaseconds = 1000000000;
}



// Gerer le nom du robot

// Endiguer la guerre
$tableauNom = [];
function randomImmat() {

    global $tableauNom;

    $lettreOk = [
        'r',
        'z',
        's',
        'x',
        'w',
        't'
    ];

    $randomName = '';

    for ($i = 0; $i < 3; $i++) {
        $randLettre = array_rand($lettreOk, 1);
        var_dump($lettreOk[$randLettre]);
        $randomName .= $lettreOk[$randLettre];
    }

    $random = random_int(0, 9999);

    if($random > 1000 ){
        $numberName = $random;
    } else if($random < 10){
        $numberName = '000' . $random;
    } else if ($random < 100) {
        $numberName = '00' . $random;
    } else if ($random < 1000) {
        $numberName = '0' . $random;
    }

    $randomName .= '-' . $numberName;

    if(!in_array($randomName, $tableauNom)){
        $tableauNom[] = $randomName;
        return $randomName;
    } else{
        echo 'Attentoion aux robots!!!';
    }
}

var_dump (randomImmat());

var_dump($tableauNom);

// Vérifier les circuits du robot

function bug(int $bug) {

    $compo = [];

    if ($bug % 2 === 0) { $compo[] = 'bras gauche '; }
    if ($bug % 3 === 0) { $compo[] = 'bras droit '; }
    if ($bug % 5 === 0) { $compo[] = 'carte mère '; }
    if ($bug % 7 === 0) { $compo[] = 'processeur '; }
    if ($bug % 11 === 0) { $compo[] = 'défluxeur de zip '; }
    if ($bug % 13 === 0) { $compo[] = 'moteur '; }

    return $compo;
}

echo implode(bug(55)); // implode retourne le contenu d'un tableau en string. Ici bug() retourne un tableau compo[], implode en transforme le contenu en string.

// Gérer les mouvements du robot

// Positionnement du robot

function move(string $letter){

    $x = 0;
    $y = 0;

    $table = [
        'r' => 'right',
        'l' => 'left',
        'f' => 'front',
        'b' => 'backwards'
    ];
    $position = [
        'r' => [1, 0],
        'l' => [-1, 0],
        'f' => [0, 1],
        'b' => [0, -1]
    ];
    
    $letter = str_split($letter);
    $retour = [];
    foreach($letter as $value) {

        $retour[] = $table[$value];
        $x = $x + $position[$value][0];
        $y += $position[$value][1];

    }

    return [$retour, $x, $y];

}
var_dump(move('rlf'));