# api-consulta-novavida-congonhas
<p align="center"><img src="http://congonhas.novavidati.com.br/images/logo.png"></p>
Consulta do service congonhas do site http://congonhas.novavidati.com.br para consulta de CPF E CNPJ.

WS do nova vida:
http://wsnv.novavidati.com.br

## Requirements:
- PHP 7.0 (or higher)
- Composer

## Installation:

Follow the following steps:

```bash
composer install
```

## How To Use:

Open your browser and use the url to perform the data search.

```bash
http://you_url/api/?type=cpf&document=11111111111 - For CPF
http://you_url/api/?type=cnpj&document=11111111111111 - For CNPJ
```

in the index.php is a example for get data in array.

### Functions:

#### getDocumentData(Login, Password, Client, Document)
This method returned the Data for PessoasEmpresasTk in WsLocalizador.
The data is returned for Pessoa Física and Pessoa Jurídica.

##### Pessoa Física:
``` php
(array) 
["CADASTRAIS"]=>
  array(8) {
    ["CPF"]=>
    string(11) "11111111111"
    ["NOME"]=>
    string(33) "Fulano da Silva"
    ["SEXO"]=>
    string(9) "MASCULINO"
    ["NASCIMENTO"]=>
    string(10) "14/05/1990"
    ["IDADE"]=>
    string(2) "25"
    ["SIGNO"]=>
    string(5) "TOURO"
    ["DIASEMANA"]=>
    string(7) "DOMINGO"
    ["NOMEMAE"]=>
    string(32) "Fulana da Silva"
  }
  ["TELEFONES"]=>
  array(2) {
    [0]=>
    array(4) {
      ["POSICAO"]=>
      string(1) "1"
      ["DDD"]=>
      string(2) "11"
      ["TELEFONE"]=>
      string(8) "22222222"
      ["ASSINANTE"]=>
      string(4) "TRUE"
    }
    [1]=>
    array(4) {
      ["POSICAO"]=>
      string(1) "2"
      ["DDD"]=>
      string(2) "11"
      ["TELEFONE"]=>
      string(8) "33333333"
      ["ASSINANTE"]=>
      string(5) "FALSE"
    }
  }
```

##### Pessoa Jurídica:
``` php
(array) 
 ["CADASTRAIS"]=>
  array(11) {
    ["CNPJ"]=>
    string(14) "24300183000130"
    ["RAZAO"]=>
    string(45) "FULANO DA SILVA LTDA-ME"
    ["NOME_FANTASIA"]=>
    string(55) "FULANOS DA SILVA"
    ["MATRIZ"]=>
    string(3) "SIM"
    ["DATA_ABERTURA"]=>
    string(10) "03/03/2016"
    ["CODNATJUR"]=>
    string(4) "2135"
    ["DESC_NATJUR"]=>
    string(25) "EMPRESÁRIO (INDIVIDUAL) "
    ["CNAE"]=>
    string(7) "1813099"
    ["DESC_CNAE"]=>
    array(0) {
    }
    ["PORTE"]=>
    array(0) {
    }
    ["INSCRICAO_ESTADUAL"]=>
    array(0) {
    }
  }
  ["TELEFONES"]=>
  array(4) {
    ["POSICAO"]=>
    array(0) {
    }
    ["DDD"]=>
    string(2) "11"
    ["TELEFONE"]=>
    string(8) "41750185"
    ["ASSINANTE"]=>
    string(5) "FALSE"
  }
  ["ENDERECOS"]=>
  array(2) {
    [0]=>
    array(10) {
      ["POSICAO"]=>
      string(1) "1"
      ["TIPO"]=>
      string(2) "R "
      ["TITULO"]=>
      array(0) {
      }
      ["LOGRADOURO"]=>
      array(2) {
        [0]=>
        string(8) "CRUZALIA"
        [1]=>
        string(8) "CRUZALIA"
      }
      ["NUMERO"]=>
      string(3) "130"
      ["COMPLEMENTO"]=>
      array(0) {
      }
      ["BAIRRO"]=>
      string(13) "JARDIM RECORD"
      ["CIDADE"]=>
      string(9) "SAO PAULO"
      ["UF"]=>
      string(2) "SP"
      ["CEP"]=>
      string(8) "03462140"
    }
    [1]=>
    array(10) {
      ["POSICAO"]=>
      string(1) "2"
      ["TIPO"]=>
      string(3) "RUA"
      ["TITULO"]=>
      array(0) {
      }
      ["LOGRADOURO"]=>
      array(2) {
        [0]=>
        string(14) "HAMILTON PRADO"
        [1]=>
        string(14) "HAMILTON PRADO"
      }
      ["NUMERO"]=>
      string(3) "422"
      ["COMPLEMENTO"]=>
      string(4) "CS 5"
      ["BAIRRO"]=>
      string(18) "CHACARA BELENZINHO"
      ["CIDADE"]=>
      string(9) "SAO PAULO"
      ["UF"]=>
      string(2) "SP"
      ["CEP"]=>
      string(8) "03376000"
    }
  }
  ["EMAILS"]=>
  array(3) {
    ["POSICAO"]=>
    string(1) "1"
    ["EMAIL"]=>
    string(26) "teste@HOTMAIL.COM"
    ["PARTICULAR"]=>
    string(3) "SIM"
  }
```


