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

							<header>
								<h2>Minha Conta</h2>
							</header>

							<p>Insira suas informações corretamente</p>
							<?php 
							$sessaoid = $_SESSION['idusuario'];
	$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
    $db = mysql_select_db('meubilhete');
	$busca_query = mysql_query("SELECT * FROM `cartao` WHERE idusuario = '$sessaoid'")or die(mysql_error());
?>                       <?php while ($dados = mysql_fetch_array($busca_query)) { ?>
							<form method="POST" action="recarregacartao.php">
								
								
								
								<h4>Quantas unidades deseja acrescentar?</h4>
								<div class="row 50%">
									<div class="12u"><input type="hidden" name="idusuario" placeholder="ID USUÁRIO" id="idusuario" value="<?php echo $_SESSION['idusuario'];?>" /> </div>
                                </div>
                                <div class="row 50%">
									<div class="12u"><input type="hidden" name="tipocartao" placeholder="Categoria" id="tipocartao" value="<?php echo $_SESSION['tipocartao'];?>" /> </div>
                                </div>
                                <div class="row 50%">
									<div class="12u"><input type="hidden" name="unidades" placeholder="Unidades" id="unidades" value="<?php  echo $dados['unidades'];?>"/> </div>
                                </div>
                                <div class="row 50%">
                                <select name="somaunidades" id="somaunidades" class="field-style" >
								<?php 
                                               
											   $atualunidades = $dados['unidades'];
											   $maxunidades = $dados['maxunidades'];
											   $maxrecargas = $maxunidades - $atualunidades; 
								 if($maxrecargas > 0)
												{
                                                $contador = 1;
								?>
								<option value="<?php echo $dados['unidades'];?>" selected disabled="disabled" hidden> Unidades</option>
                                            
                                               
                                            <?php    while ($contador <= $maxrecargas)  {  ?>

                                              	<option value="<?php echo $contador ?>"> <?php echo $contador ?> </option> <?php 
                                            
                                            	$contador = $contador + 1;
												} 
												?>
									<?php	}else{ ?>

											<option value="0"> Recarga máxima atiginda </option> 
	
											<?php   } ?>	
											
                                 </select>       
								</div>
                                <?php } ?>					
								
								<h4>Informações de Pagamento</h4>
								
								
								<?php 
							$sessaoid = $_SESSION['idusuario'];
	                        $connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
                            $db = mysql_select_db('meubilhete');
	                        $querypagamento = mysql_query("SELECT * FROM `pagamento` WHERE idusuario = '$sessaoid'")or die(mysql_error());
?>                       <?php while ($dadospagamento = mysql_fetch_array($querypagamento)) { ?>
                                
                                
                            <div class="row 50%">
			                    <div class="12u">
                <input type="text" name="cartaocc" placeholder="Digite o número do cartao" id="cartaocc" value="<?php echo $dadospagamento['cartaocc'];?>" /></div>
								</div>

                            <div class="row 50%">

							<?php// $datavalidade = $dadospagamento['datavalidade'];?>
									<div class="7u"><input type="month" name="datavalidade" placeholder="Data Validade" id="datavalidade" value="<?php date('m-Y', strtotime($dadospagamento['datavalidade']));?>" /></div>
									<div class="5u"><input type="text" name="cvc" placeholder="CVC" id="cvc" value="<?php echo $dadospagamento['cvc'];?>" /></div>
                            </div>
                            <div class="row 50%">
								<div class="5u">
										
										<select name="bandeira" id="bandeira" class="field-style" >
										<option value="<?php echo $dadospagamento['bandeira'];?>" selected disabled="disabled" hidden> <?php echo $dadospagamento['bandeira'];?> </option>
										<option value="Mastercard"> Mastercard </option> 
										<option value="Visa">Visa </option> 
									    <option value="Elo">Elo</option>
										<option value="American Express">American Express</option> 
										</select>   
								</div>
								
								<div class="7u">
								<input type="text" name="holder" placeholder="Nome no Cartão" id="holder" value="<?php echo $dadospagamento['holder'];?>" />
                                </div>
                            </div>

                            <div class="row 50%">
                                <div class="12u">
								<select name="modo" id="modo" class="field-style" >
										<option value="<?php echo $dadospagamento['modo'];?>" selected disabled="disabled" hidden> <?php echo $dadospagamento['modo'];?> </option>
										<option value="Débito"> Débito </option> 
										<option value="Crédito">Crédito </option> 
									    
                                </select>
								</div>

									
							</div>


                            <div class="row">
									<div class="12u">
										<input type="submit" value="recarregar" />
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