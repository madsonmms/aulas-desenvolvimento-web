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
						<li><a href="#sobre">Sobre Nós</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#cadastre-se">Cadastre-se</a></li>
						<!-- Menu dropdown -->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<div class="col-lg-12">
									<div class="text-center"><h4>Login</h4></div>
									<form class="form-group" name="login" method="post" action="login.php">
										<div class="form-group">
											<label for="usuario">Usuário</label>
                                                                                        
										</div>
									</form>
								</div>
							</ul>
						</li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
						<!-- Fim dropdown -->
					</ul>
				</div>
			</div>
		</nav>
		
		<header>
			
			<div id="home">
				<div id="banner" class="carousel slide" data-ride="carousel">

					<!-- Indicadores -->
					<ol class="carousel-indicators">
						<li data-target="#banner" data-slide to="0" class="active"></li>
						<li data-target="#banner" data-slide to="1"></li>
						<li data-target="#banner" data-slide to="2"></li>
						<li data-target="#banner" data-slide to="3"></li>
					</ol>

					<!-- Container dos slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="carousel-caption">
								<h1 id="1">Music Around</h1>
								<p>O seu canal de comunicação com o mundo da música</p>
							</div>
						</div>

						<div class="item">
							<div class="carousel-caption">
								<h1 id="2">Facilidade</h1>
								<p>O entretenimento musical nunca foi tão acessível</p>
							</div>
						</div>

						<div class="item">
							<div class="carousel-caption">
								<h1 id="3">Fique Famoso</h1>
								<p>Crie o perfil da sua banda e garanta visibilidade</p>
							</div>
						</div>
						
						<div class="item">
							<div class="carousel-caption">
								<h1 id="4">Encontre os melhores artistas</h1>
								<p>Descubra os artistas mais procurados e leve-os para se apresentar na sua casa</p>
							</div>
						</div>
					</div>

					<!-- Setas de direita e esquerda -->
					<a class="left carousel-control" href="#banner" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#banner" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</header>
		
		<section id="sobre">
			<!-- Sobre Nós -->
			<div class="container text-center">
				<h3>Music Around</h3>
				<p>
					Nós somos uma rede social que conecta todo o mundo da música e seu público em um único canal, promovendo acesso as informações de bandas e estabelecimentos, uma forma rápida e fácil de encontrar um lugar para se divertir! Para isso, criamos um ambiente de comunicação entre estabelecimentos, artistas e público, garantindo praticidade para os artistas que querem aparecer no mercado musical, para estabelecimentos que querem um artista para tocar em sua casa, ou para que o público encontre sua banda favorita e acompanhe seus shows e eventos Brasil a fora.
				</p>
				<br>
			</div>
		</section>
		
		<section></section>
		
		<section id="desenvolvedores">
				<!-- Desenvolvedores -->
			<h4>Conheça os desenvolvedores:</h4>
			<br>
				<div class="row text-center">
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Madson Martins</strong></p>
						<a href="#madson" data-toggle="collapse">
							<img src="Madson.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="madson" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Maicon Pereira</strong></p>
						<a href="#maicon" data-toggle="collapse">
							<img src="Maicon.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="maicon" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Yale Maira</strong></p>
						<a href="#yale" data-toggle="collapse">
							<img src="Yale.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="yale" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
				</div>
				<br><br>
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Milton Lopes</strong></p>
						<a href="#milton" data-toggle="collapse">
							<img src="Milton.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="milton" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Dener Valentim</strong></p>
						<a href="#dener" data-toggle="collapse">
							<img src="Dener.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="dener" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-12">
						<p class="text-center"><strong>Roniere Valentim</strong></p>
						<a href="#roniere" data-toggle="collapse">
							<img src="Roniere.jpg" class="img-circle desenvolvedor" width="150" height="150" alt="teste">
						</a>
						<div id="roniere" class="collapse">
							<p>
								Show<br>
								Show<br>
							</p>
						</div>
					</div>
				</div>
				<!-- Termina Desenvolvedores -->
			</section>
			<!-- Termina Sobre Nós -->
		<section></section>
		
		<section id="contato">
			<div class="container">
				<h3 class="text-center">Contato</h3><br>
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
									<input type="button" class="btn btn-primary pull-right" name="entrar" action="submit" value="Enviar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<footer class="text-center">
			<a class="up-arrow" href="#home" data-toggle="tooltip" title="HOME">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<h3>Sua participação é importante para nós!</h3>
			<p>Sinta-se a vontade para nos mandar um feedback através do nosso formulário de contato.</p>
			<p>Acompanhe nosso projeto através deste site, e siga-nos nas redes sociais</p>
			<a href="http://www.facebook.com.br">
				<img src="fb.png" rel="Facebook Music Around" id="facebook">
			</a>
			<a href="http://www.instagram.com">
				<img src="inst.png" rel="Instagram Music Around" id="instagram">
			</a>
		</footer>
		
		<!-- Aciona o tooltip -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			})
		</script>
		
		<!-- Smooth Scroll -->
		<script>
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
			})
		</script>
		
		<!-- Ajuste automático do tamanho do banner -->
		<script>
			var viewportHeight = $('.item img').outerHeight();
			
			$('.item img').css({height: viewportHeight});
			
			if($('body').hasClass('mobile'))
				{
					var viewportHeight = $('.item img').outerHeight();
					
					$('.item img').css({height: viewportHeight});
				}
		</script>
                
                <script>
                    function loginsucess()
                    {
                        setTimeout("window.location='sucesso.php'", 3000);
                    }
                    
                    function loginfailed()
                    {
                        setTimeout("window.location='template-bootstrap.html'", 3000);
                    }
                </script>
	</body>
</html>