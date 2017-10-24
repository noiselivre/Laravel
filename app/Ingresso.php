<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    protected $fillable = [
        'id',
        'ano',
        'aluno_id'
    ];
    protected $table = 'ingressos';

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
