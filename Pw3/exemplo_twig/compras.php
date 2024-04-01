<?php 
// compras.php
require('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * FROM compras');

// PDO::FETCH_ASSOC = tras só o nome dos campos e não tudooooo
$compras = $dados->fetchAll(PDO::FETCH_ASSOC);

// renderizar o template do twig
// echo "<pre>";
// var_dump($compras);
echo $twig->render('compras.html', [
    'compras' => $compras
]);