<?PHP
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//Conexão mysql
$conexao = mysql_connect('mestrado_victo.mysql.dbaas.com.br','mestrado_victo','aspire1410') or die ("Erro na conexão do banco de dados.");

//Seleciona o banco de dados
$selecionabd = mysql_select_db('mestrado_victo',$conexao) or die ("Banco de dados inexistente.");

//Comando SQL de verificação de autenticação
$sql = "SELECT `login`, `senha` FROM `usuario` WHERE login = '$login' and senha = '$senha'";

$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

//Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
	// session_start inicia a sessão
	session_start();
	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	
	header('location:index.php');
}

//Caso contrário redireciona para a página de autenticação
else {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);

	//Redireciona para a página de autenticação
	header('location:index.html');
	
}
?>