<?php

require 'class/Congonhas.php';

$doc = $_GET['document'];
$type = $_GET['type'];

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

$service = new Congonhas();


if ($type == 'cpf') {

    $data = $service->getDocumentData($_ENV['login'], $_ENV['password'], $_ENV['client'], $doc);

    echo $data['CADASTRAIS']['NOME'];
    echo "|";
    echo $data['CADASTRAIS']['NOMEMAE'];
    echo "|";
    echo $data['CADASTRAIS']['NASCIMENTO'];
    echo "|";
    echo $data['CADASTRAIS']['SEXO'];

} elseif ($type == 'cnpj') {

    $data = $service->getDocumentData($_ENV['login'], $_ENV['password'], $_ENV['client'], $doc);

    echo $data['CADASTRAIS']['RAZAO'];
    echo "|";
    echo $data['CADASTRAIS']['NOME_FANTASIA'];
    echo "|";
    echo $data['CADASTRAIS']['DATA_ABERTURA'];
    echo "|";
    echo $data['CADASTRAIS']['DESC_NATJUR'];
    echo "|";
    echo $data['CADASTRAIS']['CNAE'];
    echo "|";
    echo $data['CADASTRAIS']['DESC_CNAE'];
    echo "|";
    echo $data['CADASTRAIS']['MATRIZ'];
    
}



