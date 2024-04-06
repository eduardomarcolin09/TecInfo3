<?php 
// horario.php
require('twig_carregar.php');

use Carbon\Carbon;

# $data = Carbon::now('America/Sao_Paulo');

$data = Carbon::now('America/Sao_Paulo')
        ->locale('pt-BR')
        ->isoFormat('LLLL'); // formata em 4L (ta na documentação)

$amanha = Carbon::now('America/Sao_Paulo')
        ->addDay() // Adiciona um dia, 'Horário de amanhã'
        ->locale('pt-BR')
        ->isoFormat('LLLL'); // formata em 4L (ta na documentação)

# echo $data->toString(); mostra o dia da semana/mês

echo $twig->render('horario.html', [
    'hoje' => $data,
    'amanha' => $amanha
]);