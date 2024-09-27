<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    use HasFactory;
   
    protected $fillable = [
       'Marca',
       'Modelo',
       'Ano',
       'Placa',
       'Tipo_de_veiculo',
       'Valor_de_venda',
   ];
}
