<?php 
session_start();
include('conexion.php');
mysql_select_db($bd,$conexion);
$id=$_GET['id'];
mysql_query("SELECT * FROM noticias",$conexion);
$query = "DELETE FROM noticias WHERE id_noticia='$id'";
$borrar = mysql_query($query,$conexion);
if(!$borrar){
	echo 'No has seleccionado ninguna noticia para borrar'.$id;
	}else{
		header('Location: lista-noticias.php?borrar=si');
		}


?>