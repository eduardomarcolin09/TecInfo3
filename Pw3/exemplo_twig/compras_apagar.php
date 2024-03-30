<?php 

require('inc/banco.php');

$id = $_GET['indice'] ?? null;

$query = $pdo->prepare('DELETE FROM compras WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute();

header('location: compras.php');