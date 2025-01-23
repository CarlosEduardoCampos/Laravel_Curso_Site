<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    //
    public function index () {
        //return 'index';
        $produtos = Produto::all();
        return dd($produtos);
    }

    public function show($id=0){
        return 'show'.$id;
    }
}
