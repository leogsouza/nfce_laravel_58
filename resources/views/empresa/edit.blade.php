@extends('template')
@section('content')
    <div class="rows">
        <div class="col-12">
            <div class="caixa">
                <div class="caixa-titulo py-1 d-inline-block width-100">
                    <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir emitente</span>
                    <a href="{{ route('empresas.index') }}" class="btn btn-amarelo float-right"><i
                            class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>


                <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
                    @method('PUT')

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
                        <div class="tab-content current border-top p-3">
                            <span class="d-block mt-4 h4 border-bottom">Informações emitente</span>
                            <div class="rows pb-4">

                                <div class="col-6 mb-3">
                                    <label class="text-label"><b class="text-vermelho">*</b> Razão Social</label>
                                    <input type="text" name="razao_social" value="{{ $empresa->razao_social }}"
                                        class="form-campo">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Nome Fantasia</label>
                                    <input type="text" name="nome_fantasia" value="{{ $empresa->nome_fantasia }}"
                                        class="form-campo">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" value="{{ $empresa->cnpj }}"
                                        class="form-campo mascara-cnpj">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label"><b class="text-vermelho">*</b> Insc. Estadual</label>
                                    <input type="text" name="ie" value="{{ $empresa->ie }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Insc. Municipal</label>
                                    <input type="text" name="im" value="{{ $empresa->im }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>


                                <div class="col-2 mb-3">
                                    <label class="text-label">Fone:</label>
                                    <input type="text" name="fone" value="{{ $empresa->fone }}"
                                        placeholder="Digite aqui..." class="form-campo mascara-fone">
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Celular:</label>
                                    <input type="text" name="celular" value="{{ $empresa->celular }}"
                                        placeholder="Digite aqui..." class="form-campo mascara-celular">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">E-mail</label>
                                    <input type="text" name="email" value="{{ $empresa->email }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">E-mail Contabilidade</label>
                                    <input type="text" name="email_contabilidade"
                                        value="{{ $empresa->email_contabilidade }}" placeholder="Digite aqui..."
                                        class="form-campo">
                                </div>


                            </div>

                            <span class="d-block mt-4 h4 border-bottom">Informações básicas</span>
                            <div class="rows pb-4">

                                <div class="col-2 mb-3">
                                    <label class="text-label">Cep</label>
                                    <input type="text" name="cep" value="{{ $empresa->cep }}"
                                        placeholder="Digite aqui..." class="form-campo busca_cep">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">Logradouro</label>
                                    <input type="text" name="logradouro" value="{{ $empresa->logradouro }}"
                                        placeholder="Digite aqui..." class="form-campo rua">
                                </div>
                                <div class="col-2 mb-4">
                                    <label class="text-label">Numero</label>
                                    <input type="text" name="numero" value="{{ $empresa->numero }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Bairro</label>
                                    <input type="text" name="bairro" value="{{ $empresa->bairro }}"
                                        placeholder="Digite aqui..." class="form-campo bairro">
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="text-label">Complemento</label>
                                    <input type="text" name="complemento" value="{{ $empresa->complemento }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>


                                <div class="col-2 mb-2">
                                    <label class="text-label">UF</label>
                                    <input type="text" name="uf" value="{{ $empresa->uf }}"
                                        class="form-campo estado">
                                </div>

                                <div class="col-4 mb-3">
                                    <label class="text-label">Cidade</label>
                                    <input type="text" name="cidade" value="{{ $empresa->cidade }}"
                                        placeholder="Digite aqui..." class="form-campo cidade">
                                </div>
                                <div class="col-2 mb-3">
                                    <label class="text-label">Ibge</label>
                                    <input type="text" name="ibge" value="{{ $empresa->ibge }}"
                                        class="form-campo ibge">
                                </div>

                            </div>
                            <div class="rows pb-4">
                                <div class="col-12"><span class="d-block mt-4 h4 border-bottom">Dados Fiscais</span></div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">CNAE</label>
                                    <input type="text" name="cnae" value="{{ $empresa->cnae }}"
                                        placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="text-label">Regime Tributário</label>
                                    <select class="form-campo" name="regime_tributario">
                                        <option value="1"
                                            @if ($empresa->regime_tributario == 1) selected="selected" @endif>Simples Nacional
                                        </option>
                                        <option value="2"
                                            @if ($empresa->regime_tributario == 2) selected="selected" @endif>Lucro Presumido
                                        </option>
                                        <option value="3"
                                            @if ($empresa->regime_tributario == 3) selected="selected" @endif>Lucro Real</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-5 pt-4  text-center">
                                    <input type="hidden" name="id_emitente" value="">
                                    <input type="submit" value="Salvar alterações"
                                        class="btn btn-verde btn-grande d-block m-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
