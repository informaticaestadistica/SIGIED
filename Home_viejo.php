<?php 
	session_start();
	if ($_SESSION['usr'] == null)   {
		session_destroy();
		header('location: Index.php');
	}

	require_once "Conexion.php";
	require "Cabecera.php"; 
	#include "Reclamo.php";
	include "Usuario.php";
	$usr = $_SESSION['usr'];
	$usuario = new Usuario($usr);
?>
<html>
<body>

	<div class="min-vh-100">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link disabled" href="Home.php">Inicio</a>
		      </li>
			  <li class="nav-item active">
		        <a class="nav-link enabled"  data-toggle="modal" data-target="#nuevoReclamo">Nuevo Reporte</a>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Mis Reportes
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="listas_confirmados.php">Enviados<span class="sr-only">(current)</span></a>
		          <a class="dropdown-item" href="listas_confirmados.php">Cerrados<span class="sr-only">(current)</span></a>

		        </div>
		      </li>
		    </ul>
		      <a class="btn btn-outline-success my-2 my-sm-0" href="Index.php">Salir</a>
		  </div>
		</nav>

		<div class="container">

			<div class="content-wrapper">

				<section class="content-header">
					<h1 class="text-center"> Bienvenido </h1>
				</section>
				
			</div>
			
		</div>
		 <!-- Modal -->
 <div class="modal fade" id="nuevoReclamo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
		<div class="modal-header">
 		<h5 class="modal-title" id="staticBackdropLabel"> NUEVO REPORTE<REPORTE/h5>
 		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
		
        <div class="modal-body">
		<!--=============================================
          =            FORMULARIO CARGA NUEVA SOLICITUD           =
          ==============================================-->

          <form action="act_reclamo.php" role="form" method="POST">
		
		  <div class="row" >
              <div class="col">
                <label>Fecha:</label>
              </div>

			  <div class="col">
				<p><?php echo $usuario->get_fecha();?></p>
              </div>
			  <div class="col">
                <label>Hora:</label>
              </div>

			  <div class="col">
				<p><?php echo $usuario->get_hora();?></p>
              </div>
            </div>
			<div class="row">
              <div class="col">
                <label>Direccion:</label>
              </div>

			  <div class="col">
				<p><?php echo $usuario->get_direccion();?></p>
              </div>

			  <div class="col">
                <label>Localidad:</label>
              </div>

			  <div class="col">
				<p><?php echo $usuario->get_localidad();?></p>
              </div>
			 
            </div>

			<div class="row">
              <div class="col">
                <label>Teléfono:</label>
              </div>

			  <div class="col">
				<p><?php echo $usuario->get_telefono();?></p>
              </div>

			  <div class="col">
                <label>Autor Reporte:</label>
              </div>

			  <div class="col">
				<p><?php echo $usr;?></p>
              </div>
			 
            </div>

			<div id ="parte1">
			<div class="row">
              <div class="col">
                <label>Escuela/Oficina</label>
				<?php echo $usuario->get_escuelas_oficinas(); ?>
              </div>
            </div>
			<div class="row">
              <div class="col">
                <label>Categoría Reporte</label>
				<?php echo $usuario->get_categorias(); ?>
              </div>
            </div>

			<div class="row">
              <div class="col">
                <label>Título</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título" required id="form-titulo">
              </div>
            </div>
			<div class="row">
              <div class="col">
                <label>Breve Descripción</label>
                <input type="text" class="form-control" name="breve_descripcion" placeholder="Descripcion"required id="form-breve-descripcion">
              </div>
            </div>

			<div class="row">
              <div class="col">
                <label>Orígen</label>
                <?php echo $usuario->get_origenes(); ?>
              </div>
            </div>
			<div class="row">
              <div id ="chcks" class="col">
			  <?php echo $usuario->get_descripcion_origen('Interno'); ?>
              </div>
            </div>

			<div class="row">
              <div class="col">
                <label>Perdidas</label>
              </div>
            </div>
			
			<div class="row">
              <div class="col">
                <?php echo $usuario->get_perdidas(); ?>
              </div>
            </div>
			</div>
		  </div>
		<div id="parte2" style="display: none;">
		<div class="row">
              <div class="col" id="cat_2">
              </div>
			  </div>
			<div class="row">
			  <div class="col">
			  	<label>Elemento</label>
				<div id="elementos">
				</div>
              </div>
			  <div class="col">
			  	<label>Sub-Elemento</label>
				<div id="sub_elementos">
				</div>
              </div>
			  <div class="col">
			  	<label>Falla</label>
				<div id="falla">
				</div>
              </div>
            </div>
			<div class="row">
              <div class="col">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"required id="form-breve-descripcion">
              </div>
            </div>
			<div class="row">
              <div class="col">
                <label>Número de Serie</label>
                <input type="text" class="form-control" name="nro_serie" placeholder="N° Serie"required id="form-serie">
              </div>
            </div>
		</div>

		<div id="parte3" style="display: none;">
		<div class="row">
				<div class="col">
                <label>Archivo Adjunto</label>
              </div>
            </div>
		<div class="row">
              <div class="col">
				<input type="file" id="file" name="file" accept="text/plain, .csv">
              </div>
            </div>
		
			<div class="row">
				<div class="col">
                <label>¿Qué importancia tiene el elemento para asegurar la presencialidad?</label>
				</div>
            </div>
			<div class="row">
				<div class="col">
				<input type='radio' name='Importancia' values='Insignificante'>Insignificante<br>
				<input type='radio' name='Importancia' values='Bajo'>Bajo<br>
				<input type='radio' name='Importancia' values='Medio'>Medio<br>
				<input type='radio' name='Importancia' values='Alto'>Alto<br>
              </div>
            </div>
			<div class="row">
				<div class="col">
                <label>¿Cúal es la probabilidad de suspención de la presencialidad a corto plazo?</label>
				</div>
            </div>
			<div class="row">
				<div class="col">
				<input type='radio' name='Probabilidad' values='Insignificante'>Insignificante<br>
				<input type='radio' name='Probabilidad' values='Bajo'>Bajo<br>
				<input type='radio' name='Probabilidad' values='Medio'>Medio<br>
				<input type='radio' name='Probabilidad' values='Alto'>Alto<br>
              </div>
            </div>

			<div class="row">
				<div class="col">
                <label>¿Qué porcentaje de matricula se ve afectado directamente por la falla?</label>
				</div>
            </div>
			<div class="row">
				<div class="col">
				<input type='radio' name='Porcentaje' values='Insignificante'>0-25%<br>
				<input type='radio' name='Porcentaje' values='Bajo'>25-50%<br>
				<input type='radio' name='Porcentaje' values='Medio'>50-75%<br>
				<input type='radio' name='Porcentaje' values='Alto'>75-100%<br>
              </div>
            </div>
		
		
		</div>

		<div class="modal-footer">
          <button id="cerrar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
		  <button id="volver" style="display: none;" type="button" class="btn btn-outline-primary">Volver</button>
		  <button id="siguiente" type="button" class="btn btn-outline-primary">Siguiente</button>
		  <button id="guardar" style="display: none;"type="submit" class="btn btn-primary">Guardar</button>
        </div>
		
      </form>	
 </div>
 </div>
 </div>
 </div>
	</div>
	<script type="text/javascript" src="js/Formulario_nuevo_reporte.js"></script>
</body>

<?php

    include "Footer.php";

?>
</html>