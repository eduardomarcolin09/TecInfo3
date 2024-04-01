<?php 
// compras_alterar.php
require('inc/banco.php');

$item = $_POST['item'] ?? null;
$id = $_POST['id'] ?? null;

if($item && $id) {
    $query = $pdo->prepare("UPDATE compras SET item = :item WHERE id = :id");
    // Executar consulta sem precisar fazer o bind previamente
    $query->execute([
        ':item' => $item,
        ":id" => $id,
    ]);
}

header('location: compras.php');