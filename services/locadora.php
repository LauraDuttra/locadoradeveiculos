<?php
namespace Services;

use Models\{veiculo, carro, moto};

// clase para gerenciar a locação
class Locadora {
    private array $veiculos = [];

    public function __construct()
}

private function carregarVeiculos(): void {
    if (file_exists(ARQUIVO_JSON)){

        //decodifica o arquivo JSON
        $dados = json_decode(file_get_contents(ARQUIVO_JSON), true);
    

            foreach ($dados as $dado){
                if($dado['tipo'] === 'carro'){
                    $veiculo = new carro($dado['modelo'], $dado['placa']);
                } else {
                    $veiculo = new moto($dado['modelo'], $dado['placa']);
                }
                $veiculo->setDisponivel($dado['disponivel']);

                $this->veiculos[] = $veiculo;
            }
        }
    }

    // salvar veículos
    private function salvarViculos(): void{
        $dados = [];

        foreach($this->veiculos as $veiculo){
            $dados[] = [
                'tipo' => ($veiculo instanceof carro) ? 'carro' : 'moto',
                'modelo' => $veiculo -> getModelo(),
                'placa' => $veiculo -> getPlaca(),
                'disponivel' => $veiculo -> isDisponivel()
            ];

            $dir = dirName(ARQUIVO_JSON);

            if (!is_die($dir)){
                mkdir($dir, 0777, true);
            }

            file_put_contents(ARQUIVO_JSON, json_encode($dados, JSON_PRETTY_PRINT));

        }
    }