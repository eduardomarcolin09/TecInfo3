<?php 
// compras_pegando_alterar.php
require('inc/banco.php');
require('twig_carregar.php');

$id = $_GET['indice'] ?? null;

if($id) {
    $query = $pdo->prepare("SELECT * FROM compras WHERE id = :id");
    $query->bindValue(':id', $id);
    $query->execute();
    $compras = $query->fetch(PDO::FETCH_ASSOC);
}


echo $twig->render('compras_alterar.html', [
    'id' => $id,
    'compras' => $compras['item']
]);