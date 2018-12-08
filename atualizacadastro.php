<?php 
$idusuario = $_POST['idusuario'];
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
//$codcartao = $_POST['codcartao'];
//$tipocartao= $_POST['tipocartao'];
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

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
	
$query = "UPDATE `usuario` SET `nomecompleto` = '$nomecompleto', `cpf` = '$cpf', `datanascimento` = '$datanascimento', `email` = '$email', `password` = '$password', `logadouro` = '$logadouro', `bairro` = '$bairro', `numero` = '$numero', `cep` = '$cep' WHERE `idusuario` = '$idusuario'";

$insert = mysql_query($query,$connect);
         
        if($insert){
			echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='conta.php'</script>";
          }else{
			
			
      echo $nomecompleto;
			echo '<br>';
echo $cpf;
			echo '<br>';
echo $datanascimento;
			echo '<br>';
echo $cep;
			echo '<br>';
echo $bairro;
			echo '<br>';
echo $logadouro;
			echo '<br>';
echo $numero;
			echo '<br>';
echo $email;
			echo '<br>';
echo $password;
			echo '<br>';
echo $codcartao;
			echo '<br>';
echo $tipocartao;
			echo '<br>';
echo $idusuario;
        }
      

?>
	
