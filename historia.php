<?PHP
session_start();

$_SESSION['idusuario'];
$_SESSION['email'];
$_SESSION['password']; 
$_SESSION['nomecompleto'];
$_SESSION['codcartao'];
$_SESSION['tipocartao'];
$_SESSION['fotouser'];


//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['email']) and !isset($_SESSION['password']) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['email']);
	unset ($_SESSION['password']);
	
	//Redireciona para a página de autenticação
	header('location:index.html');
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Meu Bilhete</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo">Olá, <strong><?php echo $_SESSION['nomecompleto'];?></strong></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
										<center><h1>Meu Bilhete<br/>
											</h1></center>
											<center><p>Obrigado por escolher o Meu Bilhete</p></center>
										</header>
										<center><p>A plataforma de recargas e consultas Meu Bilhete, surgiu a partir do problema existente na vida de muitos usuários da bilhetagem eletrônica do transporte público. Relatos de usuários citando problemas desde a falta de saldo eu seu bilhete/cartão, até mesmo tentativas de assaltos e assédios nas paradas, fez com que fosse idealizada e construída essa plataforma.<br>
										Trazendo as tecnologias mais avançadas, o Meu Bilhete faz com que seus usuários possam fazer recargas e consultas de forma rápida e fácil, em qualquer momento e em qualquer lugar. Esqueça filas no ato da recarga, consulte horário e rotas dos veículos antes mesmo de sair de casa, verifique seu saldo antes de entra no veículo. <br> 
										Meu Bilhete traz inovação e facilidade, além é claro de confiança e sigilo de informações esperando uma boa aceitação de usuários e sempre trazendo atualizações e melhorias à plataforma.
										<br>
</p></center>

										<ul class="actions">
											<center><li><a href="index.php" class="button big">Voltar para Home</a></li></center>
										</ul>
									</div>
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<center><h2>Vantagens de usar o Meu Bilhete</h2></center>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-ticket"></span>
											<div class="content">
												<h3>Recarregar Rápida</h3>
												<p>Recarregue seu cartão sem necessidade de ir para filas ou até os pontos de recarga,faça isso em casa de forma rápida e fácil. </p>
											</div>
										</article>
										<article>
											<span class="icon fa-money"></span>
											<div class="content">
												<h3>Consultar Saldo</h3>
												<p>Nunca mais embarque sem saber seu saldo,aqui você pode fazer a consulta e recarga de forma simples e facil.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-bus"></span>
											<div class="content">
												<h3>Consulta de Horários</h3>
												<p>Não passe mais horas na parada por não saber os horário do seu transporte, faça a consulta e saia de casa apenas na hora certa.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-map"></span>
											<div class="content">
												<h3>Rotas</h3>
												<p>Esta com duvida de quais as melhores rotas para o local onde deseja ir ? faça a consulta de rotas e evite transtornos. </p>
											</div>
										</article>
									</div>
								</section>

							

						</div>
					</div>

				<!-- Sidebar -->
					<!-- Menu -->
								<?php include("menu.php"); ?>

							<!-- Section -->
								
			</div>

		<!-- Scripts -->
			<script
  src="https://code.jquery.com/jquery-1.11.3.min.js"
  integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
  crossorigin="anonymous"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>