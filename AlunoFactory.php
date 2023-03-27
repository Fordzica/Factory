<?php
include_once "PessoaFac.php";
include_once "Aluno.php";
class AlunoFactory implements PessoaFac{
    public function cadastro(){
        return new Aluno();
    }
}