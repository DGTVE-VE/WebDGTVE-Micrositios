<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_telesecundaria = "168.255.107.196";
$database_telesecundaria = "telesecundaria1";
$username_telesecundaria = "DGTVE";
$password_telesecundaria = "DN%18a2";
$videoteca = mysql_pconnect($hostname_telesecundaria, $username_telesecundaria, $password_telesecundaria) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query ("SET NAMES 'utf8'");

	$mysqli = new mysqli("168.255.107.196", "DGTVE", "DN%18a2", "telesecundaria1");
	if (mysqli_connect_errno()) {
		errormsg("Conexión fallida: %s\n", mysqli_connect_error());
		exit();
	}
	
function Conectarse(){
	
$servidor="168.255.107.196";
$basededatos="telesecundaria1";
$usuario="DGTVE";
$clave="DN%18a2";
$cn=mysql_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos");
mysql_select_db($basededatos ,$cn) or die("Error seleccionando la Base de datos");
mysql_query ("SET NAMES 'utf8'");
return $cn;}
?>