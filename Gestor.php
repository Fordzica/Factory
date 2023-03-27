<?php
include_once "Pessoa.php";
class Gestor extends Pessoa{
    public function nome(){
        $this->nome = "Gestor";
        echo "$this->nome<br>";
    }
    public function tell(){
        $this->tell = 777;
        echo "$this->tell<br>";
    }
    public function endereco(){
        $this->endereco = "Rua dos dorminhocos";
        echo "$this->endereco<br>";
    }
    public function pagamento(){
        echo "Pagamento de R$2000,00 <br>";
    }
}