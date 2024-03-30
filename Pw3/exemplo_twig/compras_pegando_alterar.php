<?php 
# compras_alterar_excluir.php

require('inc/banco.php');
require('twig_carregar.php');

$id = $_GET['indice'] ?? null;

if($id) {
    $query = $pdo->prepare("SELECT * FROM compras WHERE id = :id");
    $query->bindValue(':id', $id);
    $query->execute();
}

echo $twig->render('alterar.html', [
    'id' => $id,
]);