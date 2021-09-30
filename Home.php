
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Sigied: Inicio</title>
    <?php
        require 'head.php';
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel = "icon" href = "img/SiGiEd.png" type = "image/png"> 
    <link rel="stylesheet" type="text/css" href="css/estilos-II.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<style>
    
    .pantalla-nuevo-reclamo{
        display: flex;
        width: 100%;
        height: 100%;
        margin-top: 100px;
    }
    .pantalla-pasos-reclamo{
        width: 20%;
        background-color: #fff;
    }
    .contenedor-pasos li{
        list-style: none;
        display: block;
        border: solid .5px #666;
        border-radius: 3px;
        cursor: pointer;
        margin: .5rem;
        text-align: center;
    }
    .contenedor-pasos li:hover{
        background-color: #aae5f8;
    }
    .contenedor-reporte{
        width: 70%;
        height: 100%;
        border: solid .5px #666;
        box-shadow: 1px 1px 3px ;
        background-color: #fff;
    }
    .datos-generales, .detalle-elemento{
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding: 0  100px 50px 100px;
    }
    .titulo{
        width: 100%;
        background-color: #64b6d1;
        color: #fff;
        margin-bottom: 50px;
    }
    .seleccionado{
        background-color: #64b6d1;
        color: #fff;
    }
    .oculto{
        display: none;
    }
    #sidebar {
      width: 250px;
      position: absolute;
      top: 150px;
      left: 0;
      height: 100vh;
      z-index: 999;
      background:  #64b6d1;
      color: #fff !important;
      transition: all 0.3s;
    }

    #sidebar.active {
      margin-left: -250px;
    }
    
    #sidebar .sidebar-header {
      padding: 20px;
      background:  #64b6d1;
    }
    
    #sidebar ul.components {
      padding: 20px 0;
      border-bottom: 1px solid #47748b;
    }
    
    #sidebar ul p {
      color: #fff;
      padding: 10px;
    }
    
    #sidebar ul li a {
      padding: 10px;
      font-size: 1.1em;
      display: block;
      color:white;
    }
    
    #sidebar ul li a:hover {
      color: #7386D5;
      background: #fff;
    }
    
    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
      color: #fff;
      background: #a2c3ce;
    }

    #sidebarCollapse span {
        display: none;
      }

      .box-shadow-menu {
        position: relative;
        padding-left: 1.25em;
        }
.box-shadow-menu:before {
  content: "";
  position: absolute;
  left: 0;
  top: 1.15em;
  width: 1.15em;
  height: 0.15em;
  background: #8cc1d1;
  box-shadow: 
    0 0.25em 0 0 #8cc1d1,
    0 0.5em 0 0 #8cc1d1;
}

</style>

