<?php

require __DIR__ . "./models/Produto.php";
require __DIR__ . "./models/Pessoa.php";
use app\models\{Pessoa, Produto};


// class Produto{


//     //atributos
//     //nomenclatura sempre em PascalCase

// //acesso tipo nomeAtributo
// public string $nome;

// public float $valor;


// //metodos

// // public function __construct(){

// // }
// // public function __construct($pNome, $pValor){
// //     $this->nome=$pNome;
// //     $this->valor=$pValor;

// // }

// }



//Classe produto
//nome e valor 

$produto1 = new Produto(); // quando usa new, estamos criando um novo objeto.
$produto1->setNome("Queijo");
$produto1->setValor(20.00);


$produto2 = new Produto(); // quando usa new, estamos criando um novo objeto.
$produto2->setNome("Coca-cola");
$produto2->setValor(8.00);

$cliente = new Pessoa("Juca","55599988877",41);





echo "Produto 1: ".$produto1->getNome() . "; " .$produto1->getValor() . "<br>"; 


echo "Produto 2: ".$produto2->getNome() . "; " .$produto2->getValor() . "<br>"; 


echo " Pessoa 1: ".$cliente->getNome() . "; " .$cliente->getCpf() . "; " .$cliente->getIdade();




?>