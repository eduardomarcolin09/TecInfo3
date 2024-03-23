<?php 

# veiculo.php
/**
 * Implementar métodos ligar() e desligar()
 * A velocidade só pode deixar de ser 0
 * enquanto veiculo estiver ligado
 * Obviamente será necessária uma
 * propriedade indicando se o veículo está ligado ou não (true/false)
 */


class Veiculo {

    protected $velocidade;
    protected $rodas;
    protected $motor_ligado = false;

    public function _construct($velocidade, $rodas, $motor_ligado) {
        $this->velocidade = $velocidade;
        $this->rodas = $rodas;
        $this->motor_ligado = $motor_ligado;
    }

    // get = Retornar informação
    // set = Gravar informação
    public function getVelocidade() {
        return $this-> velocidade;
    }

    public function ligar() {
        $this->motor_ligado = true;
    }

    public function desligar() {
        $this->motor_ligado = false;
    }

    public function acelerar() {
        if($this->motor_ligado) {
            $this->velocidade += 10;
        }
    }

    public function frear() {
        $this->velocidade =- 10;
        if($this->velocidade < 0) {
            $this->velocidade = 0;
        }
    }
}