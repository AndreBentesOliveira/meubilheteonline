<?PHP
// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$password = md5($_POST['password']);


include 'includes/dbConfig.php';
$conexao = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Conexão Falhou.");
$selecionabd = mysql_select_db(DB_NAME, $conexao) or die("Base de Dados não conectada");


$sql = "SELECT * FROM `usuario` WHERE email = '$email' and password = '$password'";
$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");
$verificar = mysql_num_rows($resultado);
if($verificar > 0){ 
  while($linha = mysql_fetch_assoc($resultado))
                    {
	$idusuario = $linha['idusuario'];
	$cpf = $linha['cpf'];
	$datanascimento = $linha['datanascimento'];
	$logadouro = $linha['logadouro'];
	$bairro = $linha['bairro'];
	$numero = $linha['numero'];
	$cep = $linha['cep'];
	$nomecompleto = $linha['nomecompleto'];
	$codcartao = $linha['codcartao'];
	$tipocartao = $linha['tipocartao'];
	$fotouser = $linha['fotouser'];
					}
					}else{

      header('location:index.html');
}
                    
	
	
//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
	// session_start inicia a sessão
	
	session_start();
	$_SESSION['idusuario'] = $idusuario;
	$_SESSION['cpf'] = $cpf;
	$_SESSION['cep'] = $cep;
	$_SESSION['bairro'] = $bairro;
	$_SESSION['datanascimento'] = $datanascimento;
	$_SESSION['numero'] = $numero;	
	$_SESSION['email'] = $email;
	$_SESSION['logadouro'] = $logadouro;
	$_SESSION['password'] = $password; 
	$_SESSION['nomecompleto'] = $nomecompleto;
	$_SESSION['codcartao'] = $codcartao;
	$_SESSION['tipocartao'] = $tipocartao;
	$_SESSION['fotouser'] = $fotouser;
    header('location:index.php');
	

//Caso contrário redireciona para a página de autenticação
}else {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['email']);
	unset ($_SESSION['password']);
	unset ($_SESSION['nomecompleto']);
	unset ($_SESSION['codcartao']);
    //Redireciona para a página de autenticação
	header('location:index.html');
	}

	
?>