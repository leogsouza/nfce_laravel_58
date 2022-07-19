@extends('template')
@section('content')
    <div class="caixa">
        <div class="caixa-titulo py-1 d-flex justify-content-space-between">
            <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de Produtos</span>
            <div>
                <a href="{{ route('produtos.create') }}" class="btn btn-verde  d-inline-block"><i
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
                                    <label class="text-label text-branco">Produto</label>
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
                                    <th align="left">Produto</th>
                                    <th align="center">Unidade</th>
                                    <th align="center">Preço</th>
                                    <th align="center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>
                                        <td align="center">{{ $produto->id }}</td>
                                        <td align="left">{{ $produto->produto }}</td>
                                        <td align="center">{{ $produto->unidade_id }}</td>
                                        <td align="center">{{ $produto->preco }}</td>
                                        <td align="center">
                                            <a href="{{ route('produtos.edit', $produto->id) }}"
                                                class="d-inline-block btn btn-outline-verde btn-pequeno"><i
                                                    class="fas fa-edit"></i> Editar</a>
                                            <a href="{{ route('produtos.update', $produto->id) }}"
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
