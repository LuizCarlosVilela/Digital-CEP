<?php 
    namespace luiz\digitalCep;

    class Search{

        private $url = "https://viacep.com.br/ws/";

        public function getEnderecoFromCep(string $code): array{
            $code = preg_replace('/[^0-9]/im', '', $code);

            //Fazendo a requisição na url
            $get = file_get_contents($this->url . $code . "/json/" );

            return (array) json_decode($get);
        }
    }




?>
