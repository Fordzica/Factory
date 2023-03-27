<?php
include_once "AlunoFactory.php";
include_once "GestorFactory.php";
include_once "ProfessorFactory.php";

$AFactory = new AlunoFactory();
$aluno = $AFactory->cadastro();
$aluno->nome();
$aluno->tell();
$aluno->endereco();
$aluno->pagamento();
$PFactory = new ProfessorFactory();
$professor = $PFactory->cadastro();
$professor->nome();
$professor->tell();
$professor->endereco();
$professor->pagamento();
$GFactory = new GestorFactory();
$gestor = $GFactory->cadastro();
$gestor->nome();
$gestor->tell();
$gestor->endereco();
$gestor->pagamento();