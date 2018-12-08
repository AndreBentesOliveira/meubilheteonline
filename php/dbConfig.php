<?php

define ("DB_HOST", "mestrado_victo.mysql.dbaas.com.br"); // set database host

define ("DB_USER", "mestrado_victo"); // set database user

define ("DB_PASS","aspire1410"); // set database senha
define ("DB_NAME","mestrado_victo"); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Conexão Falhou.");

$db = mysql_select_db(DB_NAME, $link) or die("Base de Dados não conectada");

?>