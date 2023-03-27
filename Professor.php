<?php
include_once "Pessoa.php";
class Professor extends Pessoa{
    public function nome(){
        $this->nome = "Professor";
        echo "$this->nome<br>";
    }
    public function tell(){
        $this->tell = 666;
        echo "$this->tell<br>";
    }
    public function endereco(){
        $this->endereco = "Rua dos corno";
        echo "$this->endereco<br>";
    }
    public function pagamento(){
        echo "Pagamento de R$1000,00 <br>";
    }
}