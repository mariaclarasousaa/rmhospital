<?php

class Paciente{
    private $Nome;

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getNomeDoRequisitante(){
        return $this->NomeDoRequisitante;
    }
    private $dataNasc;

    public function setdataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }    
    public function getdataNasc(){
        return $this->dataNasc;
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