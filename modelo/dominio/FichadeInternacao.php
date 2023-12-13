<?php

class FichadeInternacao{
    private $id;
    private $nome;
    private $medico;
    private $datadaInternaçao;
    private $justificativadaInternaçao;

    public function setid($id){
        $this->id = $id;
    }
    public function getid(){
        return $this->id;
    }

    public function setnome($nome){
        $this->nome=$nome;
    }
    public function getnome(){
        return $this->nome;
    }
    
    public function setnomeDoResponsavel($nomeDoResponsavel){
        $this->nomeDoResponsavel = $nomeDoResponsavel;
    }
    public function getnomeDoResponsavel(){
        return $this->nomeDoResponsavel;
    }

    public function setmedico($medico){
        $this->medico = $medico;
    }
    public function getmedico(){
        return $this->medico;
    }

    public function setdatadaInternaçao($datadaInternaçao){
        $this->datadaInternaçao = $datadaInternaçao;
    }
    public function getdatadaInternaçao(){
        return $this->datadaInternaçao;
    }

    public function setjustificativadaInternaçao($justificativadaInternaçao){
        $this->justificativadaInternaçao = $justificativadaInternaçao;
    }
    public function getjustificativadaInternaçao(){
        return $this->justificativadaInternaçao;
    }

}