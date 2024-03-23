<?php

class Personagem {

    private $nome;
    private $vida;
    private $ataque;
    private $defesa;
    private $chanceCritico;
    private $multiplicadorCritico;

    public function __construct($nome, $vida, $ataque, $defesa, $chanceCritico, $multiplicadorCritico) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->chanceCritico = $chanceCritico;
        $this->multiplicadorCritico = $multiplicadorCritico;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        $this->vida = $vida;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getDefesa() {
        return $this->defesa;
    }
    public function getChanceCritico() {
        return $this->chanceCritico;
    }

    public function getMultiplicadorCritico() {
        return $this->multiplicadorCritico;
    }

    public function atacar($inimigo) {
        $ataque = $this->getAtaque();
        // sortear de 1 a 100 e ver se esse numero for dentro das chances, se for tu da o critico
        $numero = rand(1,100);
        $dano_final = 0;
        if($numero < $this->getChanceCritico()) {
            $dano_final = (($ataque * $this->getMultiplicadorCritico()) -  $inimigo->getDefesa());
        }
        else {
            $dano_final = ($ataque - $inimigo->getDefesa());
        }

        if($dano_final < 0 ) {
            $dano_final = 0;
        }

            $vida_inimigo = $inimigo->getVida();
            $x = $vida_inimigo - $dano_final;
            $inimigo->setVida($x);
        

    }
 
}

class Jogo {

    private $personagens;
    private $jogadorAtual;

    public function __construct($personagens) {
        $this->personagens = $personagens;
        $this->jogadorAtual = 0;
    }

    public function iniciarJogo() {
        echo "**Início do Jogo!**<br>";
        foreach ($this->personagens as $personagem) {
            echo "{$personagem->getNome()}: Vida {$personagem->getVida()}<br>";
        }

        echo "<br>";
    }

    public function realizarTurno() {
        $personagemAtual = $this->personagens[$this->jogadorAtual];
        if($this->jogadorAtual == 0) {
            $inimigo = $this->personagens[$this->jogadorAtual + 1];
            echo "**Turno do ".$personagemAtual->getNome()." **<br>";
            echo "{$personagemAtual->getNome()} Ataca {$inimigo->getNome()}! <br>";
            $personagemAtual->atacar($inimigo);
            echo $inimigo->getNome().": Vida ".$inimigo->getVida()."<br><br>";
            $this->jogadorAtual = 1;
        }
        elseif($this->jogadorAtual == 1) {
            $inimigo = $this->personagens[$this->jogadorAtual - 1];
            echo "**Turno do ".$personagemAtual->getNome()." **<br>";
            echo "{$personagemAtual->getNome()} Ataca {$inimigo->getNome()}! <br>";
            $personagemAtual->atacar($inimigo);
            echo $inimigo->getNome().": Vida ".$inimigo->getVida()."<br><br>";
            $this->jogadorAtual = 0;
        }
        /*
        Forma mais Simples de fazer:
        $personagemAtual = $this->personagens[$this->jogadorAtual]; 
        $inimigo = $this->personagens[!$this->jogadorAtual];

        echo "**Turno do ".$personagemAtual->getNome()." **<br>";
        echo "{$personagemAtual->getNome()} Ataca {$inimigo->getNome()}! <br>";
        $personagemAtual->atacar($inimigo);
        echo $inimigo->getNome().": Vida ".$inimigo->getVida()."<br><br>";
        $this->jogadorAtual = !$this->jogadorAtual;
        */
    }
    

    public function verificarVencedor() {
        foreach ($this->personagens as $personagem) {
            if ($personagem->getVida() <= 0) {
                return $this->personagens[!$this->jogadorAtual];
            }
        }
    }

}

// Criação de personagens
// $nome, $vida, $ataque, $defesa, $chanceCritico, $multiplicadorCritico
$heroi = new Personagem("Herói", 100, 10, 5, 20, 10);
$monstro = new Personagem("Monstro", 80, 8, 3, 10, 15);

// Criação do jogo
$jogo = new Jogo([$heroi, $monstro]);
$vencedor = null;

// Início do jogo
$jogo->iniciarJogo();

// Loop do jogo

while (!$vencedor) {
    $jogo->realizarTurno();
    $vencedor = $jogo->verificarVencedor(); 
}

// Exibição do vencedor
echo "**{$vencedor->getNome()} venceu!**<br>"; 