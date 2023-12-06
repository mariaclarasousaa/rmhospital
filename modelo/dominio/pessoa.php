<?php

class Pessoa
{
    private $id_pessoa;
    private $nome;
    private $mae;
    private $sexo;
    private $nascimento;
    private $cpf;
    private $numero;
    private $bairro;
    private $cep;
    private $telefone;
    private $cidade;
    private $rg;


    public function getcpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setcpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
    /**
     * Get the value of id
     */
    public function getId_pessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId_pessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;

        return $this;
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
     * Get the value of mae
     */
    public function getMae()
    {
        return $this->mae;
    }

    /**
     * Set the value of mae
     *
     * @return  self
     */
    public function setMae($mae)
    {
        $this->mae = $mae;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }
    public function getRg()
    {
        return $this->rg;
    }
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }
}