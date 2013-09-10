<?php session_start();error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8" />
    <title>REGISTRO</title>
    
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
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
  <header>
	<?php if($_SESSION['name']){
		echo '<div id="sesion"><div id="sesion">'.$_SESSION['name']." ".$_SESSION['apelle'].'|| <a href="salir.php">Cerrar Sesion</a></div></div>';
		}else{ ?>
    <div id='sesion'><div id='sesion'>
      <h1><a href="entrar-user.php">Iniciar Sesion</a> O <a href="login.php">Registrarme</a></h1>
    </div>
    </div> 
    <h1>&nbsp;</h1>
    <?php } ?> 
</header>
<nav>
        <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"></a>';} ?>
</nav>
<section id='cuerpo'>
    <section id='contenido'>    
        <article id='login'>
        <?php
		if($_SESSION['name']){
	echo '<font color="#FF0000"><h2>Ya estas logeado</h2></font> <a href="salir.php">Serrar Sesion</a> O <a href="index.php">Ir al Home</a>';
}else{
		 ?>
        <h1>
          <font size="+2" color="#FF6600">Quiero Registrarme</font><br />
        </h1>
        <form action="registrar.php" method="post" >
          <h1>
            <?php 
		if($_GET['error']=='name'){
	echo '<font color="#FF0000">Tienes que poner un nombre<br /></font>';
	}
		?>
            <b>Nombre:</b><br />
            <input type="text" name="nombre" id="input3" /><br />
            <?php 
		if($_GET['error']=='apelle'){
	echo '<font color="#FF0000">Tienes que poner un apelido<br /></font>';
	}
		?>
            <b>Apellido:</b><br />
            <input type="text" name="apellido" id="input3" /><br />
            <?php 
		if($_GET['error']=='meil'){
	echo '<font color="#FF0000">Falta el correo<br /></font>';
	}
		?>
            <b>Correo:</b><br />
            <input type="email" name="correo" id="input3" /><br />
            <?php 
		if($_GET['error']=='pass'){
	echo '<font color="#FF0000">Pon un Password<br /></font>';
	}
		?>
            <b>Password:</b><br />
            <input type="password" name="pass" id="input3" /><br />
            <?php 
		if($_GET['error']=='rpass'){
	echo '<font color="#FF0000">Las claves no son iguales<br /></font>';
	}
		?>
            <b>Repetir Password:</b><br />
            <input type="password" name="rpass" id="input3" /><br />
            <input type="submit" value="Registrar" id="input2" /><br />
            <?php 
		if($_GET['error']=='existe'){
	echo '<font color="#ff0000">Prueba de nuevo o Intenta con otro correo<br /></font>';
	}
		?>
          </h1>
        </form>
        <h1>
          <?php } ?>
        </h1>
        </article>
    </section> 
</section>


    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
