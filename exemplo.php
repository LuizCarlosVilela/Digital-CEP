<?php 

    require_once "vendor/autoload.php";

    use luiz\digitalCep\Search;

    $busca = new Search;

    //Número do cep que vai ser buscado pela biblioteca
    $cepBuscado = "57690970";

    $resultado = $busca->getEnderecoFromCep($cepBuscado);

    print_r($resultado);
?>