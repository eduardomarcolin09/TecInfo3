<?php 
require('inc/banco.php');
require('twig_carregar.php');

use Carbon\Carbon;

$query = $pdo->prepare("SELECT * FROM compromissos");
$query->execute();
$compromissos = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0 ; $i < count($compromissos) ; $i++){
    $data = $compromissos[$i]['data'];
    $compromissos[$i]['fimdesemana'] = Carbon::parse($data)->isWeekend();
}
    //echo "<pre>";
    //var_dump($compromissos);
    //die;
    
echo $twig->render('compromissos.html', [
    'compromissos' => $compromissos,
]);