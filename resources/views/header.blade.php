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
                    <li><a href="#menu_empresa"><span>+</span> Emitente <i class="icon ihome fas fa-truck"></i></a>
                    </li>
                    <li><a href="#menu_cliente"><span>+</span> Cliente <i class="icon ihome fas fa-user"></i></a>
                    </li>
                    <li><a href="#menu_produto"><span>+</span> Produto <i class="icon ihome fas fa-cube"></i></a>
                    </li>
                    <li><a href="venda.html">Venda <i class="icon ihome fas fa-cart-plus"></i></a></li>
                </ul>
            </nav>

            <!-- MENU EMITENTE -->
            <nav class="menuprincipal" id="menu_empresa">
                <ul class="menu-ul">
                    <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                    </li>
                    <span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-user"></i>
                        Emitente</span>
                    <li><a href="{{ route('empresas.index') }}"><i class="icon fas fa-list"></i> Lista</a></li>
                    <li><a href="{{ route('empresas.create') }}l"><i class="icon fas fa-box"></i> cadastro</a></li>
                </ul>
            </nav>

            <!-- MENU CLIENTE -->
            <nav class="menuprincipal" id="menu_cliente">
                <ul class="menu-ul">
                    <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                    </li>
                    <span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-user"></i>
                        Clientes</span>
                    <li><a href="{{ route('clientes.index') }}"><i class="icon fas fa-list"></i> Lista</a></li>
                    <li><a href="{{ route('clientes.create') }}l"><i class="icon fas fa-box"></i> cadastro</a></li>
                </ul>
            </nav>

            <!-- MENU PRODUTO -->
            <nav class="menuprincipal" id="menu_produto">
                <ul class="menu-ul">
                    <li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a>
                    </li>
                    <span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cube"></i>
                        Produto</span>
                    <li><a href="lst-produto.html"><i class="icon fas fa-list"></i> Lista</a></li>
                    <li><a href="frm-produto.html"><i class="icon fas fa-box"></i> cadastro</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
