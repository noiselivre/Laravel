<?php

namespace App\Http\Controllers;

use App\Nascimento;
use Illuminate\Http\Request;

class NascimentosController extends Controller
{
    public function store(Nascimento $nascimento)
    {
        try {
            $nascimento->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
