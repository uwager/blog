<?php 

session_start();

include('conexion.php');

mysql_select_db($bd,$conexion);

$query = "SELECT * FROM noticias";
$consulta = mysql_query($query,$conexion);

while($row=mysql_fetch_assoc($consulta))

{

$id= $row['id_noticia'];



$row['titulo'].'<br />';	

{ ?>

<a href="detalle.php?id=<?php echo $row['id_noticia']; ?>"><div id="titulares"><?php echo $row['titulo']; ?>
</div>
</a>


<?php }}mysql_free_result($consulta); ?>
<br />