<?php 
$idusuario = $_POST['idusuario'];
$tipocartao = $_POST['tipocartao'];
$descontaunidade = $_POST['descontaunidade'];
$idonibus = $_POST['idonibus'];
$connect = mysql_connect('meubilhete.mysql.dbaas.com.br','meubilhete','vertrigo');
$db = mysql_select_db('meubilhete');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
date_default_timezone_set('America/Rio_branco');
$datautilizacao = date('Y-m-d H:i:s', time());	
           
$busca_query = mysql_query("SELECT * FROM `logcartao` WHERE idusuario = '$idusuario'")or die(mysql_error());
while ($dadoslogcartao = mysql_fetch_array($busca_query)) { 
$oldlimiteuso = $dadoslogcartao['limiteuso'];
}
//echo "<script language='javascript' type='text/javascript'>alert('$oldlimiteuso');</script>";

$limiteuso = $oldlimiteuso - 1;

$query = "UPDATE `logcartao` SET `datautilizacao` = '$datautilizacao', `limiteuso` = '$limiteuso', `idonibus` = '$idonibus' WHERE `idusuario` = '$idusuario'";


        $busca_card = mysql_query("SELECT * FROM `cartao` WHERE idusuario = '$idusuario'")or die(mysql_error());
        while ($dadoscartao = mysql_fetch_array($busca_card)) { 
       
       $oldunidades = $dadoscartao['unidades'];
        }
        
       $newunidades = $oldunidades - 1;
       //echo "<script language='javascript' type='text/javascript'>alert('$newunidades');</script>";
       if($tipocartao == 1){

        $valorpassagem = 1;
        $saldo = $newunidades * $valorpassagem;
        //echo "<script language='javascript' type='text/javascript'>alert('$saldo');</script>";
    }
    
    if($tipocartao == 2){
    
        $valorpassagem = 3.80;
        $saldo = $newunidades * $valorpassagem;
       // echo "<script language='javascript' type='text/javascript'>alert('$saldo');</script>";
    }
       
       
$atualizacartao = "UPDATE `cartao` SET `unidades` = '$newunidades', `saldo` = '$saldo' WHERE `idusuario` = '$idusuario'";

$insertcard = mysql_query($atualizacartao,$connect);
$insert = mysql_query($query,$connect);

if($insert){
          
    if($insertcard){
          
    
        //echo "<script language='javascript' type='text/javascript'>alert('SUCESSO!');</script>";
            }else{
          //  echo"<script language='javascript' type='text/javascript'>alert('Erro! ao efetuar a recarga');</script>";
            }
    echo "<script language='javascript' type='text/javascript'>alert('SUCESSO!');window.location.href='saldo.php'</script>";
        }else{
        echo"<script language='javascript' type='text/javascript'>alert('Erro! ao efetuar a recarga');window.location.href='saldo.php'</script>";
        }

?>
	
