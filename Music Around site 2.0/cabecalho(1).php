<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Madson Martins">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- AOS -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <title>Music Around</title>
    </head>

    <body id="idex" data-spy="scroll" data-target=".navbar" data-offset="50" class="mobile">	
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navegacao">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="logo" href="#home">Music Around</a>
                </div>
                <div class="collapse navbar-collapse" id="navegacao">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#home">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sobre Nós
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" id="empresa">
                                <li><a href="#sobre">Sobre a Empresa</a></li>
                                <li><a href="#desenvolvedores">Desenvolvedores</a></li>
                            </ul> 
                        </li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cadastro.php">Cadastre-se!</a></li>
                    </ul>
                </div>
            </div>
        </nav>


