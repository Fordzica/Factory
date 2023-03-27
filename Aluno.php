<?php
include_once "Pessoa.php";
class Aluno extends Pessoa{
    public function nome(){
        $this->nome = "Aluno";
        echo "$this->nome <br>";
    }
    public function tell(){
        $this->tell = 999;
        echo "$this->tell <br>";
    }
    public function endereco(){
        $this->endereco = "Rua dos comerdor de casadas";
        echo "$this->endereco<br>";
    }
    public function pagamento(){
        echo "Aluno não recebe!! <br>";
    }
}