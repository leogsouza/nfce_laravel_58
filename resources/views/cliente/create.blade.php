@extends('template')
@section('content')
    <div class="rows">
        <div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5 pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir Cliente</span>
                    <a href="{{ route('clientes.index') }}" class="btn btn-amarelo float-right"><i
                            class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                @if (isset($cliente))
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                    @else
                        <form action="{{ route('clientes.store') }}" method="POST">
                @endif
                @csrf()
                <div class="p-5 pb-0 pt-4 width-100 float-left">
                    @foreach ($errors->all() as $error)
                        <div class="col-12 mt-1 px-0">
                            <div class="msg msg-vermelho">
                                <i class="fas fa-exclamation-triangle"></i> {{ $error }}
                                <a href="javascript:;" class="fas fa-times float-right" onclick="fecharMsg()"></a>
                            </div>
                        </div>
                    @endforeach
                    <div id="tab">
                        <ul class="tab">
                            <li><a href="#tab-1">Dados Gerais</a></li>
                            <li><a href="#tab-2">Endereço</a></li>
                            <li><a href="#tab-3">Informações Adicionais</a></li>
                        </ul>
                        <div id="tab-1" class="cx-tab">
                            <span class="d-block mt-4 mb-4 h4 border-bottom">Informações básicas</span>
                            <div class="rows pb-4">
                                <div class="col-6 mb-3">
                                    <label class="text-label">Nome</label>
                                    <input type="text"
                                        value="{{ isset($cliente->nome) ? $cliente->nome : old('nome') }}"
                                        class="form-campo" name="nome" placeholder="Digite aqui...">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Nome Fantasia</label>
                                    <input type="text"
                                        value="{{ isset($cliente->nome_fantasia) ? $cliente->nome_fantasia : old('nome_fantasia') }}"
                                        class="form-campo" name="nome_fantasia">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">CPF</label>
                                    <input type="text" value="{{ isset($cliente->cpf) ? $cliente->cpf : old('cpf') }}"
                                        class="form-campo mascara-cpf" name="cpf">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">CNPJ</label>
                                    <input type="text"
                                        value="{{ isset($cliente->cnpj) ? $cliente->cnpj : old('cnpj') }}"
                                        class="form-campo mascara-cnpj" name="cnpj">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Data Cadastro</label>
                                    <input type="date"
                                        value="{{ isset($cliente->data_cadastro) ? $cliente->data_cadastro : old('data_cadastro') }}"
                                        class="form-campo" name="data_cadastro">
                                </div>
                                <div class="col-8 mb-3">
                                    <label class="text-label">E-mail</label>
                                    <input type="email"
                                        value="{{ isset($cliente->email) ? $cliente->email : old('email') }}"
                                        class="form-campo" name="email">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Celular</label>
                                    <input type="text"
                                        value="{{ isset($cliente->celular) ? $cliente->celular : old('celular') }}"
                                        name="celular" class="form-campo mascara-celular">
                                </div>

                            </div>
                        </div>

                        <div id="tab-2" class="cx-tab">
                            <span class="d-block mt-4 mb-4 h4 border-bottom">Endereço</span>
                            <div class="rows pb-4">
                                <div class="col-3 mb-3">
                                    <label class="text-label">CEP</label>
                                    <input type="text" value="{{ isset($cliente->cep) ? $cliente->cep : old('cep') }}"
                                        class="form-campo busca_cep" name="cep">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Logradouro</label>
                                    <input type="text"
                                        value="{{ isset($cliente->logradouro) ? $cliente->logradouro : old('logradouro') }}"
                                        class="form-campo rua" name="logradouro" placeholder="Digite aqui...">
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Número</label>
                                    <input type="text"
                                        value="{{ isset($cliente->numero) ? $cliente->numero : old('numero') }}"
                                        class="form-campo" name="numero">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input type="text"
                                        value="{{ isset($cliente->complemento) ? $cliente->complemento : old('complemento') }}"
                                        class="form-campo" name="complemento">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input type="text"
                                        value="{{ isset($cliente->bairro) ? $cliente->bairro : old('bairro') }}"
                                        class="form-campo bairro" name="bairro">
                                </div>
                                <div class="col-4 mb-2">
                                    <label class="text-label">Cidade</label>
                                    <input type="text"
                                        value="{{ isset($cliente->cidade) ? $cliente->cidade : old('cidade') }}"
                                        name="cidade" class="form-campo cidade">
                                </div>

                                <div class="col-2 mb-2">
                                    <label class="text-label">UF</label>
                                    <input type="text" value="{{ isset($cliente->uf) ? $cliente->uf : old('uf') }}"
                                        class="form-campo estado" name="uf">
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-label">IBGE</label>
                                    <input type="text"
                                        value="{{ isset($cliente->ibge) ? $cliente->ibge : old('ibge') }}"
                                        class="form-campo ibge" name="ibge">
                                </div>

                            </div>
                        </div>

                        <div id="tab-3" class="cx-tab">
                            <span class="d-block mt-4 mb-4 h4 border-bottom">Informações Adicionais</span>
                            <div class="rows pb-4">
                                <div class="col-4 mb-3">
                                    <label class="text-label">Insc. Estadual</label>
                                    <input type="text" value="{{ isset($cliente->ie) ? $cliente->ie : old('ie') }}"
                                        class="form-campo" name="ie" placeholder="Digite aqui...">
                                </div>
                                <div class="col-3 mb-3">
                                    <label class="text-label">Insc. Municipal</label>
                                    <input type="text" value="{{ isset($cliente->im) ? $cliente->im : old('im') }}"
                                        class="form-campo" name="im">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">IndIEDest</label>
                                    @php
                                        $indIEDest = isset($cliente->indIEDest) ? $cliente->indIEDest : 2;
                                    @endphp
                                    <select name="indIEDest" class="form-campo">
                                        <option value="1" {{ $indIEDest == 1 ? 'selected' : '' }}>1 - Contribuinte
                                            ICMS (informar a IE do Destinatário)</option>
                                        <option value="2" {{ $indIEDest == 2 ? 'selected' : '' }}>2 - Contribuinte
                                            isento de inscrição no cadastro de Contribuinte</option>
                                        <option value="9" {{ $indIEDest == 9 ? 'selected' : '' }}>9 - Não
                                            Contribuinte, que pode ou não possuir Inscrição Estadual</option>
                                    </select>
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Suframa</label>
                                    <input type="text"
                                        value="{{ isset($cliente->suframa) ? $cliente->suframa : old('suframa') }}"
                                        class="form-campo" name="suframa">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">RG</label>
                                    <input type="text" value="{{ isset($cliente->rg) ? $cliente->rg : old('rg') }}"
                                        class="form-campo" name="rg">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Cód. Estrangeiro</label>
                                    <input type="text"
                                        value="{{ isset($cliente->idEstrangeiro) ? $cliente->idEstrangeiro : old('idEstrangeiro') }}"
                                        class="form-campo" name="idEstrangeiro">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="mb-5 mt-4 width-100 d-inline-block">
                        <input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
