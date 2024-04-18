<?php 

require("twig_carregar.php");
require_once("inc/banco.php");

$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$senha_cripto = password_hash($senha, PASSWORD_BCRYPT);

if($usuario && $senha){ 
    $query = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)");
    $query->execute([
        ':usuario' => $usuario,
        ":senha" => $senha_cripto,
    ]);
    echo $twig->render('index.html', [
        'usuario' => $usuario,
        'senha' => $senha_cripto
    ]);
}
else {
    echo "Usuário e senha devem estar preenchidos, por favor volte <br>";
    echo "<a href='templates/novousuario.html'>Inserir novo usuário</a>";
}


