<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nome)
    {
        // $nome = "Carlos";
        return "Olá $nome";
    }
}
