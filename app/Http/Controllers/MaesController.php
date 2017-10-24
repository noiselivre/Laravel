<?php

namespace App\Http\Controllers;

use App\Mae;
use Illuminate\Http\Request;

class MaesController extends Controller
{
    public function store(Mae $mae)
    {
        try {
            $mae->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
