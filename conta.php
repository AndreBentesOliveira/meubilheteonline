<?PHP
session_start();

$_SESSION['idusuario'];
$_SESSION['cpf'];
$_SESSION['cep'];
$_SESSION['datanascimento'];
$_SESSION['bairro'];
$_SESSION['rua'];
$_SESSION['logadouro'];
$_SESSION['numero'];
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
									<a href="index.html" class="logo">Olá, <strong><?php echo $_SESSION['nomecompleto'];?></strong></a>
									<?php 
									
									date_default_timezone_set('America/Rio_branco');
									
									echo "Data: ".date('d-m-Y', time()); ?>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
									<section id="conta" class="four">
						<div class="container">

							<header>
								<h2>Minha Conta</h2>
							</header>

							<p>Insira suas informações corretamente</p>
							<?php 
							$sessaoid = $_SESSION['idusuario'];
	$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
    $db = mysql_select_db('meubilhete');
	$busca_query = mysql_query("SELECT * FROM `usuario` WHERE idusuario = '$sessaoid'")or die(mysql_error());
?>                       <?php while ($dados = mysql_fetch_array($busca_query)) { ?>
							<form method="POST" action="atualizacadastro.php">
								
								
								
								<h4> Infomações Pessoais</h4>
								<div class="row 50%">
									<div class="12u"><input type="hidden" name="idusuario" placeholder="ID USUÁRIO" id="idusuario" value="<?php echo $_SESSION['idusuario'];?>" /> </div>
									
								</div>
								
								<div class="row 50%">
									<div class="12u"><input type="text" name="nomecompleto" placeholder="Nome Completo" id="nomecompleto" value="<?php echo $dados['nomecompleto'];?>" /></div>
									
								</div>
								<div class="row 50%">
									<div class="7u"><input type="text" name="cpf" placeholder="CPF" id="cpf" value="<?php echo $dados['cpf'];?>" /></div>
									<div class="5u"><input type="date" name="datanascimento" placeholder="Data de Nascimento" id="datanascimento" value="<?php echo $dados['datanascimento'];?>" /></div>
									
								</div>
								
								<div class="row 50%">
									<div class="5u"><input type="text" name="cep" placeholder="CEP" id="cep" value="<?php echo $dados['cep'];?>" /></div>
									<div class="7u"><input type="text" name="bairro" placeholder="Bairro" id="bairro" value="<?php echo $dados['bairro'];?>" /></div>
								</div>
								<div class="row 50%">
									<div class="9u"><input type="text" name="logadouro" placeholder="Logadouro" id="logadouro" value="<?php echo $dados['logadouro'];?>" /></div>
									<div class="3u"><input type="text" name="numero" placeholder="Número" id="numero" value="<?php echo $dados['numero'];?>" /></div>
								</div>
								<h4>Informações de Usuário</h4>
								<div class="row 50%">
									<div class="12u"><input type="text" name="email" placeholder="E-mail" id="email" value="<?php echo $dados['email'];?>" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><input type="password" name="password" placeholder="Senha" id="password" value="<?php // echo $dados['password'];?>" /></div>
									
									
									
									
								</div>
								<div class="row 50%">
									<div class="12u">
										<span>Upload da sua foto de Perfil </span><input type="file" placeholder="Upload da sua foto de Perfil" id="fotouser" name="fotouser"/>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" value="Atualizar" />
									</div>
								</div>
								
								<?php } ?>
							</form>

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