<?php

class Cartas{

private int $num;
private string $nome;

    public function __toString()
    {
        return $this->num . " - " . $this->nome . "\n";
    }

/**
 * Get the value of num
 */
public function getNum(): int
{
return $this->num;
}

/**
 * Set the value of num
 */
public function setNum(int $num): self
{
$this->num = $num;

return $this;
}

/**
 * Get the value of nome
 */
public function getNome(): string
{
return $this->nome;
}

/**
 * Set the value of nome
 */
public function setNome(string $nome): self
{
$this->nome = $nome;

return $this;
}

}

$baralho = [];

$c1 = new Cartas();
$c1-> setNum(1);
$c1-> setNome("Um");

$c2 = new Cartas();
$c2-> setNum(2);
$c2-> setNome("Dois");

$c3 = new Cartas();
$c3-> setNum(3);
$c3-> setNome("Três");

$c4 = new Cartas();
$c4-> setNum(4);
$c4-> setNome("Quatro");

$c5 = new Cartas();
$c5-> setNum(5);
$c5-> setNome("Cinco");

$c6 = new Cartas();
$c6-> setNum(6);
$c6-> setNome("Seis");

$c7 = new Cartas();
$c7-> setNum(7);
$c7-> setNome("Sete");

array_push($baralho, $c1);
array_push($baralho, $c2);
array_push($baralho, $c3);
array_push($baralho, $c4);
array_push($baralho, $c5);
array_push($baralho, $c6);
array_push($baralho, $c7);

$cartaSorteada = $baralho[array_rand($baralho)];

echo "Cartas disponíveis:\n";

foreach($baralho as $carta){
    echo $carta;
}

$acertou = false;

do{

    $palpite = readline("Escolha uma carta: \n");

    if($palpite == $cartaSorteada->getNum()){
        echo "Voce acertou!\n";
        echo "\nA carta sorteada era " . $cartaSorteada;
        $acertou = true;
    }
    else{
        echo "Tente novamente, voce errou\n";
    }

}
while(!$acertou);
