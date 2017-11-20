<?php

function replaceWords($string)
{
    $origin = array('<?xml version="1.0" encoding="ISO-8859-1" ?>', '<?xml version="1.0" encoding="utf-8"?>', '<string xmlns="http://tempuri.org/">', '</string>', '&lt;?xml version="1.0" encoding="ISO-8859-1" ?&gt;
', '&lt;', '&gt;');
    $destiny = array('', '', '', '', '', '<', '>');
    $token_clear = str_replace($origin, $destiny, $string);
    return $token_clear;
}

function xmlConverter($string)
{
    $xml = simplexml_load_string(replaceWords($string));
    $array = json_encode($xml);
    $configData = json_decode($array, true);
    return $configData;
}
