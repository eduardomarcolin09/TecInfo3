<?php
// fruta.php
require('twig_carregar.php');

$frutas = [
    'Abacaxi',
    'Laranja',
    'Banana',
    'Maçã',
    'Uva',
    'Bergamota',
    'Melancia',
];

$frutaEscolhida = $_GET['fruta'] ?? null;

echo $twig->render('fruta.html', [
    'frutas' => $frutas,
    'frutaEscolhida' => $frutas[$frutaEscolhida] ?? null, /* ou... $frutas[$_GET['fruta'] ?? false ] ?? false */
]);