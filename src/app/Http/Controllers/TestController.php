<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $participantes = Test::orderBy('nome')->get();

        foreach ($participantes as $user) {
            echo $user->nome;
        }

        dd("Hola");
    }
}
