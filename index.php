<?php

require 'vendor/autoload.php';
require 'helpers/commom.php';

use GuzzleHttp\Client;
use Dotenv\Dotenv;

$client = new GuzzleHttp\Client();

$dotenv = new Dotenv( __DIR__ );
$dotenv->load();

echo $_ENV['cliente'];

if($type == 'cpf'){

    $res = $client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/GerarToken?', [
        'query'=> ['usuario'=> $_ENV['usuario'], 'senha' => $_ENV['senha'] , 'cliente' => $_ENV['cliente']]
    ]);

    $token = replaceWords($res->getBody());

    $document = $client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/PessoasEmpresasTk?', [
        'query'=> ['documento'=> $document_number, 'token' => $token]
    ]);

    $array = xmlConverter(replaceWords($document->getBody()));

    echo $array['CADASTRAIS']['NOME'];
    echo "|";
    echo $array['CADASTRAIS']['NOMEMAE'];
    echo "|";
    echo $array['CADASTRAIS']['NASCIMENTO'];
    echo "|";
    echo $array['CADASTRAIS']['SEXO'];

} elseif ($type == 'cnpj'){

    $res = $client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/GerarToken?', [
        'query'=> ['usuario'=> $user, 'senha' => $pass , 'cliente' => $customer]
    ]);

    $token = replaceWords($res->getBody());

    $document = $client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/PessoasEmpresasTk?', [
        'query'=> ['documento'=> $document_number, 'token' => $token]
    ]);

    $array = xmlConverter(replaceWords($document->getBody()));

    echo $array['CADASTRAIS']['RAZAO'];
    echo "|";
    echo $array['CADASTRAIS']['NOME_FANTASIA'];
    echo "|";
    echo $array['CADASTRAIS']['DATA_ABERTURA'];
    echo "|";
    echo $array['CADASTRAIS']['DESC_NATJUR'];
    echo "|";
    echo $array['CADASTRAIS']['CNAE'];
    echo "|";
    echo $array['CADASTRAIS']['DESC_CNAE'];
    echo "|";
    echo $array['CADASTRAIS']['MATRIZ'];

}



