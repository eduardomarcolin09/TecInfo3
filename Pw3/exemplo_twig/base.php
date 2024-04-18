<?php
// index.php

// Carrega o carregador do Twig
require_once('twig_carregar.php');
session_start();
$usuario = $_SESSION['usuario'];
// Motra o template na tela
echo $twig->render('_base.html', [
    'usuario' => $usuario
]);