#### GetToken(Login, Password,Client)

this method is private, returned the token for access the others methods.
Example for return:
``` php
(string) cHJvbm9ydGh3c3xwcm9ub3J0aDIwMTd8cHJvbm9ydGh8NTg5Nnw1MF9UcnVlOzUxX1RydWU7NTJfVHJ1ZTs1M19UcnVlOzU0X1RydWU7NTVfVHJ1ZTs1Nl9UcnVlOzU3X1RydWU7NThfVHJ1ZTs1OV9UcnVlOzYwX1RydWU7NzBfVHJ1ZTs3MV9UcnVlOzcyX1RydWU7NzlfVHJ1ZTs4NF9UcnVlOzk0X1RydWU7OTZfVHJ1ZTs5N19UcnVlOzk5X1RydWU7NjFfVHJ1ZTs2Ml9UcnVlOzYzX1RydWU7NjRfVHJ1ZTs2NV9UcnVlOzY2X1RydWU7NjdfVHJ1ZTs2OF9UcnVlOzY5X1RydWU7NzNfVHJ1ZTs3NF9UcnVlOzc1X1RydWU7NzZfVHJ1ZTs4MF9UcnVlOzk4X1RydWU7fDU3MjM2MzR8OTh8MjAxMTIwMTcxNzA4MjB8MjAxLjYuMjI3LjI0MQ
```

#### getCadastralSituation(Login, Password, Client, Document)
This method returned the array value for status for document.
``` php
array(4) {
  ["DESCRICAO"]=>
  string(7) "REGULAR"
  ["DATA"]=>
  string(10) "2014-12-04"
  ["HORA"]=>
  string(8) "09:52:00"
  ["COD_CONTROLE"]=>
  string(19) "172E.F9F3.69B9.121D"
}
```

#### getSociodemographicProfile(Login, Password, Client, Document)
This Method returned the values for people owner document.
``` php
array(1) {
  ["PERFILSOCIO"]=>
  array(6) {
    [0]=>
    string(10) "ATÉ 1.000"
    [1]=>
    string(13) "ENSINO MÉDIO"
    [2]=>
    string(15) "NÃO DISPONIVEL"
    [3]=>
    string(15) "NÃO DISPONIVEL"
    [4]=>
    string(1) "C"
    [5]=>
    string(37) "PROGRAMADOR DE SISTEMAS DE INFORMACAO"
  }
}
```
#### getAffinity(Login, Password, Client, Document)
This Method returned the Affinity for people owner document.

``` php
array(1) {
  ["CONSUMO"]=>
  array(2) {
    [0]=>
    string(29) "INTERESSADOS EM PACOTES DE TV"
    [1]=>
    string(35) "INTERESSADOS EM PACOTES DE INTERNET"
  }
}
``` 

### Configuration:

All sensible data configuration is located at .env file or at machine ENV, the .env file must be something like:

```ini
usuario =  USUARIO
senha = "SENHA"
cliente =  CLIENTE
```

