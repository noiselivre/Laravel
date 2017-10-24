<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    public function store(Endereco $endereco)
    {
        try {
            $endereco->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
