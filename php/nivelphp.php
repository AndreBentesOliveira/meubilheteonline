<?PHP
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	
	//Redireciona para a página de autenticação
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="assets/css/main.css" />
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
</head>
<body>
	
	<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
	<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="cadastro.php">Cadastrar</a></li>
							<li><a href="nivel.php">Listar por Nível</a></li>
							<li><a href="relatorio.php">Listar por Usuário</a></li>
							<li><a href="geral.php">Listar Geral</a></li>
							
						</ul>
					</nav>

<section class="form">
	  	
<?php 


$nivel = $_POST['nivel'];
$connect = mysql_connect('mestrado_victo.mysql.dbaas.com.br','mestrado_victo','aspire1410');
$db = mysql_select_db('mestrado_victo');
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$sql = "SELECT * FROM `cadastro` WHERE `nivel` = '$nivel'";
$resultado = mysql_query($sql);
$verificar=mysql_num_rows($resultado);
?>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Linha</th>
								<th class="column2">Nome Completo</th>
								<!-- <th class="column4">CPF</th>-->
                                <th class="column4">Seção</th>
                               <th class="column5">Titulo Eleitoral</th>
								<th class="column6">Zona Eleitoral</th>
								<th class="column6">Telefone</th>
								<th class="column6">Cidade</th>
								<th class="column6">Estado</th>
								<th class="column6">Endereço</th>
								<th class="column7">Quem indicou</th>
							</tr>
						</thead>
						<tbody>
								<?php 

$verificar=mysql_num_rows($resultado);
if($verificar > 0){ 
                    while($linha = mysql_fetch_assoc($resultado))
                    {
                         $contador=$contador+1;
                      echo '<tr>';
                        echo '<td class="column1">'. $contador .'</td>';
                        echo '<td class="column2">'. $linha['nomecompleto'] .'</td>';
						/* echo '<td class="column4">'. $linha['cpf'] .'</td>'; */
                        echo '<td class="column3">'. $linha['rg'] .'</td>';
						echo '<td class="column5">'. $linha['tituloeleitor'] .'</td>';
						echo '<td class="column6">'. $linha['zona'] .'</td>';
						echo '<td class="column6">'. $linha['telefone'] .'</td>';
						echo '<td class="column6">'. $linha['cidade'] .'</td>';
						echo '<td class="column6">'. $linha['estado'] .'</td>';
						echo '<td class="column6">'. $linha['endereco'] .'</td>';
                     	echo '<td class="column7">'. $linha['quemindicou'] .'</td>';
									
						 echo '</tr>';
                    } 
}else{
echo '<td> Não há registro para este tipo de relatório</td>';
}
                    mysql_close($conexao);
                ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</section>
		<footer id="footer">
						<div class="inner">
							<section>
								<h2>Entre em Contato</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Siga-nos</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; 2Pi Studio. All rights reserved</li><li>Design: <a href="http://www.2pistudio.com.br">Paulo Sampaio Jr.</a></li>
							</ul>
						</div>
					</footer>

			</div>
</div>
					</div>

		<!-- Scripts -->
			
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

 
	

<!--===============================================================================================-->	

<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  
  </body>
</html>	
