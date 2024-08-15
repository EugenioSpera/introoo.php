<?php

class Produto{


    //atributos

//acesso tipo nomeAtributo
public string $nome;

public float $valor;


//metodos

public function __construct(){

}
public function __construct($pNome, $pValor){
    $this->nome=$pNome;
    this->valor=$pValor;

}

}



//Classe produto
//nome e valor 

$produto1 = new Produto(); // quando usa new, estamos criando um novo objeto.
$produto1->nome="Queijo";
$produto1->valor=20.00;


$produto2 = new Produto("Coca Cola", 10.00); // quando usa new, estamos criando um novo objeto.





echo " O valor do produto ".$produto1->nome . " é R$ " .$produto1->valor . "<br>"; 


echo " O valor do produto ".$produto2->nome . " é R$ " .$produto2->valor;




?>