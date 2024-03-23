<?php 
// exemplo1/classe.php

/** Vocês tem 9 minutos para criar uma classse chamada Carro que tenha os métodos
 * acelerar() e frear()
 *  Eles irão modificar uma propriedade. 
 * privada chamada "velocidade".
 * A velocidade pode ser obtida pelo método getVelocidade.
*/


class Carro {

    private $velocidade;

    public function _construct($velocidade) {
        $this->velocidade = $velocidade;
    }

    // get = Retornar informação
    // set = Gravar informação
    public function getVelocidade() {
        return $this-> velocidade;
    }

    public function acelerar() {
        $this->velocidade += 10;
    }

    public function frear() {
        $this->velocidade =- 10;
        if($this->velocidade < 0) {
            $this->velocidade = 0;
        }
    }
}

$meu_carro = New Carro;
$meu_carro->acelerar();
$meu_carro->acelerar();
echo $meu_carro->getVelocidade() . "<br>";
$meu_carro->frear();
$meu_carro->frear();

echo $meu_carro->getVelocidade();