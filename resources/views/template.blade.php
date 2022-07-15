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
    @include('header');
    <section class="conteudo-fluido">
        @yield('content')
    </section>


    <div id="fundo_preto"></div>

    <script src="https://kit.fontawesome.com/9480317a2f.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
