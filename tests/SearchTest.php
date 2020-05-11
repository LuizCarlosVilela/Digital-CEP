<?php 

use PHPUnit\Framework\TestCase;
use luiz\digitalCep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetEndereco(string $input, array $esperado){
        $result = new Search;

        $result = $result->getEnderecoFromCep($input);
        

        $this->assertEquals($esperado, $result);

    }
    public function dadosTeste(){
        return [
            "Endereço Praça"=>[
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" =>"3550308",
                    "gia" => "1004"
                ]
            ],
            "Rua Luís"=>[
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "unidade" => "",
                    "ibge" =>"3550308",
                    "gia" => "1004"
                ]
            ],
            "Centro Atalaia"=>[
                "57690970",
                [
                    "cep" => "57690-970",
                    "logradouro" => "Avenida Silvestre Péricles 622",
                    "complemento" => "",
                    "bairro" => "Centro",
                    "localidade" => "Atalaia",
                    "uf" => "AL",
                    "unidade" => "",
                    "ibge" =>"2700409",
                    "gia" => ""
                ],
            ]
        ];
    }
}

?>