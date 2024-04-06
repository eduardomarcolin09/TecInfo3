<?php 
// carbon_exemplos.php
require_once('vendor/autoload.php');

use Carbon\Carbon;

// Agora
echo "Horário atual: " . Carbon::now() . "<br>";

// Adicionar um dia
echo "Horário de amanhã: " . Carbon::now()->addDay() . "<br>";

// Subtrair uma semana
echo "Uma semana atrás era.. " . Carbon::now()->subWeek() . "<br>";

// Adicionar quatro anos
echo "Próximas olimpíadas: " . Carbon::createFromDate(2024)->addYears(4)->year . "<br>";

// Idade de alguém
echo "Sua idade é " . Carbon::createFromDate(2000, 4, 1)->age . "<br>";

// Final de semana ?
if (Carbon::now()->isWeekend()) {
    echo "Festa!";
}
else {
    echo "Aula";
}