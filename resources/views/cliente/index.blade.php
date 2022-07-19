@extends('template')
@section('content')
    <div class="caixa">
        <div class="caixa-titulo py-1 d-flex justify-content-space-between">
            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de Clientes</span>
            <div>
                <a href="{{ route('clientes.create') }}" class="btn btn-verde  d-inline-block"><i
                        class="fas fa-plus-circle mb-0"></i> Adicionar
                    novo</a>
                <a href="" class="btn btn-amarelo filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
            </div>
        </div>

        <div class="rows">
            <div class="col-12">
                <div class="col-12 mt-3 mb-3">
                    <div class="radius-4 p-2 mostraFiltro bg-padrao">
                        <form action="" method="">
                            <div class="rows px-2 pb-3">
                                <div class="col-9">
                                    <label class="text-label text-branco">Cliente</label>
                                    <input type="text" value="" name="razao_social" placeholder="Digite aqui..."
                                        class="form-campo">
                                </div>
                                <div class="col-3 mt-4">
                                    <input type="submit" value="Pesquisar" class="btn btn-verde width-100 text-uppercase">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tabela-responsiva px-0">

                        <table cellpadding="0" cellspacing="0" id="dataTable">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="left">Nome</th>
                                    <th align="center">Email</th>
                                    <th align="center">Fone</th>
                                    <th align="center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td align="center">{{ $cliente->id }}</td>
                                        <td align="left">{{ $cliente->nome }}</td>
                                        <td align="center">{{ $cliente->email }}</td>
                                        <td align="center">{{ $cliente->fone }}</td>
                                        <td align="center">
                                            <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                class="d-inline-block btn btn-outline-verde btn-pequeno"><i
                                                    class="fas fa-edit"></i> Editar</a>
                                            <a href="{{ route('clientes.update', $cliente->id) }}"
                                                class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i
                                                    class="fas fa-trash-alt"></i> Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
