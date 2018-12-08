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
									<a href="index.html" class="logo"><strong> <a href="index.html">Efetuar Login</a></strong></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Cadastro</h2>
							</header>

							<p>Insira suas informações corretamente</p>
							
							<form method="POST" action="validacadastro.php">
								<h4> Infomações Pessoais</h4>
								<div class="row 50%">
									<div class="12u"><input type="text" name="nomecompleto" placeholder="Nome Completo" id="nomecompleto" /></div>
									
								</div>
								<div class="row 50%">
									<div class="7u"><input type="text" name="cpf" placeholder="CPF" id="cpf" /></div>
									<div class="5u"><input type="date" name="datanascimento" placeholder="Data de Nascimento" id="datanascimento" /></div>
									
								</div>
								
								<div class="row 50%">
									<div class="5u"><input type="text" name="cep" placeholder="CEP" id="cep" /></div>
									<div class="7u"><input type="text" name="bairro" placeholder="Bairro" id="bairo" /></div>
								</div>
								<div class="row 50%">
									<div class="9u"><input type="text" name="logadouro" placeholder="Logadouro" id="logadouro" /></div>
									<div class="3u"><input type="text" name="numero" placeholder="Número" id="numero" /></div>
								</div>
								<h4>Informações de Usuário</h4>
								<div class="row 50%">
									<div class="12u"><input type="text" name="email" placeholder="E-mail" id="email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><input type="password" name="password" placeholder="Senha" id="password" /></div>
								</div>
								<!--<div class="row 50%">
									<div class="12u"><input type="password" name="passwordvalida" placeholder="Confirme a Senha" id="passwordvalida" /></div>
								</div>-->
								<div class="row 50%">
									<div class="6u"><input type="text" name="codcartao" placeholder="Código do Cartão" id="codcartao" /></div>
									<div class="6u"><select id="tipocartao" name="tipocartao" class="field-style">
													  <option value="" selected disabled="disabled" hidden>Tipo do Cartão</option>
													  <option value="1">Estudante</option>
													  <option value="2">Padrão</option>
										              
													  	
													</select>
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<span>Upload da sua foto de Perfil </span><input type="file" placeholder="Upload da sua foto de Perfil" id="fotouser" name="fotouser"/>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" value="Enviar" />
									</div>
								</div>
							</form>

						</div>
					</section>


							<!-- Section -->
								

							<!-- Section -->
								

						</div>
					</div>

				<!-- Sidebar -->
					<!-- Menu -->
								<?php //include("menu.php"); ?>

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