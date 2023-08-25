<?php

class Receita{
    private $Nome;
    private $dataNasc;
    private $medicamento;
    private $especialidade;
    private $assinaturadoRequisitante;

    
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getNomeDoRequisitante(){
        return $this->NomeDoRequisitante;
    }


    public function setdataEmissao($dataEmissao){
        $this->dataEmissao = $dataEmissao;
    }    
    public function getdataEmissao(){
        return $this->dataEmissao;
    }    


    public function setespecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    public function getespecialidade(){
        return $this->especialidade;
    }


    public function setassinaturadoRequisitante($assinaturadoRequisitante){
        $this->assinaturadoRequisitante = $assinaturadoRequisitante;
    }
    public function getassinaturadoRequisitante(){
        return $this->assinaturadoRequisitante;
    }
    

    public function setmedicamento($medicamento){
        $this->medicamento = $medicamento;
    }
    public function getmedicamento(){
        return $this->medicamento;
    }
}