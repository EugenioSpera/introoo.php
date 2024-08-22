<?php
 
namespace app\models;


use DateTime;


class Pessoa {    
 
  private string $nome;
 
  private string $cpf;
 
  private DateTime $dataNascimento;
 
  public function __construct(string $pNome, string $pCpf, DateTime $pDataNascimento){ 

    $this->setNome($pNome);
    $this->setCpf($pCpf);
    $this->dataNascimento = $pDataNascimento;
  }

  public function exibirDadosPessoa(): string
    {
        $mensagem = "Pessoa: " . $this->getNome() . ", " . $this->getCpf() . ", " . $this->getDataNascimento();
        return $mensagem;
    }
 
 
 
  /**
   * Get the value of idade
   */
  public function getDataAtual()
{    
    
    $dataAtual = new DateTime();
        return $dataAtual->format('y-m-d');
}

 
  
 
  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }
 
  /**
   * Set the value of nome
   *
   * @return  self
   */
  public function setNome($nome)
  {
    $this->nome = $nome;
 
    return $this;
  }
 
  /**
   * Get the value of cpf
   */
  public function getCpf()
  {
    return $this->cpf;
  }
 
  /**
   * Set the value of cpf
   *
   * @return  self
   */
  private function setCpf($cpf)
  {
    $this->cpf = $cpf;
 
    return $this;
  }

  /**
   * Get the value of dataNascimento
   *
   * @return DateTime
   */
  public function getDataNascimento()
  {
    return $this->dataNascimento->format('d/m/y');
  }
 /*----------------------------------------------------*/
  public function retornarIdadePessoa(){ 
    
   return $this->DataNascimento- $this->$dataAtual;

}

}

?>