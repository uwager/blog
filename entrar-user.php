<?php session_start();error_reporting(E_ALL ^ E_NOTICE);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8" />
    <title>Entrar al sitio web</title>
 
</head>

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
  
<section id="contenido">
<h1>
  <?php 
error_reporting(E_ALL ^ E_NOTICE);
if($_SESSION['name']){
	echo '<font color="#FF0000"><h2>Ya estas logeado</h2></font> <a href="salir.php">Cerrar Sesion</a> O <a href="index.php">Ir al Home</a>';
}else{
if($_GET['error']=='meil'){
	echo '<font color="#FF0000">Escribe tu correo</font>';
	}
	if($_GET['error']=='clave'){
	echo '<font color="#FF0000">Escribe tu Password</font>';
	}
	if($_GET['error']=='no'){
	echo '<font color="#FF0000">Algo salio mal</font>';
	}
	if($_GET['error']=='si'){
	echo '<font color="#FF0000">Estas registrado logeate</font>';
	}

 ?>
</h1>
<form action="entrar.php" method="post">
  <h1><b>Correo:</b><br /><input type="email" name="mail" id='input1'/><br />
    <b>Password:</b><br /><input type="password" name="pass" id='input1'/><br />
    <input type="submit" value="ENTRAR" id="ENTRAR"/><br />
  </h1>
</form>
<h1><a href="login.php">Registrarme</a>
</h1>
</section>

    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php } ?>