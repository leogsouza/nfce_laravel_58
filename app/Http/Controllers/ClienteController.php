<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        Cliente::create($request->all());

        return redirect('clientes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente =Cliente::find($id);

        return view('cliente.create', compact('cliente'));
    }

    public function update(ClienteRequest $request, $id)
    {
        Cliente::find($id)->update($request->all());

        return redirect('clientes');
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
