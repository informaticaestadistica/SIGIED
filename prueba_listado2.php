<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sigied: Reclamos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel = "icon" href = "images/icon_Sigied.png" type = "image/png"> 
    <link rel="stylesheet" type="text/css" href="css/estilos-II.css">

</head>

<style type="text/css">
	.navbar-reclamos {
	  display: flex;
	  justify-content: space-between;
	  align-items: center;
	  border-bottom: solid .5px;
	  background-color: #fff;
	}
	.navbar-reclamos a{
	  display: inline-block;
	  padding: 1rem;
	  text-decoration: none;
	  transition: all 0.4s linear;
	  border-radius:2px;
	  color: #000;

	}
	.navbar-reclamos ul {
	  margin: 0;
	  padding: 0;
	  list-style: none;
	}
	.navbar-reclamos ul li {
	  display: inline-block;
	}
	.navbar-reclamos a:hover {
	  box-shadow: 0 1.5px 4px rgb(39, 83, 86);;
	}


	.contenedor-central, .menu-reclamo{
		display: flex;
		background-color: #fff;
	}

	.lista-reclamos{
		width: 30%;
		padding: 0.5rem;
		border-right: solid 1px #666;
	}

	.lista-isntituciones, .menu-reclamo{
		list-style: none;
		cursor: pointer;
	}

	.lista-isntituciones li, .menu-reclamo li{
		display: block;
		padding: .5rem;
		color: #000;
		text-decoration: none;
		border-bottom: solid 1px;
	}

	.lista-isntituciones li:hover, .menu-reclamo li:hover{
		background-color: #6662;
	}

	.detalles-reclamo{
		width: 100%;
		padding: 20px;
	}
	.ocultar{
		display: none;
	}
</style>
<body>
	<header class="header">
        <div class="hearder-logo">
            <img src="images/SiGied_logo_b" class="img-logo-Sigied">
            
        </div>
        <div>
        <nav class="navbar" >
            <ul style="text-align: right">
                <li><a href="#">Inicio</a></li>
                <li><a href="#" class="seleccionado">
                	<span>
                		<svg width="16" height="16">
						  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
						</svg>
                	</span>Todos los reclamo</a></li>
                <li><a href="#">
                	<span>
                		<svg width="16" height="16">
						  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
						  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
						</svg>
                	</span>Nuevo reclamo</a></li>
        		<a href="#">Salir</a>
            </ul>
        </nav>
        </div>
    </header>
    <div class="franja-central">
    </div>
	<main>
		<nav class="navbar-reclamos">
			<ul >
				<li><a href="#">Todos</a></li>
				<li><a href="#" class="seleccionado">Instituciones</a></li>
				<li><a href="#">Oficinas</a></li>
			</ul>
		</nav>
		<div>
			<h2>Instituciones</h2>
			<labelss for="buscar">
				<svg width="16" height="16">
				  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
				<input type="text" name="buscar" placeholder="Buscar">
			</label>
		</div>
		<div class="contenedor-central">
			<div class="lista-reclamos" id="lista-reclamos">
				<ol class="lista-isntituciones">
					
				</ol>
			</div>
			<div class="detalles-reclamo" id="detalle-reclamo">
				<div class="hearder-detalle">
					<ul class="menu-reclamo" id="menu-reclamo">
						<li id="btn-reclamo-resumen">Resumen</li>
						<li id="btn-reclamo-detalle">Detalle</li>
						<li id="btn-reclamo-institucion">Institución</li>
					</ul>
				</div>
				<div class="main-reclamo" id="main-reclamo">
					<div class="reclamo-resumen ocultar">
						<p>Resumen</p>
					</div>
					<div class="reclamo-detalle ocultar">
						<h2>Escuela N° 2403</h2>
					<p>Localidad: <span>Rawson</span></p>
					<p>Dirección: <span>Calle + nro</span></p>
					<p>Codigo de Transaccion: <span>#123412</span></p>
					<p>Fecha de inicio del reclamo: <span>03/03/2001</span></p>
					<p>Estado: <span>
						<select>
							<option selected>En proceso</option>
							<option>Terminado</option>
							<option>Otra opcion</option>
						</select>
					</span>
					<span>
						<svg width="16" height="16">
						  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
					</span>
					</p>
					<p>mas datos: <span>#123412</span></p>
					</div>
					<div class="reclamo-institucion ocultar">
						<section id="datos-institucion">
							<h2>Datos de la institucion</h2>
							<h3>Nombre:</h3>
								<p id="reclamo-institucion-nombre"></p>	
							<h3>Escuela N°:</h3>
								<p id="reclamo-institucion-nro"></p>	
							<h3>Anexo N°:</h3>
								<p id="reclamo-institucion-anexo"></p>	
							<h3>Cueanexo:</h3>
								<p id="reclamo-institucion-cueanexo"></p>	
							<h3>Departamento:</h3>
								<p id="reclamo-institucion-departamento"></p>	
							<h3>Localidad:</h3>
								<p id="reclamo-institucion-localidad"></p>	
							<h3>Direccion:</h3>
								<p id="reclamo-institucion-direccion"></p>	
						</section>
						<section class="datos-contacto">
							<h2>Datos de contacto</h2>
							<h3>Director:</h3>
								<p id="reclamo-institucion-director"></p>	
							<h3>Telefono:</h3>
								<p id="reclamo-institucion-telefono"></p>
							
							<h3>Email:</h3>
								<p id="reclamo-institucion-email"></p>	
						</section>
					</div>
				</div>
				<div class="footer-reclamo">
					<button>Guardar</button>
				</div>
			</div>
		</div>
	</main>
	<script src="js/admin/reclamos.js"></script>
</body>
</html>



