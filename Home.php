<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Sigied: Inicio</title>
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



</style>

<body>
	<header class="header">
        <div class="hearder-logo">
            <img src="img/SiGiEd_logo_b.png" class="img-logo-Sigied">
            
        </div>
        <div>
        <nav class="navbar">
            <ul>
                <a href="Index.php">Salir</a>
            </ul>
        </nav>
        </div>
    </header>
    <div class="franja-central">
    </div>
    <main class="main">
 
  


    	<div class="pantalla-nuevo-reclamo">
        
            <div class="pantalla-pasos-reclamo">
                <div class="contenedor-pasos">
                     
                         <li class="lista-pasos ">Inicio</li> 
                         <li class="lista-pasos">Reportes creados</li>
                         <li class="lista-pasos">Reportes en proceso</li>
                         <li class="lista-pasos">Reportes cerrados</li>
                         <li class="lista-pasos">Mapas</li>
                         <li class="lista-pasos">Estadísticas</li>
                         <li class="lista-pasos">Nuevo Reporte</li>
                         <li class="lista-pasos">Editar Reporte</li>
                     
                </div>
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
  <button type="button" class="btn btn-secondary btn-sm">Descargar totales</button></p></div>
  
  <div class="col"><p> <button type="button" class="btn btn-success btn-sm">Prioridad Baja</button></p></div>
  <div class="col"><p> <button type="button" class="btn btn-warning btn-sm">Prioridad Media</button></p></div>
  <div class="col"><p> <button type="button" class="btn btn-danger btn-sm">Prioridad Alta</button></p></div>

  </div> 

  </div> 
  <br>
  <br>
  <br>

  <section class="content-header">
					<h3 class="text-center"> 5 reportes recientes </h3>
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
					<h3 class="text-center"> 5 reportes prioridad alta</h3>
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
	
	<script type="text/javascript">
	function salir(){

	}
	</script>

    <?php
    require 'Footer.php';
    ?>

</body>
</html>
