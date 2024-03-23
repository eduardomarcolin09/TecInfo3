<?php 
# quadriciclo.php

class Quadriciclo extends Veiculo {
    public function __construct() {
        $this->rodas = 4;
    }

    public function acelerar() {
        $this->velocidade += 5;
    }
}