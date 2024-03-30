<?php 

require('inc/banco.php');

$item = $_POST['item'] ?? null;
$id = $_POST['id'] ?? null;

if($item && $id) {
    $query = $pdo->prepare("UPDATE compras SET item = :item WHERE id = :id");
    $query->execute([
        ':item' => $item,
        ":id" => $id,
    ]);
}

header('location: compras.php');