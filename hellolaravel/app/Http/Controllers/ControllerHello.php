<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHello extends Controller
{
    public function index(){
        $nome = "Felipe Valeriano dos Reis";
        $id = 1;
        return view('apresentation', ['nome' =>$nome],['id' =>$id]);
    }
}