<body>

    <?php
            require 'header.php';
    ?>

   
    <main class="main">
    	<div class="pantalla-nuevo-reclamo">
        
            <div class="pantalla-pasos-reclamo">
                            <nav id="sidebar">
                            <div class="sidebar-header">
                                <h3>Menú </h3>
                                </h3>
                            </div>

                            <ul class="list-unstyled components">
                                <li class="active">
                                <a href="#menu">Inicio</a>

                                </li>
                                <li>
                                <a href="#menu">Reportes Creados</a>


                                </li>
                                <li>
                                <a href="#menu">Reportes en Proceso</a>
                                </li>
                                <li>
                                <a href="#">Reportes Cerrados</a>
                                </li>
                                <li>
                                <a href="#">Mapas</a>
                                </li>
                                <li>
                                <a href="#">Estadísticas</a>
                                </li>
                                <li>
                                <a href="#">Nuevo Reporte</a>
                                </li>
                                <li>
                                <a href="#">Editar Reporte</a>
                                </li>


                            </ul>


                            </nav>
            </div>
            <div class="contenedor-reporte">
                <form action="#" method="POST">
                <div class="container-fluid">
        <div class="row">
        <br>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <br>
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>200 / 14</h3>
                        <p class="m-0">Total Reportes / Hoy</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-address-card"></i>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-lg-3 col-6">
            <br>
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>20</h3>
                        <p class="m-0">Reportes Abiertos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
            <br>
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>75</h3>
                        <p class="m-0">Reportes en Proceso</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-address-card"></i>
                    </div>
                    
                </div>
                
            </div>

            <div class="col-lg-3 col-6">
            <br>
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>105</h3>
                        <p class="m-0">Reportes Cerrados</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-address-card"></i>
                    </div>
                    
                </div>
                
            </div>
            </div> 
            <br>
            <br>
            <div class="row">
            <div class="col"><p>
  <button type="button" class="btn btn-secondary btn-lg btn-block">Descargar totales</button></p></div>
  
  <div class="col"> <p> <button type="button" class="btn btn-success btn-lg btn-block" onclick="location.href='Listado_prioridad_baja.php'">Prioridad Baja</button></p></div>
  <div class="col"><p> <button type="button" class="btn btn-warning btn-lg btn-block" onclick="location.href='Listado_prioridad_baja.php'">Prioridad Media</button></p></div>
  <div class="col"><button type="button" class="btn btn-danger btn-lg btn-block" style="height:83%" onclick="location.href='Listado_prioridad_baja.php'">Prioridad Alta</button></div>

  </div> 

  </div> 
  <br>
  <br>
  <br>

  <section class="content-header">
					<h3 class="text-center"> 5 Reportes Recientes </h3>
				</section>

				<section class="content">
					
					<div class="box-body">

						<table class="table table-sm table-bordered table-striped dt-responsive tablas" width="100%"style="font-size: 10px;">
				  
				  <thead class="thead-dark">
				    <tr>
					    <th scope="col">#</th>
					  	<th scope="col">CueAnexo</th>
					   	<th scope="col">N°</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Región</th>
                           <th scope="col">Localidad</th>
                           <th scope="col">Prioridad</th>
                           <th scope="col">Intervencion</th>
                           <th scope="col">Fecha</th>
				    </tr>
				  </thead>
                  
                    
				  <tbody> 
                  <tr>
                  
                  <td>1</td>
                  <td>260020200</td>
                  <td>168</td>
                  <td>Maestros Patagónicos</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Media</td>
                  <td>Cambio de vidrio</td>
                  <td>23/09/2021</td>                  
                  </tr>

                  <tr>
                  <td>2</td>
                  <td>26000123</td>
                  <td>741</td>
                  <td>Armada Argentina</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Baja</td>
                  <td>Cambio de puerta</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>3</td>
                  <td>260039500</td>
                  <td>42</td>
                  <td>Comandante Luis Pedro Buena</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>4</td>
                  <td>260056600</td>
                  <td>775</td>
                  <td>Colegio N° 775</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Media</td>
                  <td>Cambio de Vidrio</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>5</td>
                  <td>260038800</td>
                  <td>741</td>
                  <td>Cabo Bomberos Voluntarios Juan Manuel</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Media</td>
                  <td>Cambio de puerta</td>
                  <td>23/09/2021</td>
                  </tr>
                  </tbody>    
                  </table>
						
					</div>

				</section>      



                <section class="content-header">
					<h3 class="text-center"> 5 Reportes Prioridad Alta</h3>
				</section>

				<section class="content">
					
					<div class="box-body">

						<table class="table table-sm table-bordered table-striped dt-responsive tablas" width="100%" style="font-size: 10px;">
				  
				  <thead class="thead-dark">
				    <tr>
					    <th scope="col">#</th>
					  	<th scope="col">CueAnexo</th>
					   	<th scope="col">N°</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Región</th>
                           <th scope="col">Localidad</th>
                           <th scope="col">Prioridad</th>
                           <th scope="col">Intervencion</th>
                           <th scope="col">Fecha</th>
				    </tr>
				  </thead>
                  
                    
				  <tbody> 
                  <tr>
                  
                  <td>1</td>
                  <td>260020200</td>
                  <td>168</td>
                  <td>Maestros Patagónicos</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>                  
                  </tr>

                  <tr>
                  <td>2</td>
                  <td>26000123</td>
                  <td>741</td>
                  <td>Armada Argentina</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>3</td>
                  <td>260039500</td>
                  <td>42</td>
                  <td>Comandante Luis Pedro Buena</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>4</td>
                  <td>260056600</td>
                  <td>775</td>
                  <td>Colegio N° 775</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>
                  </tr>

                  <tr>
                  <td>5</td>
                  <td>260038800</td>
                  <td>741</td>
                  <td>Cabo Bomberos Voluntarios Juan Manuel</td>
                  <td>II</td>
                  <td>Pto. Madryn</td>
                  <td>Alta</td>
                  <td>Perdida de gas</td>
                  <td>23/09/2021</td>
                  </tr>
                  </tbody>    
                  </table>
						
					</div>

				</section>       
                </form>
            </div>
        </div>
	</main>
	

    <?php
    require 'Footer.php';
    ?>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {


      $('#Menu').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>

</body>
</html>