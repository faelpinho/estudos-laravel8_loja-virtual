<?php

namespace App\Http\Controllers;

class ProdutosController extends Controller
{
    /**
     * index - pagina inicial que lista os produtos
     */
    public function index(){
        return view('produtos.index');
    }



    /**
     * show - pagina para exibir o nome dos produtos
     */
    public function show($nome){
        return view('produtos.show', ['nome' => $nome]);
    }



    /**
     * insert - pagina para inserir produtos
     */
    public function insert(){
        return view('produtos.insert');
    }



    /**
     * remove - pagina para remover produtos
     */
    public function remove(){
        return view('produtos.remove');
    }
}

// EOF