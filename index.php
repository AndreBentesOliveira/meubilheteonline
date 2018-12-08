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
								<section id="banner">
									<div class="content">
										<header>
										<h1>Meu Bilhete<br />
											</h1>
											<p>Obrigado por escolher o Meu Bilhete</p>
										</header>
										<p>Nos somos uma plataforma para recarga,consulta de rotas e consulta de saldo de bilhetes eletrônicos para todos os tipos de transportes públicos de nosso pais.<br>
									Trazemos as mais novas tecnologias para que você possa  fazer a recarga ou consulta do seu saldo em qual que lugar e a qual quer momento, massa né ? quer conhecer mais sobre nós,clique no banner a baixo.</p>
										<ul class="actions">
											<li><a href="historia.php" class="button big">Sobre o Meu Bilhete</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/onibus.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2><center>Vantagens de usar o Meu Bilhete</center></h2>
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

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Noticias e comentarios</h2>
									</header>
									<div class="posts">
										<article>
											<a href="https://g1.globo.com/ac/acre/noticia/nova-tarifa-de-r-4-no-transporte-publico-ja-esta-em-vigor-em-rio-branco.ghtml" target="_blank" class="image"><img src="images/noticia1.jpg" alt="" /></a>
											<h3>Nova tarifa de R$ 4 no transporte público já está em vigor em Rio Branco.</h3>
											<p>O reajuste na tarifa de ônibus em Rio Branco, que foi sancionado no último dia 6 de julho pela prefeita Socorro Neri, começou a valer neste sábado (14). Com o aumento de R$ 0,50 a passagem passa a custar R$ 4,00.<br>

											No cartão de bilhetagem, o passageiro paga R$ 3,80 devido ao desconto de 5%. Já os estudantes continuam pagando R$ 1 devido ao subsídio de R$ 0,90 dado pelo município de Rio Branco que corresponde a uma redução percentual de 47,37% sobre o valor da tarifa.
											</p>
											<ul class="actions">
												<li><a href="https://g1.globo.com/ac/acre/noticia/nova-tarifa-de-r-4-no-transporte-publico-ja-esta-em-vigor-em-rio-branco.ghtml" target="_blank" class="button">Leia mais sobre</a></li>
											</ul>
										</article>
										<article>
											<a href="https://www.ac24horas.com/2018/10/31/confira-como-funcionara-o-transporte-coletivo-no-dia-de-finados/" target="_blank" class="image"><img src="images/noticia3.jpg" alt="" /></a>
											<h3>Confira como funcionará o transporte coletivo no feriado de finados</h3>
											<p>
											A Prefeitura de Rio Branco, por meio da Superintendência Municipal de Transportes e Trânsito (RBTRANS) adotará sistema de transporte especial no Dia de Finados, na próxima sexta-feira,2. O objetivo é garantir maior comodidade aos usuários que precisarão se deslocar até os cemitérios São João Batista e Morada da Paz.<br>

											Segundo Gabriel Forneck, Superintendente da RBTRANS, as duas empresas concessionárias do serviço já providenciaram a logística necessária para executar o atendimento em caráter especial no dia 2 de novembro.</p>
											<ul class="actions">
												<li><a href="https://www.ac24horas.com/2018/10/31/confira-como-funcionara-o-transporte-coletivo-no-dia-de-finados/" target="_blank" class="button">Leia Mais</a></li>
											</ul>
										</article>
										<article>
											<a href="https://g1.globo.com/ac/acre/noticia/em-assembleia-motoristas-do-transporte-coletivo-rejeitam-proposta-de-reajuste-feita-por-empresarios-em-rio-branco.ghtml" target="_blank" class="image"><img src="images/noticia2.jpg"  alt="" /></a>
											<h3>Em assembleia, motoristas do transporte coletivo rejeitam proposta de reajuste feita por empresários em Rio Branco.</h3>
											<p>Os motoristas de transporte coletivo de Rio Branco rejeitaram, durante assembleia realizada com a categoria nesta sexta-feira (18), a proposta de reajuste salarial de 1,5% oferecida pelo Sindicato das Empresas de Transportes Coletivos do Acre (Sindcol). A proposta da categoria era que o reajuste fosse de 15%.<br>

											Ao G1, nesta sexta (18), o diretor Sindcol, Marcelo Cavalcante, disse que ainda aguarda a contraproposta dos trabalhadores e após isso o órgão deve se reunir para um novo debate.</p>
											<ul class="actions">
												<li><a href="https://g1.globo.com/ac/acre/noticia/em-assembleia-motoristas-do-transporte-coletivo-rejeitam-proposta-de-reajuste-feita-por-empresarios-em-rio-branco.ghtml" target="_blank" class="button">Leia mais sobre</a></li>
											</ul>
										</article>
										<article>
											<a href="https://www.ac24horas.com/2017/08/23/portal-da-transparencia-do-transporte-coletivo-de-rio-branco-e-lancado/" target="_blank" class="image"><img src="images/noticia4.jpg" alt="" /></a>
											<h3>RBTrans lança Transparência do Transporte Coletivo de Rio Branco.</h3>
											<p>A ferramenta permitirá acesso a dados do sistema de transporte público de Rio Branco como mapa das rotas; planilha didática (inclusive com gráficos) da composição da tarifa do ônibus; quantidade de passageiros transportados, e, entre outras informações, dados sobre gratuidade.
												<br>

											“Agora as pessoas vão puder saber até o quanto de passageiros são transportados, e quem são eles. Além disso, as pessoas terão informações sobre os serviços, como funcionam. Vai mostrar o dia a dia do transporte coletivo.</p>
											<ul class="actions">
												<li><a href="https://www.ac24horas.com/2017/08/23/portal-da-transparencia-do-transporte-coletivo-de-rio-branco-e-lancado/" target="_blank" class="button">Leia mais sobre</a></li>
											</ul>
										</article>
										<article>
											<a href="https://g1.globo.com/ac/acre/noticia/manifestantes-fecham-parcialmente-terminal-urbano-contra-aumento-na-passagem-de-onibus-em-rio-branco.ghtml" class="image"><img src="images/noticia5.jpg" alt="" /></a>
											<h3>Manifestantes fecham parcialmente Terminal Urbano contra aumento na passagem de ônibus em Rio Branco.</h3>
											<p>Em protesto contra o novo reajuste na tarifa de ônibus, movimentos estudantis e sindicais fecharam parcialmente o Terminal Urbano, no Centro de Rio Branco, na manhã desta segunda-feira (21). Eles são contrários ao reajuste da tarifa que atualmente está em R$ 3,50 e deve subir para R$ 4,03.<br>

											Às 11h35 (horário do Acre), o terminal foi completamente fechado e a entrada foi liberada. Diversos passageiros entraram pelas plataformas sem pagar passagem. O protesto terminou às 12h32.</p>
											<ul class="actions">
												<li><a href="https://g1.globo.com/ac/acre/noticia/manifestantes-fecham-parcialmente-terminal-urbano-contra-aumento-na-passagem-de-onibus-em-rio-branco.ghtml" class="button">Leia mais sobre</a></li>
											</ul>
										</article>
										<article>
											<a href="https://ecosdanoticia.net.br/2017/06/28/transporte-coletivo-na-segunda-maior-cidade-do-acre-so-opera-com-10-onibus-e-nao-e-regulamentado.html" class="image"><img src="images/noticia6.jpg" alt="" /></a>
											<h3>Transporte coletivo na segunda maior cidade do Acre só opera com 10 ônibus e não é regulamentado</h3>
											<p>Na segunda maior cidade do Acre, Cruzeiro do Sul, o serviço de transporte coletivo é precário e não consegue atender a população, de 82 mil habitantes. Apenas dez linhas de ônibus circulam dentro da cidade e os usuários são obrigados a recorrer a meios alternativos, segundo a Secretaria Adjunta de Transporte da cidade, como as vans tipo lotação.<br>

											Sem qualquer regulamentação da prefeitura, duas empresas oferecem o serviço, mas colocam nas ruas ônibus com data de fabricação de 19 anos atrás. O carro mais novo é de 2005, segundo o dono de umas das empresas.</p>
											<ul class="actions">
												<li><a href="https://ecosdanoticia.net.br/2017/06/28/transporte-coletivo-na-segunda-maior-cidade-do-acre-so-opera-com-10-onibus-e-nao-e-regulamentado.html" class="button">Leia mais sobre</a></li>
											</ul>
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