<?php 
$idusuario = $_POST['idusuario'];
$unidades = $_POST['unidades'];
$somaunidades = $_POST['somaunidades'];
$cartaocc = $_POST['cartaocc'];
$datavalidade = $_POST['datavalidade'];
$cvc = $_POST['cvc'];
$holder = $_POST['holder'];
$modo = $_POST['modo'];
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

	
$querypagamento = "INSERT INTO `pagamento` (`cartaocc`, `datavalidade`, `cvc`, `bandeira`, `holder`,`modo`,`idusuario`) VALUES ('$cartaocc','$datavalidade','$cvc','$bandeira','$holder','$modo','$idusuario')";

     $insertcard = mysql_query($querypagamento,$connect);
         
        if($insertcard){
			echo"<script language='javascript' type='text/javascript'>alert('Forma de pagamento cadastrado com sucesso');window.location.href='conta.php'</script>";
          }else{

            echo $cartaocc;
			echo '<br>';
echo $datavalidade;
			echo '<br>';
echo $cvc;
			echo '<br>';
echo $bandeira;
			echo '<br>';
echo $holder;
			echo '<br>';
echo $modo;
			echo '<br>';
echo $idusuario;
			echo '<br>';

        }


        //echo"<script language='javascript' type='text/javascript'>alert('Erro! ao cadastrar');window.location.href='pagamento.php'</script>";
        //}
      

?>
	
