<?php 
$idusuario = $_POST['idusuario'];
$unidades = $_POST['unidades'];
$somaunidades = $_POST['somaunidades'];
$cartaocc = $_POST['cartaocc'];
$datavalidade = $_POST['datavalidade'];
$cvc = $_POST['cvc'];
$holder = $_POST['holder'];
$bmodo = $_POST['modo'];
$bandeira = $_POST['bandeira'];
$tipocartao = $_POST['tipocartao'];
$passagem = $_POST['valorpassage'];

$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
$db = mysql_select_db('meubilhete');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
date_default_timezone_set('America/Rio_branco');
$datarecarga = date('Y-m-d H:i:s', time());	
           
if($tipocartao == 1){

    $valorpassagem = 1;}

if($tipocartao == 2){

    $valorpassagem = 3.80;
}
$newunidades = $somaunidades + $unidades;
$saldo = $valorpassagem * $newunidades;

$query = "UPDATE `cartao` SET `unidades` = '$newunidades', `saldo` = '$saldo', `datarecarga` = '$datarecarga' WHERE `idusuario` = '$idusuario'";
$insert = mysql_query($query,$connect);

if($insert){
          
    
    echo "<script language='javascript' type='text/javascript'>alert('Recarga realizada com sucesso!');alert('$newunidades');alert('$saldo');window.location.href='saldo.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>alert('Erro! ao efetuar a recarga');window.location.href='saldo.php'</script>";
        }
      

?>
	
