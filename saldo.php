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
									<a href="index.html" class="logo"><strong><?php echo $_SESSION['nomecompleto'];?></strong></a>
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
						<?php 
							$sessaoid = $_SESSION['idusuario'];
							$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
    						$db = mysql_select_db('meubilhete');
							$busca_query = mysql_query("SELECT * FROM `cartao` WHERE idusuario = '$sessaoid'")or die(mysql_error());
						?>                      
							<?php while ($dados = mysql_fetch_array($busca_query)) { ?>
							<header>
								<h4>Código do Cartão: <?php echo $dados['codcartao'];?></h4>
								<?php 
							$sessaotipocartao = $_SESSION['tipocartao'];
							$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
    						$db = mysql_select_db('meubilhete');
							$querytipo = mysql_query("SELECT * FROM `categoria` WHERE idcategoria = '$sessaotipocartao'")or die(mysql_error());
						?>                      
							<?php while ($dadostipocartao = mysql_fetch_array($querytipo)) { ?>
								
									<h4 style="text-align: right;">	Preço da Passagem: <?php echo 'R$ '.$dadostipocartao['valorpassagem'];',00' ?> </h4>
											
									
									<?php } ?>
							</header>								
								
								
								<div class="row 50%">
								<?php 
								$idusuariobus = $_SESSION['idusuario'];
								$querylog = mysql_query("SELECT * FROM `logcartao` WHERE `idusuario` = '$idusuariobus'")or die(mysql_error());
								
								//echo "<script language='javascript' type='text/javascript'>alert('$idusuariobus');</script>";
								
								
								?>      
								
								

							<?php while ($logcartao = mysql_fetch_array($querylog)) { ?>
									<div class="5u" id="limitediario">
									<h5> LIMITE DIÁRIO </h5>
									<?php echo $logcartao['limiteuso'];?>
									
									</div>

									
									<div class="7u" id="datarecarga">
									<h5> ÚLTIMA UTILIZAÇÃO</h5>
									<?php echo date('d/m/Y H:i:s', strtotime($logcartao['datautilizacao']));?>
									
									</div>
							</div>
								<div class="row 50%">
								<?php 
									$bus = $logcartao['idonibus'];
									//echo "<script language='javascript' type='text/javascript'>alert('$bus');</script>";
								} ?>
									<?php $querybusao = mysql_query("SELECT * FROM `onibus` WHERE idonibus = '$bus'")or die(mysql_error());
									?>
									
									<?php while ($logbus = mysql_fetch_array($querybusao)) { ?>
									<div class="5u" id="codlinha"> 
									<h5> CÓDIGO LINHA </h5>
										<?php echo $logbus['codlinha']; ?> 
									</div>
									
									<div class="7u" id="nomelinha"> 
									<h5> NOME DA LINHA </h5>
										<?php echo $logbus['nomelinha'];  } ?>
									</div>

								</div>
							 
								<div class="row 50%">
								
									<div class="7u" id="unidades">
									<h5> UNIDADES </h5>
									<?php echo $dados['unidades'];?>
									
									</div>

									
									<div class="5u" id="saldo">
									<h5> SALDO </h5>
									<?php echo $dados['saldo'];?>
									
									</div>
									

								
								</div>
								
								<div class="row 50%"> 
								
								
								<div class="12u" id="recarga">
									<h5> ÚLTIMA RECARGA </h5>
									<?php echo date('d/m/Y H:i:s', strtotime($dados['datarecarga']));?>
									
									</div>
								</div>
								<div class="row">
									<div class="4u" style="border: solid 1px #efefef; text-align: center; font-size: 1em; text-decoration: none; height: 2.75em; line-height: 2.75em;"> <a href="recarga.php"> Recarregar </a></div>
									<div class="4u" style="border: solid 1px #efefef; text-align: center; font-size: 1em; text-decoration: none; height: 2.75em; line-height: 2.75em;"> <a href="conta.php"> Conta</a></div>
									<div class="4u" style="border: solid 1px #efefef; text-align: center; font-size: 1em; text-decoration: none; height: 2.75em; line-height: 2.75em;"> <a href="pagamento.php"> Pagamento </a> </div>
								</div>
								
								<?php } ?>
						</div>
					</section>

						</div>
					</div>

				<!-- Sidebar -->
					<!-- Menu -->
					<?php include("menu.php"); ?>

							<!-- Section -->
								
			

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