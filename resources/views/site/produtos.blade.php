<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Produtos</title>
        <meta charset="utf-8">

        <link rel= "stylesheet" href="./css/estilo_basico.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>

    <body>
        <div class="topo">

            <div class="logo">
            <!-- <img src="{{asset('img/logo.png')}}">      --> 
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>


        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <!-- <img src="{{asset('img/facebook.png')}}">      --> 
                <!-- <img src="{{asset('img/linkedin.png')}}">      --> 
                <!-- <img src="{{asset('img/youtube.png')}}">      --> 
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <!-- <img src="{{asset('img/mapa.png')}}">      --> 
                <img src="img/mapa.png">
            </div>
        </div>
    </body>
</html>