<?php

namespace App\Http\Controllers;

use App\Ingresso;
use Illuminate\Http\Request;

class IngressosController extends Controller
{
    public function store(Ingresso $ingresso)
    {
        try {
            $ingresso->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
