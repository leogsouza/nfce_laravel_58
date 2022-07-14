<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema NFe - mjailton</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    <link rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}" />
    <link rel="stylesheet" href="{{ url(mix('assets/js/datatables/css_datatables.css')) }}" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="{{ url(mix('assets/js/jquery.js')) }}"></script>

</head>

<body>
    <header class="bg-topo">
        <div class="conteudo">
            <div class="navbar">
                <input type="checkbox" id="chx">
                <label for="chx" class="mobmenu">
                    <!--menu mobile--><i class="fas fa-bars"></i>
                </label>
                <a href="index.html" class="logo" alt="ERP completa"><img src="{{ asset('assets/img/logo.png') }}"
                        class="img-fluido"></a>

                <ul class="menutopo">
                    <li id="button"><img src="{{ asset('assets/img/foto.png') }}" class="img"> <span>Manoel
                            Jailton </span></li>
                    <ul id="effect" class="newClass">
                        <li><a href=""><i class="fas fa-sign-in-alt"></i> Sair</a></li>
                    </ul>
                </ul>

                <nav class="menuprincipal" id="principal">
                    <ul class="menu-ul">
                        <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                        </li>
                        <li><a href="configuracao_nota.html"><i class="icon fas fa-file-invoice-dollar"></i>
                                Configurações de nota</a></li>
                        <li><a href="#menu_cliente"><span>+</span> Emitente <i class="icon ihome fas fa-user"></i></a>
                        </li>
                        <li><a href="#menu_produto"><span>+</span> Produto <i class="icon ihome fas fa-cube"></i></a>
                        </li>
                        <li><a href="venda.html">Venda <i class="icon ihome fas fa-cart-plus"></i></a></li>
                    </ul>
                </nav>

                <!-- MENU EMITENTE -->
                <nav class="menuprincipal" id="menu_cliente">
                    <ul class="menu-ul">
                        <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                        </li>
                        <span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i
                                class="icon fas fa-user"></i> Emitente</span>
                        <li><a href="lst-emitente.html"><i class="icon fas fa-list"></i> Lista</a></li>
                        <li><a href="frm-emitente.html"><i class="icon fas fa-box"></i> cadastro</a></li>
                    </ul>
                </nav>

                <!-- MENU PRODUTO -->
                <nav class="menuprincipal" id="menu_produto">
                    <ul class="menu-ul">
                        <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                        </li>
                        <span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i
                                class="icon fas fa-cube"></i> Produto</span>
                        <li><a href="lst-produto.html"><i class="icon fas fa-list"></i> Lista</a></li>
                        <li><a href="frm-produto.html"><i class="icon fas fa-box"></i> cadastro</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="conteudo-fluido">
        <div class="col-12 mb-3">
            <div class="card-body pt-0">

                <div class="rows">
                    <div class="col-12 my-0">
                        <div class="caixa radius-4 p-5 border">
                            <div class="rows">
                                <div class="col-6 m-auto text-center d-flex center-middle radius-4"
                                    style="background:#3a3839">
                                    <div class="width-100">
                                        <img src="{{ asset('assets/img/logo_2.png') }}" class="img-fluido">
                                    </div>
                                </div>
                                <div class="col-6 m-auto text-center">
                                    <img src="{{ asset('assets/img/logo_mjailton_2.png') }}" class="img-fluido p-2">
                                    <span class="d-block text-center h4 mt-3 mb-0">Acesse nosso site:<a
                                            href="https://mjailton.com.br"target="blanc" class="text-azul">
                                            mjailton.com.br</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="card bg-title2">
                            <div class="card-body rows p-2">
                                <div class="col-md-8 col-ms-12 col-12">
                                    <i
                                        class="fas fa-tv text-branco d-inline-block grande-font float-left mr-1 mb-0 mt-0"></i>
                                    <span class="h3 text-branco mb-0" style="line-height:2rem"><strong>Nossos
                                            cursos</strong></span>
                                    <span class="d-block text-branco h4 mb-0">Veja a abaixo a lista com nossos cursos
                                        completos</span>
                                </div>
                            </div>
                        </div>
                        <div class="caixa">
                            <div class="rows">
                                <div class="col-12">
                                    <span class="d-block h4 text-uppercase p-2 border-bottom"><b>Cursos do Método ágora
                                            php</b></span>
                                </div>
                            </div>
                            <div class="rows px-2">
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/formacao_php_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Formação PHP completo</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-roxo text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_erp_php_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Projeto ERP PHP </span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-roxo text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_nfe_php_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Projeto NFE PHP </span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-roxo text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_contabil_php_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Contabilidade com PHP </span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-roxo  text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="rows mt-4">
                                <div class="col-12">
                                    <span class="d-block h4 text-uppercase p-2 border-bottom border-top"><b>Cursos do
                                            Método ágora laravel</b></span>
                                </div>
                            </div>

                            <div class="rows px-2">
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_formacao_laravel_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Formação laravel</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-vermelho text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_erp_laravel_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">ERP laravel</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-vermelho text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_nfe_laravel_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">NFE com laravel</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-vermelho text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/projeto_contabil_laravel_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Contabilidade com laravel</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-vermelho text-branco btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="rows mt-4">
                                <div class="col-12">
                                    <span class="d-block h4 text-uppercase p-2 border-bottom border-top"><b>Cursos do
                                            Método ágora Java</b></span>
                                </div>
                            </div>

                            <div class="rows px-2">
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/formacao_spring_java_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Formação spring</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-verde btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/formacao_android_java_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5 fw-bold">Formação android</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-verde btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="" class="cursos-mj position-relative d-block">
                                        <img src="http://mjailton.com.br/imagens_geral/img_udemy/formacao_java_jsf_udemy.png"
                                            class="img-fluido">
                                        <div class="info-curso">
                                            <span class="tt d-block mb-0 h5">Formação java JSF</span>
                                            <small class="tt d-block mb-2 text-azul">Por: Manoel jailton</small>
                                            <span class="btn btn-verde btn-medio">Mais detalhes</span>
                                        </div>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div id="fundo_preto"></div>

    <script src="https://kit.fontawesome.com/9480317a2f.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url(mix('assets/js/biblio.js')) }}"></script>

    <script src="{{ url(mix('assets/js/datatables/js_datatables.js')) }}"></script>
    <script src="{{ url(mix('assets/js/componentes.js')) }}"></script>
    <script src="{{ url(mix('assets/js/js.js')) }}"></script>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
</body>

</html>
