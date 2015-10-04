<?php
function conectar_cms(){
/*
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$bd = "agenciaempleos";
*/
$servidor = "localhost";
$usuario = "lamolina_user";
$password = "empleos";
$bd = "lamolina_bd";

$dbh=mysql_connect ($servidor, $usuario, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($bd); 

return $dbh;
}

?>