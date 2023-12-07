<?php

class Pessoa
{
    private $id;
    private $nome;
    private $endereco;
    private $sexo;
    private $nascimento;
    private $cpf;
    private $bairro;
    private $cep;
    private $telefone;
    private $cidade;
    private $rg;
    private $nomeDoResponsavel;
    private $medico;
    private $datadaInternaçao;
    private $justificativadaInternaçao;
    private $crm;


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
    public function getId($id)
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of endereco
     */
    public function getEndereco($endereco)
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

        /**
     * Get the value of endereco
     */
    public function getCrm()
    {
        return $this->crm;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */
    public function setCrm($crm)
    {
        $this->crm = $crm;

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