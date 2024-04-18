<?php

require("twig_carregar.php");
require_once("inc/banco.php");
session_start();
$usuarioY = $_POST['nome'];
$senhaY = $_POST['senha'];

if($usuarioY && $senhaY) {
    $dados = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
    $dados->bindValue(':usuario', $usuarioY);
    $dados->execute();
    $usuarios = $dados->fetch(PDO::FETCH_ASSOC);
    if($usuarioY = $usuarios['usuario'] && password_verify($senhaY, $usuarios['senha'])) {
        header("location: base.php");
        $_SESSION['usuario'] = $usuarioY;
    }
    else {
        echo "Senha errada";
    }

}