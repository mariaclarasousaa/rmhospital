<?php

class Medico{

    public $id;
    private $nome;
    private $telefone;
    private $rg;
    private $cpf;
    private $endereco;
    private $crm;

    

    public function setnome($nome){
        $this->nome = $nome;
    }
    public function getnome(){
        return $this->nome;
    }    


    public function setidade($idade){
        $this->idade = $idade;
    }
    public function getidade(){
        return $this->idade;
    }    



    public function setsexo($sexo){
        $this->sexo = $sexo;
    }
    public function getsexo(){
        return $this->sexo;
    }    



   public function setfoto($foto){
       $this->foto = $foto;
   }
   public function getfoto(){
    return $this->foto;
   }



    public function settelefone($telefone){
        $this->telefone = $telefone;
    }
    public function gettelefone(){
        return $this->telefone;
    }    

    
    public function setcurriculo($curriculo){
        $this->curriculo = $curriculo;
    }
    public function getcurriculo(){
        return $this->curriculo;
    }    


    
    public function setrg($rg){
        $this->rg = $rg;
    }
    public function getrg(){
        return $this->rg;
    }    


    public function setcpf($cpf){
        $this->cpf = $cpf;
    }
    public function getcpf(){
        return $this->cpf;
    }       


    public function setendereco($endereco){
        $this->endereco = $endereco;
    }
    public function getendereco(){
        return $this->endereco;
    } 


    public function setcrm($crm){
        $this->crm = $crm;
    }
    public function getcrm(){
        return $this->crm;
    }
}