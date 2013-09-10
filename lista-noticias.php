<?php session_start();error_reporting(E_ALL ^ E_NOTICE);
require_once('sesion.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>administrador</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>>

<body>
<table width="549" height="210" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="235" align="center"><img src="imagenes/banner parte de arriba.png" alt="banner header" width="1024" height="228" /></td>
  </tr>
</table>
<table width="1030" height="49" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="220" align="center"><a href="index.php"><img src="imagenes/inicio.png" width="222" height="72" alt="inicio" /></a></td>
    <td width="210" align="center"><a href="edita-noticias.php"><img src="imagenes/admin.png" width="212" height="72" alt="administrar" /></a></td>
    <td width="183" align="center"><a href="foro.php"><img src="imagenes/foro.png" width="185" height="72" alt="foro" /></a></td>
    <td width="399" align="center"><a href="login.php"><img src="imagenes/registrarse.png" width="404" height="72" alt="registro" /></a></td>
  </tr>
</table>
<div align="center"></div>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="imagenes/lineas.png" width="1024" height="58" alt="lineas" /></td>
  </tr>
</table>
<table width="1024" border="0" align="center">
  <tr>
    <td width="967" height="885" align="center" valign="top" bgcolor="#000000">&nbsp;
  
      <h1>
        <header>
          <?php if($_SESSION['name']){
		echo '<div id="sesion"><div id="sesion">'.$_SESSION['name']." ".$_SESSION['apelle'].'|| <a href="salir.php">Cerrar Sesion</a></div></div>';
		}else{ ?>
        </header>
      </h1>
      <header>
        <div id='sesion'><div id='sesion'>
          <h1><a href="entrar-user.php">Iniciar Sesion</a> O <a href="login.php">Registrarme</a></h1>
          </div>
        </div> 
        <h1>
          <?php } ?> 
        </h1>
      </header>
      <h1>
        <nav>
          <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"></a>';} ?>
        </nav>
        <section id='cuerpo'></section>
        <section id='contenido'>
          <article id='titulo'></article>
        </section>
      </h1>
      <section id='contenido'>
        <article id='titulo'>
          <h1>Lista de noticias ordenadas por fecha de publiaccion</h1>
        </article> 
        <h1>
          <?php
		include('conexion.php');
		mysql_select_db($bd,$conexion);
		$id= $_GET['id'];
		$query = "SELECT * FROM noticias";
		$consulta=mysql_query($query,$conexion);
		while($str=mysql_fetch_assoc($consulta)){
		
		 ?>
        </h1>
        <div id='lis-noticias'>
          <h1><b><?php echo $str['titulo'];?></b><br>
            <a href="edita-noticias.php?id=<?php echo $str['id_noticia']; ?>">        Editar</a> | <a href="borrar.php?id=<?php echo  $str['id_noticia']; ?>">Borrar </a></h1>
        </div>
        <h1>
          <?php }mysql_free_result($consulta); ?> 
        </h1>
      </section>

    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
