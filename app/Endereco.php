<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'id',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'aluno_id'
    ];
    protected $table = 'enderecos';

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
