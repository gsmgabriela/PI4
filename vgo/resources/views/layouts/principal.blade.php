<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/menu.css" rel="stylesheet">

    <title>V-Go HOME - @yield('titulo', 'Home Page')</title> <!-- yield recebe váriavel -->
</head>


<body>


<div class="navbar-wrapper">

        <div class="navbar navbar-inverse navbar-static-top">

            <div class="navbar-header">
                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                {{--<a class="navbar-brand" href="#"><img class="img" src="/css/img/a.png"></a>--}}
            </div>

            <div class=" navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a class="opcoesMenu" href="@yield( 'home', route('home.index'))">Home</a></li>
                    <li><a href="@yield( 'ponto', route('ponto.index'))">Pontos de Encontros</a></li>
                    <li><a href="@yield( 'predio', route('predio.index'))">Prédios</a></li>
                    <li><a href="@yield( 'locais', route('locais.index'))">Locais</a></li>
                    <li><a href="@yield( 'rotas', route('rotas.index'))">Rotas</a></li>
                    <li><a href="@yield( 'usu', route('usu.index'))">Usuários</a></li>
                    <li><a href="@yield( 'tipo_usuario', route('tipo_usuario.index'))">Tipos de Usuários</a></li>

                </ul>
            </div>

        </div>
       <h1 class="tituloPag">@yield('pagina', 'Bem Vindo')</h1>
    {{--</div><!-- /container -->--}}
</div><!-- /navbar wrapper -->



<form class="form-horizontal" action = "@yield( 'novo', route('usu.create'))" >
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <div class="form-group">
        <div class=" ">
            <button type="submit" class="btn btn-primary btn-md add"> @yield('botaoSuperior', 'Adicionar Novo' )</button>
        </div>
    </div>
</form>

@yield('conteudo')

</body>

</html>


