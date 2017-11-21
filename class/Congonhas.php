<?php

require 'vendor/autoload.php';

class Congonhas
{
    /**
     * Congonhas constructor.
     */
    public function __construct()
    {
        $this->client = new GuzzleHttp\Client();
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @return mixed
     */
    private function getToken($login, $password, $client)
    {
        $res = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/GerarToken?', [
            'query'=> ['usuario'=> $login, 'senha' => $password , 'cliente' => $client]
        ]);

        $token = replaceWords($res->getBody());

        return $token;
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @param $document
     * @return mixed
     */
    public function getDocumentData($login, $password, $client, $document)
    {
        $token = $this->getToken($login, $password, $client);
        $document = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/PessoasEmpresasTk?', [
            'query'=> ['documento'=> $document, 'token' => $token]
        ]);

        $array = xmlConverter(replaceWords($document->getBody()));

        return $array;
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @param $document
     * @return mixed
     */
    public function getCadastralSituation($login, $password, $client, $document)
    {
        $token = $this->getToken($login, $password, $client);
        $document = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/SituacaoCadastralTK?', [
            'query'=> ['documento'=> $document, 'token' => $token]
        ]);

        $array = xmlConverter(replaceWords($document->getBody()));

        return $array;
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @param $document
     * @return mixed
     */
    public function getSociodemographicProfile($login, $password, $client, $document)
    {
        $token = $this->getToken($login, $password, $client);
        $document = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/PerfilSocioDemograficoTK?', [
            'query'=> ['documento'=> $document, 'token' => $token]
        ]);

        $array = xmlConverter(replaceWords($document->getBody()));

        return $array;
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @param $document
     * @return mixed
     */
    public function getAffinity($login, $password, $client, $document)
    {
        $token = $this->getToken($login, $password, $client);
        $document = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/AfinidadeTK?', [
            'query'=> ['documento'=> $document, 'token' => $token]
        ]);

        $array = xmlConverter(replaceWords($document->getBody()));

        return $array;
    }

    /**
     * @param $login
     * @param $password
     * @param $client
     * @param $document
     * @return mixed
     */
    public function getVehicle($login, $password, $client, $document)
    {
        $token = $this->getToken($login, $password, $client);

        $document = $this->client->request('GET', 'http://wsnv.novavidati.com.br/WSLocalizador.asmx/VeiculoTK?', [
            'query'=> ['documento'=> $document, 'token' => $token]
        ]);

        $array = xmlConverter(replaceWords($document->getBody()));

        return $array;
    }
}