<?php

namespace App\Service; 

use App\Models\Carros;

class CarrosService 
{
    public function create(array $dados)
    {
        $result=Carros::create([
            'Marca'=>$dados['Marca'],
            'Modelo'=>$dados['Modelo'],
            'Ano'=>$dados['Ano'],
            'Placa'=>$dados['Placa'],
            'Tipo_de_veiculo'=>$dados['Tipo_de_veiculo'],
            'Valor_de_venda'=>$dados['Valor_de_venda']
        ]);
     return $result;
    
    }

    public function getAll()
    {
        $carros=Carros::all();
        return[
            'status'=> true,
            'message'=>'Pesquisa efetuada com sucesso',
            'data'=>$carros
        ];
    }

    public function update(array $dados)
    {
        $carro=Carros::find($dados['id']);
        
        if($carro == null){
            return[
                'status'=>false,
                'message'=>'carro não encontrado',
            ];
        }

        if(isset($dados['Marca'])){
            $carro->marca=$dados['Marca'];
        }

        if(isset($dados['Modelo'])){
            $carro->modelo=$dados['Modelo'];
        }

        if (isset($dados['Ano'])){
            $carro->ano=$dados['Ano'];
        }
        
        if (isset($dados['Placa'])){
            $carro->placa=$dados['Placa'];
        }

        if (isset($dados['Tipo_de_veiculo'])){
            $carro->tipo=$dados['Tipo_de_veiculo'];
        }
        if(isset($dados['Valor_de_venda'])){
            $carro->valor =$dados['Valor_de_venda'];
        }

        $carro->save();
        return[
            'status'=> true,
            'message'=>'Atualizado com sucesso'
        ];

    }
}