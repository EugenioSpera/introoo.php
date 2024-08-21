<?php

namespace App\Models;

class Pessoa {

    private string $nome;
    private string $cpf;
    private int $idade;


    public function __construct(string $pNome, string $pCpf, int $pIdade){

        $this->setNome($pNome); 
        $this->setCpf($pCpf); 
        $this->setIdade($pIdade); 


        /**
         * Get the value of pCpf
         */
        public function getPCpf()
        {
                return $this->pCpf;
        }
    }


     /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    /**
     * Get the value of idade
     *
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @param int $idade
     *
     * @return self
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

   


}

?>