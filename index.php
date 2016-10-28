<!DOCTYPE html>
<html lang="br">
<head>
	<title>CS Transportes Executivos</title>
	<meta name="description" content="É uma empresa especializada em transporte executivo, entrega de pequenos pacotes e documentos no estado de SP">
	<meta name="keywords" content="CS Transportes Executivos, Transporte Executivo, Entrega de pequenos pacotes e documentos">
	<meta name="author" content="Vinicius da Silva Fleury - worldvini@hotmail.com" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myjs.js"></script>
</head>
<body>
	<header>
		<nav class="navbar  navbar-inverse navbar-fixed-top navbar-custom">
		  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#home">
				      <picture>
							<source media="(max-width: 980px)" srcset="img/logomobile.jpg">
							<source media="(min-width: 981px)" srcset="img/logodesktop.jpg">
							<img src="img/logodesktop.logomobile.jpg" alt="brand">
						</picture>
					</a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">				     
				     <ul class="nav navbar-nav navbar-right" id="control">
				        <li><a href="#home">Home</a></li>	
				        <li><a href="#empresa">Empresa</a></li>	
				        <li><a href="#servico">Serviços</a></li>
				        <li><a href="#fotos">Frota</a></li>
				        <li><a href="#contato">Contato</a></li>	
				     </ul>
			     </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<!--end definition to carousel -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/slider_carousel_1.jpg" alt="carousel foto 1">
						<div class="carousel-caption">
							<h3>Transporte Executivo de Passageiros em todo o estado de São Paulo</h3>
							<p>Tudo com Qualidade, Conforto e Segurança</p>
						</div>
					</div>
					<div class="item">
						<img src="img/slider_carousel_2.jpg" alt="carousel foto 2">
						<div class="carousel-caption">
							<h3>Agende conosco</h3>
							<p>Viagens de São Paulo para outros Estados</p>
						</div>
					</div>
					<div class="item">
						<img src="img/slider_carousel_3.jpg" alt="carousel foto 3">
						<div class="carousel-caption">
							<h3>Viage tranquilo</h3>
							<p>Levamos e recepcionamos você nos principais aeropostos de São Paulo</p>
						</div>
					</div>
				</div>
				<!-- end content to carousel -->
				    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					 <span class="sr-only">Next</span>
					</a>
				  <!-- end Controls -->
				
			</div><!-- end carrosel -->
	</header>
	<main class="contPrincipal">
		<section>
			<div class="container empresa">
				<h1>Uma empresa de valor em <br> <strong>Transporte Executivo</strong></h1>
				<p><strong>CS Transporte Executivo</strong> é uma empresa voltada ao melhor atendimento com politicas rigorosas no quesito qualidade que conta com uma frota de carros novos com documentação e revisão sempre em dia.</p>
				<p>Sendo especialiada em transporte executivo, contamos com ótimos treinamentos de nossos motoristas, que trabalham sempre felizes e motivados para melhor atender suas necessidades</p>
				<p>Prestamos serviço de transporte de pessoas, retirada/entrega de encomendas, cargas e malas de passageiros por toda são paulo, Locação de Veículos com motorista ( Carro comum, Carro Executivos) e como estamos em sempre em crescimento, logo atenderemos todo o Brasil.</p>
			</div>
		</section>
	</main><!-- end main subject website -->
	<section>
		<div class="servicos">
			<div>
				<i class="fa fa-taxi fa-3x" aria-hidden="true"></i>
			</div>
			<div>
				<i class="fa fa-street-view fa-3x" aria-hidden="true"></i>
			</div>
			<div>
				
			</div>
			
		</div>		
	</section>
	<section>
		<div class="frota">
			
		</div>
	</section>
	<section>
		<div class="container contato">
			<script>
						function envia()
						{
						{ document.formEnvia.submit();  }
						}
			</script>
			<form name="formEnvia" method="POST" action="email/envio.php" class="form-horizontal" target="_blank">
				<h2>Entre em contato</h2>
				<div class="form-group">
				    <label for="nome1" class="col-sm-3 control-label">Nome</label>
				    <div class="col-sm-7">
				    	<input 
					    	type="text" 
					    	name="nome" 
					    	class="form-control" 
					    	id="nome1" 
					    	placeholder="José Maria"
				    	>
				    </div>
				</div>
				<div class="form-group">
				    <label for="tel1" class="col-sm-3 control-label">Telefone</label>
				    <div class="col-sm-7">
				    	<input 
					    	type="text" 
					    	name="telefone" 
					    	class="form-control" 
					    	id="tel1" 
					    	placeholder="00 9999 8888"
				    	>
				    </div>
				</div>
				<div class="form-group">
				    <label for="email1" class="col-sm-3 control-label">Email</label>
				    <div class="col-sm-7">
				    	<input 
					    	type="text" 
					    	name="email" 
					    	class="form-control" 
					    	id="email1" 
					    	placeholder="seuemail@seuemail.com"
				    	>
				    </div>
				</div>
				<div class="form-group">
				    <label for="text1" class="col-sm-3 control-label">Mensagem</label>
				    <div class="col-sm-7">
				    	<textarea 
					    	name="texto" 
					    	class="form-control" 
					    	rows="4" 
					    	id="text1" 
					    	placeholder="Deixe sua mensagem aqui... Entraremos em contato."
				    	></textarea>
				    </div>
				</div>
				    <button type="submit" name="enviarFormulario" class="btn btn-default" onclick="envia()">Enviar</button>					
			</form>					
		</div>
	</section><!--end section contact-->
	<footer>
		<div class="conteiner">
			<p>2016 - Todos os Direitos Reservados <br> Desenvolvido por <a href="#">World Vini Desenvolvimento Web</a></p>
		</div>
		
	</footer>
</body>
</html>