# api-consulta-novavida-congonhas
Consulta do service congonhas do site http://congonhas.novavidati.com.br para consulta de CPF E CNPJ.

URL Do Ws do nova vida:
wsnv.novavidati.com.br

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

## Configuration:

All sensible data configuration is located at .env file or at machine ENV, the .env file must be something like:

```ini
usuario =  USUARIO
senha = "SENHA"
cliente =  CLIENTE
```

