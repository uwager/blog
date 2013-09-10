<?php
session_start();
include('conexion.php');
mysql_select_db($bd,$conexion);
$query="SELECT * FROM comentarios WHERE ";

?>