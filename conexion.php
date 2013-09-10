<?php 
$host='localhost';//el host o tu servidor
$usuario='root'; // el usuario de la base de datos
$password=''; // la contraseña de la base de datos
$bd='blog'; // nombre de la base de datos
$conexion=mysql_connect($host,$usuario,$password)or die(mysql_error());

?>