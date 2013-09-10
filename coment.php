<?php 
session_start();
include('conexion.php');
$id=$_POST['id'];
if($_POST['opinion']=='')
{
	header('Location: index.php?error=opinion');
	}else{
		$texto=nl2br($_POST['opinion']);
		$nombre=$_SESSION['name'].' '.$_SESSION['apelle'];
		$fecha =date("d-M-Y",time() - 28800 ); $hora=date('h:i:s',time() - 28800 ); $tiempo = $fecha."A las ".$hora;
		mysql_select_db($bd,$conexion);
		$query="INSERT INTO comentarios(id_noticia,texto,nombre,fecha)VALUES('$id','$texto','$nombre','$tiempo')";
		$consulta=mysql_query($query,$conexion);
		if(!$consulta){
			echo 'Error al publicar el comentario';
			}else{
				echo header('Location:'.$_SERVER['HTTP_REFERER'].'?id=si');
				}
		
		}
?>