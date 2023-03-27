<?php
include_once "PessoaFac.php";
include_once "Gestor.php";
class GestorFactory implements PessoaFac{
    public function cadastro(){
        return new Gestor();
    }
}