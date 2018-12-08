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

<?php 

$nivel = $_POST['nivel'];
$nomecompleto = $_POST['nomecompleto'];
$rg= $_POST['rg'];
$cpf = $_POST['cpf'];
$tituloeleitor = $_POST['tituloeleitor'];
$zona = $_POST['zona'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$quemindicou = $_POST['quemindicou'];
$connect = mysql_connect('mestrado_victo.mysql.dbaas.com.br','mestrado_victo','aspire1410');
$db = mysql_select_db('mestrado_victo');
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$dupesql = "SELECT `cpf` FROM `cadastro` where cpf = '$cpf'";

$duperaw = mysql_query($dupesql);

if (mysql_num_rows($duberaw) > 0) {
   echo "<script language='javascript' type='text/javascript'>alert('CPF JÁ CADASTRADO');window.location.href='cadastro.php'</script>";

} else {

	
$query = "INSERT INTO `cadastro` (`nivel`, `nomecompleto`, `rg`, `cpf`, `tituloeleitor`, `zona`, `telefone`, `cidade`, `estado`, `endereco`, `quemindicou`) VALUES  ('$nivel','$nomecompleto','$rg','$cpf','$tituloeleitor','$zona','$telefone','$cidade','$estado','$endereco','$quemindicou')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='cadastro.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Usuario já cadastrado!');window.location.href='cadastro.php'</script>";
        }
      
}
?>
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  
  	
	</body>
</html>