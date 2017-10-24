<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nascimento extends Model
{
    protected $fillable = [
        'id',
        'data',
        'aluno_id'
    ];
    protected $table = 'nascimentos';

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
