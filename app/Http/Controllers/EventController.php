<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "William";
        $idade = 21;
        $arr = [1, 2, 3, 4, 5];
        $arrNames = ["Maiquim", "Jackson", "Pedrin"];
        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'arr' => $arr, 'arrNames' => $arrNames]);
    }
    public function create()
    {
        return view('events.create');
    }
}
