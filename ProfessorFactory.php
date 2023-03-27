<?php
include_once "PessoaFac.php";
include_once "Professor.php";
class ProfessorFactory implements PessoaFac{
    public function cadastro(){
        return new Professor();
    }
}