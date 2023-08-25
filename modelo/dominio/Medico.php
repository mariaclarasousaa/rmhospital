<?php

class Medico{

    private $nome;
    private $idade;
    private $sexo;
    private $foto;
    private $telefone;
    private $curriculo;
    private $rg;
    private $cpf;
    private $diplomamedico;
    private $crm;
    private $tituloEspecializacao;
    private $carteiraVacinacao;
    private $cartadeApresentacao;
    

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


    
    public function setdiplomamedico($diplomamedico){
        $this->diplomamedico = $diplomamedico;
    }
    public function getdiplomamedico(){
        return $this->diplomamedico;
    }    

    
    public function setcrm($crm){
        $this->crm = $crm;
    }
    public function getcrm(){
        return $this->crm;
    }    


    
    public function settituloEspecializacao($tituloEspecializacao){
        $this->tituloEspecializacao = $tituloEspecializacao;
    }
    public function gettituloEspecializacao(){
        return $this->tituloEspecializacao;
    }    


    public function setcarteiraVacinacao($carteiraVacinacao){
        $this->carteiraVacinacao = $carteiraVacinacao;
    }
    public function getcarteiraVacinacao(){
        return $this->carteiraVacinacao;
    }    


    
    public function setcartadeApresentacao($cartadeApresentacao){
        $this->cartadeApresentacao = $cartadeApresentacao;
    }
    public function getcartadeApresentacao(){
        return $this->cartadeApresentacao;
    }    
}