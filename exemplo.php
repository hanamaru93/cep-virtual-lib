<?php

use Fl\CepVirtualLib\Search;

require_once "vendor/autoload.php";

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('58052120');

print_r($resultado);