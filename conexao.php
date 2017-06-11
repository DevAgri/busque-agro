<?php
	$server = "buscaagro.mysql.dbaas.com.br";
	$banco = "buscaagro";
	$usuario = "buscaagro";
	//$senha = "W7XTFeFXHwX4DZAc";
	$senha = "buscaagro123";
	
	$conexao = mysql_connect("$server", $usuario, $senha) or die (mysql_error());
	
	$conexao = mysql_select_db("$banco", $conexao) or die (mysql_error());
	
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET caracter_set_connection=utf8");
	mysql_query("SET caracter_set_client=utf8");
	mysql_query("SET caracter_set_results=utf8");
?>