<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 29/06/2017
 * Time: 00:37
 */

/**
 * @param $string
 * @return mixed
 */
function replaceWords($string)
{
    $origin = array('<?xml version="1.0" encoding="utf-8"?>','<string xmlns="http://tempuri.org/">','</string>', '&lt;?xml version="1.0" encoding="ISO-8859-1" ?&gt;
','&lt;','&gt;');
    $destiny = array('','','','','<','>');
    $token_clear = str_replace($origin, $destiny, $string);
    return $token_clear;
}

function xmlConverter($string)
{
    $xml      = simplexml_load_string($string);
    $array    = json_decode(json_encode((array)$xml), TRUE);
    return $array;
}


$document_number = $_GET['document'];
$type = $_GET['type'];