<?php

class Receita{
    private $Id_receita;

    public function setId_receita($Id_receita){
        $this->Id_receita = $Id_receita;
    }
    public function getId_receita(){
        return $this->Id_receita;
    }
    private $Data;

    public function setdata($data){
        $this->data = $data;
    }    
    public function getdata(){
        return $this->data;
    }    
    private $descricao;

    public function setdescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getdescricao(){
        return $this->descricao;
    }
    private $id_medico;

    public function setid_medico($id_medico){
        $this->id_medico = $id_medico;
    }
    public function getid_medico(){
        return $this->id_medico;
    }
    private $id_paciente;

    public function setid_paciente($id_paciente){
        $this->id_paciente = $id_paciente;
    }
    public function getid_paciente(){
        return $this->id_paciente;
    }

}