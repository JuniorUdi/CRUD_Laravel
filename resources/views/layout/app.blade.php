<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title> Cadastro de Produtos </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            body { padding: 20px; }
            #link_cadastro { color: #17a2b8; background: #FFF; transition: 0.6s; }
            #link_cadastro:hover { color: #FFF; background: #17a2b8; transition: 0.6s; }
        </style>
    </head>

    <body>
        <div class='container'>
            @component('componente_navbar', ['current' => $current])
            @endcomponent
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    </body>
</html>