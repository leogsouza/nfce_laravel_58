<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Unidade;
use App\Cfop;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        $unidades = Unidade::all();
        $cfops = Cfop::all();
        return view('produto.create', compact('unidades', 'cfops'));
    }

    public function store(ProdutoRequest $request)
    {
        Produto::create($request->all());

        return redirect('produtos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produto =Produto::find($id);
        $unidades = Unidade::all();
        $cfops = Cfop::all();

        return view('produto.create', compact('produto', 'unidades', 'cfops'));
    }

    public function update(ProdutoRequest $request, $id)
    {
        Produto::find($id)->update($request->all());

        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
