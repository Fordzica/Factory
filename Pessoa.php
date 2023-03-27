<?php
abstract class Pessoa{
    public $nome;
    public $tell;
    public $endereco;
    abstract function nome();
    abstract function tell();
    abstract function endereco();
    abstract function pagamento();
}