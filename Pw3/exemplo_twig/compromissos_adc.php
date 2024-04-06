<?php 
// compras_adc.php
require('inc/banco.php');

$descricao = $_POST['descricao'] ?? null;
$data = $_POST['data'] ?? null;

if($data && $descricao) {
    $query = $pdo->prepare("INSERT INTO compromissos (descricao, `data`) VALUES (:descricao, :data)");
    $query->execute([
        ':descricao' => $descricao,
        ":data" => $data,
    ]);
}

header('location:compromissos.php');