<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//fornecedors
//fornecedores

class Fornecedor extends Model
{
    //correção do nome da tabela, pois como a classe se chama Fornecedor, ao acrescentar o 's' no bd, irá ocasionar um erro;
    protected $table = 'fornecedores';
    //autorizando os registros que irão ser inseridos no tinker a partir do método create();
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
