<?php

namespace App\Http\Controllers;

use App\Grupo;
use App\Produto;
use Illuminate\Http\Request;

class ControllerProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.produtos', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $regras = [
            'descricao' => 'required',
            'cod_prod' => 'required',
            'un' => 'required',
            'marca' => 'required',
            'ps_fabricacao' => 'required',
            'grupo' => 'required'
        ];

        $mensagens = [
            'descricao.required' => 'Descricao não pode ser vazio!',
            'cod_prod.required' => 'Codigo do produto não pode ser vazio!',
            'un.required' => 'Quantidade nao pode ser vazio!',
            'marca.required' => 'Marca não pode ser vazio!',
            'grupo.required' => 'Grupo nao pode ser vazio!',
            'ps_fabricacao.required' => 'País fabricação nao pode ser vazio!'
        ];

        $request->validate($regras,$mensagens);

        $produto = new Produto();
        $produto->descricao = $request->input('descricao');
        $produto->cod_prod = $request->input('cod_prod');
        $produto->un = $request->input('un');
        $produto->marca = $request->input('marca');
        $produto->ps_fabricacao = $request->input('ps_fabricacao');
        $produto->grupo = $request->input('grupo');;

        $produto->save();
        return redirect("/produtos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            return view('produtos.editar', ['produto' => $produto]);
        }

        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $regras = [
            'descricao' => 'required',
            'cod_prod' => 'required',
            'un' => 'required',
            'marca' => 'required',
            'ps_fabricacao' => 'required',
            'grupo' => 'required'
        ];

        $mensagens = [
            'descricao.required' => 'Descricao não pode ser vazio!',
            'cod_prod.required' => 'Codigo do produto não pode ser vazio!',
            'un.required' => 'Quantidade nao pode ser vazio!',
            'marca.required' => 'Marca não pode ser vazio!',
            'grupo.required' => 'Grupo nao pode ser vazio!',
            'ps_fabricacao.required' => 'País fabricação nao pode ser vazio!'
        ]; 

        $request->validate($regras, $mensagens);

        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->descricao = $request->input('descricao');
            $produto->cod_prod = $request->input('cod_prod');
            $produto->un = $request->input('un');
            $produto->marca = $request->input('marca');
            $produto->ps_fabricacao = $request->input('ps_fabricacao');
            $produto->grupo = $request->input('grupo');;
            $produto->save();
            return redirect('/produtos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->delete();
        }

        return redirect('/produtos');
    }
}
