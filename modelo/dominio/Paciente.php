<?php

class Paciente{
    private $Nome;

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getNome(){
        return $this->Nome;
    }
    private $nascimento;

    public function setnascimento($nascimento){
        $this->nascimento = $nascimento;
    }    
    public function getnascimento(){
        return $this->nascimento;
    }    
    private $sexo;

    public function setsexo($sexo){
        $this->sexo = $sexo;
    }
    public function getsexo(){
        return $this->sexo;
    }
    private $rg;

    public function setrg($rg){
        $this->rg = $rg;
    }
    public function getrg(){
        return $this->rg;
    }
    private $cpf;

    public function setcpf($cpf){
        $this->cpf = $cpf;
    }
    public function getcpf(){
        return $this->cpf;
    }
}