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
                            <li><a href="index.php/#home" class="home">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sobre Nós
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" id="empresa">
                                    <li><a href="index.php/#sobre-music">Sobre o Music Around</a></li>
                                    <li><a href="index.php/#sobre-empresa">Sobre a Empresa</a></li>
                                    <li><a href="index.php/#desenvolvedores">Desenvolvedores</a></li>
                                </ul> 
                            </li>
                            <li><a href="index.php/#contato">Contato</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="cadastro.php">Cadastre-se!</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <header id="home">
                <div class="container text-center titulo hidden">
                    <div class="col-sm-12">
                        <div class="logo">
                            <h1 class="neon-azul">Music Around</h1>
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <fieldset>
                                <h2 class="neon-vermelho">Bem Vindo!</h2>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </header>
            <div class="divisoria neon-azul-borda"></div>
            <section id="sobre-music">
                <div class="container text-justify">
                    <div class="col-sm-12 conteudo-texto">
                        <h2 class="neon-azul">O Music Around</h2>
                        <p>
                            Bandas de garagem, artistas que tocam nas ruas ou bares
                            de todas as cidades, muitos entre eles tem algo em 
                            comum: <b>Talento!</b>. Mas nem sempre suas músicas 
                            chegam aos nossos ouvidos mesmo que mereçam que o 
                            Brasil inteiro os conheça, e alguns fatores contribuem
                            para que isso aconteça, entre eles a quantidade de
                            informação que nos bombardeia todos os dias. Quantas
                            vezes você já não viu uma banda ou um artista legal
                            tocando em algum lugar e você nunca mais ouviu falar
                            dele depois?
                        </p>
                        <p>
                            Procuramos encontrar uma maneira de conectar estes
                            artistas incríveis com seu público, e depois de
                            muito trabalho encontramos! Talvez o que falte
                            seja um espaço reservado para quem procura e quem
                            ser encontrado, e é justamente sobre isso Music
                            Around trata. Criamos uma rede social focada no
                            mundo da música onde seu artista ou banda favorita
                            pode postar seus vídeos, divulgar show, além de 
                            participar de um sistema de ranking com outros que 
                            tocam no mesmo estilo!
                        </p>
                        <p>
                            "<u>E o que o Music Around tem a oferecer para o
                            público?</u>" . Essa é amelhor parte, afinal,
                            o que seria de um artista sem os seus fãs?
                            Para o público temos um sistema de pesquisa
                            repleto de filtros para que você encontre
                            exatamente o que procura, você saberá quais são
                            as melhores bandas naquele estilo ou região,
                            além de poder comentar, dar nota, ouvir as músicas
                            e saber quando serão as próximas apresentações.
                        </p>
                        <p>
                            Gostou? 
                        </p>
                        <p>
                            <b>Então entre nessa com a gente, e conheça
                            o melhor do mundo da música!</b>
                        </p>
                    </div>
                </div>
            </section>
            <div class="divisoria"></div>
            <section id="sobre-empresa">
                <!-- Sobre Nós -->
                <div id="sobre-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#sobre-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#sobre-carousel" data-slide-to="1"></li>
                        <li data-target="#sobre-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container">
                                <div class="col-sm-12 text-center conteudo-carousel conteudo-texto">
                                    <h2 class="neon-amarelo">Por que estamos aqui</h2>
                                    <p style="font-size: 34px;">
                                        O Music Around quer encontrar os artistas
                                        mais talentosos que existem por aí e conectá-los
                                        com o público. Para isso criamos uma rede social
                                        totalmente voltada para o mundo da música.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3>Friedrich Nietzsche</h3>
                                <p>"Sem <b>música</b>, a vida seria um erro."</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="col-sm-12 text-center conteudo-carousel conteudo-texto">
                                    <h2 class="neon-verde">Nossos Valores</h2>
                                    <p>
                                        Acreditamos na música como forma de expressão artística e social
                                        e portanto buscamos torná-la mais acessível para todos.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3>Ludwig van Bethoven</h3>
                                <p>"A <b>música</b> é o tipo de arte mais perfeita: nunca revela o seu último segredo."</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="col-sm-12 text-center conteudo-carousel conteudo-texto">
                                    <h2 class="neon-violeta">Nossa Missão</h2>
                                    <p>
                                        Garantir inclusão social e no mercado para artístas,
                                        e tornar seu trabalho acessível para todos, deixando-os
                                        mais conectado com seu público.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3>Ludwig van Bethoven</h3>
                                <p>
                                    "A <b>música</b> é o vínculo que une a vida do espírito à vida dos sentidos. 
                                    A melodia é a vida sensível da poesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#sobre-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#sobre-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </section>
            <div class="divisoria"></div>
            <section id="desenvolvedores">
                <div class="container text-center">
                    <div class="col-sm-12 text-center conteudo-texto desenvolvedores-tab">
                    <h2 class="text-center neon-vermelho">Conheça nossos desenvolvedores:</h2>
                    <br>
                    <div data-aos="fade-left" data-aos-duration="1000">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#madson">Madson Martins</a></li>
                            <li><a data-toggle="tab" href="#yale">Yale Maira</a></li>
                            <li><a data-toggle="tab" href="#milton">Milton Lopes</a></li>
                            <li><a data-toggle="tab" href="#dener">Dener Valentim</a></li>
                            <li><a data-toggle="tab" href="#roniere">Roniere Francisco</a></li>
                            <li><a data-toggle="tab" href="#maicon">Maicon Pereira</a></li>
                        </ul>
                    </div>
                    <div class="tab-content desenvolvedor" data-aos="fade-left" data-aos-duration="1000">
                        <div id="madson" class="tab-pane fade in active">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Madson.jpg" class="img-circle" width="150" height="150" alt="Madson" align="left"></td>
                                        <td>
                                            <h4>Gerente, Web Designer</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="yale" class="tab-pane fade in">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Yale.jpg" class="img-circle" width="150" height="150" alt="Yale" align="left"></td>
                                        <td>
                                            <h4>Analista de Sistemas</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="milton" class="tab-pane fade in">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Milton.jpg" class="img-circle" width="150" height="150" alt="Milton" align="left"></td>
                                        <td>
                                            <h4>Programador Web</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="dener" class="tab-pane fade in">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Dener.jpg" class="img-circle" width="150" height="150" alt="Dener" align="left"></td>
                                        <td>
                                            <h4>Designer e Programador C#</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="roniere" class="tab-pane fade in">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Roniere.jpg" class="img-circle" width="150" height="150" alt="Roniere" align="left"></td>
                                        <td>
                                            <h4>Designer e Programador C#</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="maicon" class="tab-pane fade in">
                            <div class="col-sm-12">
                                <table>
                                    <tr>
                                        <td align="left"><img src="Maicon.jpg" class="img-circle" width="150" height="150" alt="Maicon" align="left"></td>
                                        <td>
                                            <h4>Revisor</h4>
                                            <p>Atualmente cursando Tecnologia em Análise e Desenvolvimento de Sistemas na UNINOVE</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Termina Sobre Nós -->
            </section>
            <div class="divisoria neon-azul-borda"></div>
            <section id="contato">
                <div class="container">
                    <div class="col-sm-12 text-center">
                        <h2 class="neon-laranja">Contato</h2>
                        <h4>Preencha o formulário</h4>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Ficou com dúvida, ou quer se tornar um colaborador?<br>Envie-nos uma mensagem!</p>
                            <p><span class="glyphicon glyphicon-phone"></span> (11)95822-3767</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> E-mail: xaropados.uninove@gmail.com</p>
                        </div>
                        <div class="col-md-8">
                            <form class="form-group" name="contato" action="post">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
                                    </div>
                                    <div class="col-sm-6 form-group">							<input class="form-control" id="email" name="email" 	placeholder="E-mail" type="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="comentario" name="comentario" placeholder="Coloque aqui seu comentário" rows="10"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" class="btn btn-primary pull-right" name="enviar" value="Enviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12">
                            <h3>Siga-nos nas redes sociais</h3>
                            <a href="http://www.facebook.com.br" class="social-footer facebook-icone">
                                <i class="fab fa-facebook-f fa-3x"></i>
                            </a>
                            <a href="https://www.plus.google.com" class="social-footer google-plus-icone">
                                <i class="fab fa-google-plus-g fa-3x"></i>

                            </a>
                            <a href="http://www.instagram.com" class="social-footer instagram-icone">
                                <i class="fab fa-instagram fa-3x"></i>
                            </a>
                            <a href="http://www.twitter.com" class="social-footer twitter-icone">
                                <i class="fab fa-twitter fa-3x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="divisoria neon-azul-borda"></div>
            <footer class="text-center">
                <a class="up-arrow" href="#home" data-toggle="tooltip" title="HOME">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
                <h2>Sua participação é importante para nós!</h2>
                <p>Sinta-se a vontade para nos mandar um feedback através do nosso formulário de contato.</p>
                <p>Acompanhe nosso projeto através deste site, e siga-nos nas redes sociais</p>
            </footer>

            <script>
                //AOS inicialização
                $(document).ready(function(){
                    AOS.init();
                });
                
                //Aciona tooltip
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
                
                //Hide logo com scroll
                $(document).ready(function(){
                    $('.titulo').fadeIn(600).removeClass('hidden');
                });
                $(window).scroll(function(){
                    if($(this).scrollTop()>0)
                    {
                        $('.titulo').fadeOut(600);
                    }
                    else
                    {
                        $('.titulo').fadeIn(600);
                    }
                });
     
                //Smooth Scroll
                $(document).ready(function()
                {
                    //Adiciona Smoth Scroll para o navbar e o link do footer
                    $(".navbar a, footer a[href='#home']").on('click', function(event)
                    {
                        //Garante que this.hash tenha um valor antes de anular o valor padrão
                        if (this.hash !== "")
                        {
                            //Previne o comportamento de ancoragem de click pardão
                            event.preventDefault();

                            //Guarda a hash
                            var hash = this.hash;

                            //Usa o método animate() para adicionar o smooth scroll
                            //O número 900 é opcicional e indica os milisegundos necessários para rolar para a área específica
                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 900, function(){
                            //Adiciona uma hash (#) no URL quando terminar o scroll (comportamento de click padrão)
                            window.location.hash=hash;
                            });
                        } //Termina If
                    });			 
                });

                //Ajuste automático do banner
                var viewportHeight = $('.item img').outerHeight();
                
                $('.item img').css({height: viewportHeight});

                if($('body').hasClass('mobile'))
                {
                    var viewportHeight = $('.item img').outerHeight();
                    $('.item img').css({height: viewportHeight});
                }
                
                //Navbar transparente
                $(document).on('scroll', function() 
                {
                    if ($(window).width() > 992) {
                        var rgba = $(document).scrollTop() / 500;
                        $('.navbar').css('background-color', 'rgba(26,26,26,' + rgba + ')');
                    }
                });
            </script>
	</body>
</html>