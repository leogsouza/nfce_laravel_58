@extends('template')
@section('content')
    <div class="rows">
        <div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> CADASTRAR NOVO PRODUTO</span>
                    <a href="{{ route('produtos.index') }}" class="btn btn-amarelo float-right"><i
                            class="fas fa-arrow-left mb-0"></i>
                        Voltar</a>
                </div>
                @if (isset($cliente))
                    <form action="{{ route('produtos.update', $cliente->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form action="{{ route('produtos.store') }}" method="POST">
                @endif
                @csrf()

                <div class="pt-2 px-5 pb-5 width-100 d-inline-block">
                    @foreach ($errors->all() as $error)
                        <div class="col-12 mt-1 px-0">
                            <div class="msg msg-vermelho">
                                <i class="fas fa-exclamation-triangle"></i> {{ $error }}
                                <a href="javascript:;" class="fas fa-times float-right" onclick="fecharMsg()"></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="border px-4">
                        <span class="d-block mt-4 h4 border-bottom">Produto</span>
                        <div class="rows">
                            <div class="col-12">
                                <div class="rows">
                                    <div class="col-3 text-center m-auto">
                                        <div class="campo-upload">
                                            <label for="arquivo">
                                                <img src="https://mjailton.com.br/nfce_borrao/assets/img/img-semproduto.png"
                                                    id="imgUp" class="img-fluido">
                                                <span>Inserir produto</span>
                                            </label>
                                            <input type="file" name="arquivo" id="arquivo"
                                                onchange="pegaArquivo(this.files)">
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="rows">
                                            <div class="col-6">
                                                <label class="text-label">Titulo do produto</label>
                                                <input type="text"
                                                    value="{{ isset($produto->produto) ? $produto->produto : old('produto') }}"
                                                    name="produto" placeholder="Digite aqui..." class="form-campo">
                                            </div>

                                            <div class="col-4">
                                                <span class="text-label">Unidade</span>
                                                @php
                                                    $unidadeId = isset($produto->unidade_id) ? $produto->unidade_id : '';
                                                @endphp
                                                <select class="form-campo" name="unidade_id">
                                                    @foreach ($unidades as $unidade)
                                                        <option value="{{ $unidade->id }}"
                                                            {{ $unidade->id == $unidadeId ? 'selected' : '' }}>
                                                            {{ $unidade->unidade }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="col-2">
                                                <label class="text-label">Preço atual</label>
                                                <input type="text" name="preco"
                                                    value="{{ isset($produto->preco) ? $produto->preco : old('preco') }}"
                                                    placeholder="Digite aqui..." class="form-campo mascara-dinheiro">
                                            </div>
                                            <div class="col-4">
                                                <span class="text-label">Tributação</span>
                                                <select class="form-campo" name="id_tributacao">
                                                    <option value="1">Tributação 01</option>
                                                    <option value="2">trett</option>
                                                </select>
                                            </div>


                                            <div class="col-8">
                                                <span class="text-label">CFOP</span>
                                                @php
                                                    $codigoCfop = isset($produto->cfop) ? $produto->cfop : '';
                                                @endphp
                                                <select class="form-campo" name="cfop">
                                                    @foreach ($cfops as $cfop)
                                                        <option value="{{ $cfop->codigo_cfop }}"
                                                            {{ $cfop->codigo_cfop == $codigoCfop ? 'selected' : '' }}>
                                                            {{ $cfop->codigo_cfop . ' - ' . $cfop->desc_cfop }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="col-3">
                                                <small class="text-label">Referência EAN/GTIN</small>
                                                <input type="text" value="" class="form-campo" name="gtin">
                                            </div>

                                            <div class="col-2">
                                                <label class="text-label">NCM</label>
                                                <input type="text" value="" name="ncm"
                                                    placeholder="Digite aqui..." class="form-campo">
                                            </div>
                                            <div class="col-2">
                                                <label class="text-label">Código CEST</label>
                                                <input type="text" value="" name="cest"
                                                    placeholder="Digite aqui..." class="form-campo">
                                            </div>
                                            <div class="col-3">
                                                <label class="text-label">Cód. Benef. Fiscal na UF</label>
                                                <input type="text" value="" name="cbenef"
                                                    placeholder="Digite aqui..." class="form-campo">
                                            </div>
                                            <div class="col-2">
                                                <span class="text-label">Exc. tabela IPI</span>
                                                <select class="form-campo" name="extipi">
                                                    <option value="0" selected="selected"></option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>

                                                </select>
                                            </div>

                                            <div class="col-12 mt-4  pb-5">
                                                <input type="submit" value="Salvar alterações"
                                                    class="btn btn-verde btn-medio d-block m-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
