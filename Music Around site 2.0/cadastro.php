<html>
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
        <title>Cadastro</title>
        <style>
            body
            {
                background: url(background1.jpg);
                background-attachment: fixed;
            }
            
            header
            {
                color: #fff;
                background: transparent;
            }
            
            .container
            {
                padding: 50px 120px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                background-size: cover;
            }
            
            .navbar 
            {
                margin-bottom: 0;
                background-color: #1a1a1a;
                border: 0;
                font-size: 14px !important;
                letter-spacing: 1px;
                opacity:0.9;
            }
            
            h2
            {
                font-family: harlow solid !important;
                font-size: 40px;
                color: #fff;
            }
            
            /*------------ tabs --------------*/
            
            .nav-tabs>li>a {
              position: relative;
              color: rgba(255, 255, 255, 0.7);
              border: 0px;
              font-weight: bold;
              padding: 12px 15px 14px 15px;
            }

            .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:active {
              background: transparent;
              color: #fff;
              cursor: default;
              border: 0 !important;
            }

            .nav-tabs>li >a:hover {
              color: rgba(255, 255, 255, 0.8);
              background: transparent;
            }

            ul.nav-tabs>li.active>a:after {
              display: block;
              content: '';
              position: absolute;
              bottom: 0;
              left: 0;
              width: 100%;
              height: 6px;
              background: yellow;
            }
            
            fieldset
            {
                margin: 10px;
                padding: 10px;
            }
            
            legend
            {
                color: #fff;
            }
            
            .termos
            {
                margin: 10px;
            }
        </style>
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
                    <a class="navbar-brand" id="logo" href="index.php">Music Around</a>
                </div>
                <div class="collapse navbar-collapse" id="navegacao">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="index.php">Home</a></li>
                </div>
            </div>
        </nav>
        <header id="cadastro">
            <div class="container">
                <div class="col-sm-12">
                    <h2 class="neon-vermelho">Cadastre-se</h2>
                    <div class="perfil">
                        <h4>Nos diga o que você é:</h4>
                        <ul class="nav nav-tabs nav-justified perfil">
                            <li class="active"><a data-toggle="tab" href="#publico">Público</a></li>
                            <li><a data-toggle="tab" href="#banda-artista">Banda/Artista</a></li>
                        </ul>    
                    </div>
                    <div class="tab-content formulario-cadastro">
                        <div id="publico" class="tab-pane fade in active">
                            <div class="formulario">
                                <h3>Público</h3>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <legend>Dados Pessoais</legend>
                                            <form class="form-horizontal" action="cadastrar.php">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="frmNome">Nome Completo</label>
                                                        <input type="text" class="form-control input-sm" name="frmNome" id="frmNome" required>
                                                    </div>  
                                                </div>
                                                <div class="form-group">
                                                    <label for="radSexo" class="col-sm-4 control-label">Sexo: </label>
                                                    <div class="col-sm-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" class="form-chek-input" name="radSexo" id="radMasculino" value="masculino"> Masculino
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" class="form-chek-input" name="radSexo" id="radFeminino" value="feminino"> Feminino
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="frmNascimento" class="col-sm-4 control-label">Nascimento: </label>
                                                    <div class="col-sm-8">
                                                        <input type="date" class="form-control input-sm" name="frmNascimento" id="frmNascimento" placeholder="Data de nascimento" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="frmUsuario">E-mail ou número de celular</label>
                                                        <input type="text" class="form-control input-sm" id="frmUsuario" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="frmSenha">Nova senha</label>
                                                        <input type="text" class="form-control" name="frmSenha" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="frmRepeteSenha">Confirmar senha</label>
                                                        <input type="text" class="form-control" name="frmRepeteSenha" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                    <input type="submit" class="btn btn-primary" action="cadastrar.php" value="Cadastrar!">
                                                    </div>
                                                </div>
                                            </form>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <legend>Redes Socias</legend>
                                        <label>Cadastre-se usando:</label>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        </div>
                                        <label>ou</label>
                                        <div>
                                            <a href="#" class="btn btn-danger btn-block"><i class="fab fa-google-plus-g"></i> Google</a>
                                        </div>
                                        <label>ou</label>
                                        <div>
                                            <a href="#" class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Twitter</a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>            
                        <div id="banda-artista" class="tab-pane fade in">
                            <div class="formulario">
                                <h3>Artista/Banda</h3>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <legend>Dados do(a) Artista/Banda</legend>
                                        <form class="form-horizontal" action="cadastrar-banda.php">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="frmNomeBanda" class>Nome</label>
                                                    <input class="form-control" name="frmNomeBanda" id="frmNomeBanda" type="texr" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="frmUsuarioBanda">E-mail</label>
                                                    <input class="form-control" name="frmUsuarioBanda" id="frmUsuarioBanda" type="email" required>
                                                    <span>* Se tratar-se de um grupo/banda, utilizar e-mail do mesmo.</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="frmSenhaBanda">Nova Senha</label>
                                                    <input class="form-control" name="frmSenhaBanda" id="frmSenhaBanda" type="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label for="frmRepeteSenhaBanda">Confirmar Senha</label>
                                                    <input class="form-control" name="frmRepeteSenhaBanda" type="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="submit" class="btn btn-primary" action="cadastrar-banda.php" value="Cadastrar!">
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset>
                                    <legend>Redes Socias</legend>
                                        <label>Cadastre-se usando:</label>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        </div>
                                        <label>ou</label>
                                        <div>
                                            <a href="#" class="btn btn-danger btn-block"><i class="fab fa-google-plus-g"></i> Google</a>
                                        </div>
                                        <label>ou</label>
                                        <div>
                                            <a href="#" class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Twitter</a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 termos">
                    Ao clicar em "Cadastrar!" você aceita nossos <a href="#" style="color: #286090;">Termos de Serviço e Política de dados</a>. Seus dados não serão compartilhados com ninguém.
                </div>
            </div>
            <div class="divisoria neon-azul-borda"></div>
        </header>
    </body>
</html>

