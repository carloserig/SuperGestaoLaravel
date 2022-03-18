<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //objeto criado como fornecedors
    protected $table = 'fornecedores';
    //autorizar criar registro com create 
    protected $fillable = ['nome','site','uf','email'];
}
