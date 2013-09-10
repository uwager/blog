<?php 

session_start();

error_reporting(E_ALL ^ E_NOTICE);

require_once('conexion.php'); 

require_once('juego-registro.php'); 

  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />

    <script type="text/javascript">

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1024" height="210" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="235" align="center"><img src="imagenes/banner parte de arriba.png" alt="banner header" width="1024" height="216" /></td>
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
      <h1>
        <header>
        </header>
      </h1>
      <header>
        <div id='sesion'><div id='sesion'>
          <h1><a href="entrar-user.php">Iniciar Sesion</a> O <a href="login.php">Registrarme</a></h1>
        </div>
        </div> 

    <?php } ?> 

</header>

<nav>

  
        <?php if($_SESSION['niv']=='2'){echo '<a href="enviar-noticias.php"></a>';} ?>

</nav>

<section id='cuerpo'>

          <section id='contenido'><?php do { ?>
              <br>

        <article id='titulo'>
          <h1><?php echo $row_noticias['titulo']; ?></h1>

        </article>  

        <h1>
          <article id='noticias'></article>
        </h1>
        <article id='noticias'>
          <h1><?php echo $row_noticias['descripcion']; ?></h1>
        </article>

          <h1><br>
            
  <br />
            <?php echo $row_noticias['texto']; ?><br />
          </h1>
          <div id="mensaje">
            
            <h1>
              <?php if ($pageNum_noticias > 0) { ?>
              
              <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, max(0, $pageNum_noticias - 1), $queryString_noticias); ?>"> - Anterior</a>
              
              <?php }?>
              
              <?php if ($pageNum_noticias < $totalPages_noticias) { ?>
              
              <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, min($totalPages_noticias, $pageNum_noticias + 1), $queryString_noticias); ?>">Siguiente - </a>
              
              <?php }?>
              
              <br />
              <br />
              <img src="imagenes/lineas.png" width="1024" height="58" alt="lineas" /><br />
              <br />
            </h1>
          </div>

            <div id="comentarios">

              <h1>
                <?php 

			mysql_select_db($bd,$conexion);

$query="SELECT * FROM comentarios WHERE id_noticia=$row_noticias[id_noticia]";

$consulta= mysql_query($query,$conexion);

if($row_noticias['id_noticia']==0){

	echo 'No hay datos para mostrar';

}else{

while($row=mysql_fetch_assoc($consulta))

{

	echo '<article id="cuerpo-coment">';

	echo '<div>';

	echo '<font color="#0000CC">'.$row['nombre'].'</font><br />';

	echo '</div>';

	echo $row['texto'];

	echo '<div>';

	echo '<font size="-1" color="#666666">Publicado el dia '.$row['fecha'].'</font>';

	echo '</div>';

	echo '</article>';

	}mysql_free_result($consulta);

}

			

			?>
                
              </h1>
            </div>

          <h1>
            <?php if($_SESSION['name']){ ?>
              
              <article id="comentario">   
                
              </article>
          </h1>
            <article id="comentario">
            <form action="coment.php" method="post">
              <h1><br /> 
                <br />
                
                
                
                <?php if($_GET['error']=='opinion')

				{echo '<font color="#FF0000">Tienes que enviar un comentario</font>';}

				if($_GET['error']=='si'){echo '<font color="#FF0000">Gracias por dejarnos tu opinion</font>';} ?><br />
                
                <textarea  rows="3" cols="50" name="opinion" id='coment'></textarea>
                <br />
                
                <input type="submit" value="Comentar" id="submit"/> 
                
                <input type="hidden" value="<?php echo $row_noticias['id_noticia']; ?>" name='id'>
                
                <input type="reset" value="Borrar Todo" id="submit" /><br />
                
                
                
              </h1>
            </form>

            <h1><br />
            </h1>
            </article>
            <h1>
              <?php } ?> 			
              
              </section>
              
              <?php } while ($row_noticias = mysql_fetch_assoc($noticias)); ?>
            
            
            
            <aside>
              
            </aside>
          </h1>
        <aside>
          <div id='publicaciones'>
            <h1>Ultimas publicaciones </h1>
          </div>  

          <h1>
            <?php  require_once('titulares.php');?>
            
  <br />
            
            
          </h1>
        </aside>

</section>



    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php

mysql_free_result($noticias);

?>