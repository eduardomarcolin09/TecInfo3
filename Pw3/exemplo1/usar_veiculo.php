<?php 

# usar_veiculo.php
require('veiculo.php');
require('quadriciclo.php');

$q = new Quadriciclo();
$q->ligar();
$q->acelerar();
$q->getVelocidade();