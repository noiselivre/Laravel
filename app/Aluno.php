<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];
    protected $table = 'alunos';

    public function nascimento()
    {
        return $this->hasOne(Nascimento::class, 'aluno_id');
    }

    public function ingresso()
    {
        return $this->hasOne(Ingresso::class, 'aluno_id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'aluno_id');
    }

    public function mae()
    {
        return $this->hasOne(Mae::class, 'aluno_id');
    }
}
