<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mae extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'data',
        'aluno_id'
    ];
    protected $table = 'maes';

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
