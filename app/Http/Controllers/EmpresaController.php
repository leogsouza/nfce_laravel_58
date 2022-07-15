<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    public function index() {
        $empresas = Empresa::all();

        return view('empresa.index', compact('empresas'));
    }

    public function create() {

        return view('empresa.create');
    }

    public function store(EmpresaRequest $request) {
        Empresa::create($request->all());

        return redirect("empresas");
    }


    public function update(EmpresaRequest $request, $id) {

        Empresa::find($id)->update($request->all());

        return redirect("empresas");
    }

    public function edit($id) {
        $empresa = Empresa::find($id);
        return view('empresa.edit', compact('empresa'));
    }
}
