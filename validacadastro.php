<?php 
$nomecompleto = $_POST['nomecompleto'];
$cpf = $_POST['cpf'];
$datanascimento = $_POST['datanascimento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$logadouro = $_POST['logadouro'];
$numero = $_POST['numero'];
//$telefone = $_POST['telefone'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$codcartao = $_POST['codcartao'];
$tipocartao= $_POST['tipocartao'];
$logtipo = $tipocartao;
//$fotouser = $_FILES["fotouser"];
//enviar arquivo para o servidor
//$caminho = "users/".$fotouser['name'];
//if(move_uploaded_file($fotouser['tmp_name'],$caminho))
//$novo = "users/".$fotouser['name'];


$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
$db = mysql_select_db('meubilhete');
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$dupesql = "SELECT `cpf` FROM `cadastro` where cpf = '$cpf'";

$duperaw = mysql_query($dupesql);

if (mysql_num_rows($duberaw) > 0) {
   echo "<script language='javascript' type='text/javascript'>alert('CPF JÁ CADASTRADO');window.location.href='cadastro.php'</script>";

} else {
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
	
$query = "INSERT INTO `usuario` (`nomecompleto`, `cpf`, `datanascimento`, `email`, `password`, `logadouro`, `numero`, `bairro`, `cep`, `codcartao`, `tipocartao`) VALUES ('$nomecompleto','$cpf','$datanascimento','$email','$password','$logadouro','$numero','$bairro','$cep','$codcartao','$tipocartao')";
   
	$insert = mysql_query($query,$connect);
	$id = mysql_insert_id();
	date_default_timezone_set('America/Rio_branco');
	$datarecarga = date('Y-m-d H:i:s', time());
	$unidades = 0;
	$saldo = 0;
	if($tipocartao == 1){

		$maxunidades = 60;
		$limiteuso = 6;

	}else{

		$maxunidades = 120;
		$limiteuso = 120;


	}
	$datavalidade = "2020-01-01";
	//$idusuario = $id;
	$querycard = "INSERT INTO `cartao` (`codcartao`, `unidades`, `saldo`, `datavalidade`, `datarecarga`,`maxunidades`,`idusuario`) VALUES ('$codcartao','$unidades','$saldo','$datavalidade','$datarecarga','$maxunidades','$id')";
	$insertcard = mysql_query($querycard,$connect);
	$idfinal = mysql_insert_id();
	
	date_default_timezone_set('America/Rio_branco');
	$datautilizacao= date('Y-m-d H:i:s', time());
	
	if($tipocartao == 1){

		
		$limiteuso = 6;

	}else{

		
		$limiteuso = 120;


	}

	$idonibus = 3;
	$logtipo = $_POST['tipocartao'];
	
	 $querylogcard = "INSERT INTO `logcartao` (`datautilizacao`,`limiteuso`,`idonibus`,`idusuario`,`tipocartao`) VALUES ('$datautilizacao','$limiteuso','$idonibus','$id','$logtipo')";
	 $insertlogcard= mysql_query($querylogcard,$connect);


if($insertlogcard){
	echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso! $datautilizacao, $limiteuso, $idonibus,$id,$logtipo');window.location.href='index.html'</script>";


}else{
	echo"<script language='javascript' type='text/javascript'>alert('NÃO CADASTROU O LOG');alert('$datautilizacao, $limiteuso, $idonibus,$id, $logtipo');window.location.href='index.html'</script>";
}
	
}



	echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso! $datautilizacao, $limiteuso, $idonibus,$id,$logtipo');window.location.href='index.html'</script>";


	 
?>
	
