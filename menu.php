<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
								<div class="image avatar48" id="image" style="width: 75px; height: 75px; border-radius: 75px; background-color: red; position: relative;top: 0px; background-image: url(<?php echo $_SESSION['fotouser']; ?>); background-position: center; background-repeat: no-repeat;"> </span>
							    <strong><div id="usuario" style="position: relative; left: 85px; width: 180px; font-size: 11px;text-align: center;"><?php echo $_SESSION['nomecompleto'];?></div></strong>
										
								<div id="codcartao" style="position: relative; left: 85px; width: 180px; font-size: 11px; color: white; background-color: blue; text-align: center;border-radius: 15px; margin-top: 3px;">Numero Cartão:
									<?php $carduser = $_SESSION['idusuario'];
									$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
                                    $db = mysql_select_db('meubilhete');
	                      $buscacard = mysql_query("SELECT `codcartao` FROM `usuario` WHERE `idusuario` = '$carduser'")or die(mysql_error());
									
									
									while ($carddados = mysql_fetch_array($buscacard)) 
									{ echo $carddados['codcartao'];
									
									}?></div>
							    <div id="tipocartao" style="position: relative; left: 85px; width: 180px; font-size: 11px; color: white; background-color: blue; text-align: center;border-radius: 15px; margin-top: 3px;">Tipo do Cartão:
									
									
									<?php 
									$categoriamenu = $_SESSION['tipocartao'];
									$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
                                    $db = mysql_select_db('meubilhete');
	$busca_query = mysql_query("SELECT `nomecategoria` FROM `categoria` WHERE `idcategoria` = '$categoriamenu'")or die(mysql_error());
									
									
									while ($dados = mysql_fetch_array($busca_query)) 
									{ echo $dados['nomecategoria'];}?>
										
										
										</div>
							           
									</header>
									<ul>
										<li><a href="index.php">Home</a></li>
										
										<li>
											<span class="opener">Minha Conta</span>
											<ul>
											<li><a href="conta.php">Meu perfil</a>
											<li><a href="pagamento.php">Pagamento</a></li>
											</ul>
										</li>
									
									
										</li>
										<li><a href="saldo.php">Saldo</a></li>
										<li><a href="recarga.php">Recarregar</a></li>
										<li>
											<span class="opener">Ônibus</span>
											<ul>
											<li><a href="horarios.php">Horários</a></li>
											<li><a href="rotas.php">Rotas</a></li>
											</ul>
										</li>
										
										<li><a href="logout.php?token=<?php echo $_SESSION['idusuario'];?>">Sair</a></li>
									</ul>
								</nav>
								<section>
									<header class="major">
										<h2>Informações de Contato</h2>
									</header>
									<p>Entre em contato para sugestões,criticas,reclamações dentre outros. Atendemos das 8:00Hs até as 16:00. </p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">meubilheteonline.com.br</a></li>
										<li class="fa-phone">(68) 3334-0000</li>
										<li class="fa-home">Rua Seis de Agosto N°990<br />
										Seis de Agosto, Cep:69905-684</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Limitado. Todos os direitos rservados. System.out soluções: Meu Bilhete.<br>  Design: <a href="http://www.2pistudio.com.br/">2pistudio</a>.</p>
								</footer>

						</div>
					</div>