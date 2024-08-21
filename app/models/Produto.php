<?php 

namespace App\Models;
use Exception;

class Produto{


    //atributos

//acesso tipo nomeAtributo
public string $nome;

public float $valor;


//metodos

public function __construct(){

}
//pNome vem  
public function setNome(string $pNome) {
        $this->nome = $pNome;

}
public function setValor(float $pValor) {
        if ($pValor<=0){
            throw new Exception();
        }
        $this->valor = $pValor;

}

public function getNome() {
    return $this->nome;

}
public function getValor() {
    return $this->valor;
}


}



?>