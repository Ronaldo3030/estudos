<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    // se o nome da tabela não for o nome do model no plural, usar:
    //protected $table = 'nome_da_tabela';

    // se o nome do campo da chave primaria não for id usar:
    // protected $primaryKey = 'id_tarefa';

    // se na tabela não tiver created_at, e updated_at
    public $timestamps = false;

    // caso use o tempo de criação/modificação so que com nome diferente usar:
    // const CREATED_AT = 'date_created'; 
    // const UPDATED_AT = 'date_updated'; 
}
