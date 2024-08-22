<?php
 
// Corrigir os caminhos dos arquivos
require __DIR__ . "/app/models/Produto.php";
require __DIR__ . "/app/models/Pessoa.php";
 
use app\models\{Pessoa,Produto}; // nome do pacote namespace;
 
$x = 10;
$y = 1000;
 
$x = $y;
$y = 100;
 
// $pessoa1 = new Pessoa("Magali", "22233344455",$dataNascimento);
// $pessoa2 = new Pessoa("Cebolinha", "11133344422",$dataNascimento);
 
// $pessoa2 = $pessoa1;
// $pessoa1->setNome("Mônica");
 
 
//var_dump($x);
//var_dump($y);
//var_dump($pessoa1);
//var_dump($pessoa2);
 
 //Criar instâncias das classes e definir propriedades
 $produto1 = new Produto(); // criando o objeto | Instanciando a classe
 $produto1->setNome("Queijo");
 $produto1->setValor(20.00);
 
 $produto2 = new Produto();
 $produto2->setNome("Coca-cola"); // Corrigido de "-" para "="
 
 try {
     $produto2->setValor(8,00);
 } catch (\Throwable $th) {
     echo $th->getMessage(); //mensagem de erro caso algo inesperado ocorra
 }
 
$dataNascimento = new DateTime('1994-06-25');

$cliente = new Pessoa("Juca","55599988877",$dataNascimento);
 
//   echo "Produto 1: " . $produto1->getNome() . "; " . $produto1->getValor() . "<br>";

  echo$produto1->exibirDadosProduto() . "<br>";
  echo$produto2->exibirDadosProduto() . "<br>"; 
  echo$cliente->exibirDadosPessoa() . "<br>";  
  echo$cliente->retornarIdadePessoa() . "<br>";
  
?>