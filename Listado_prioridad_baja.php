<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Sigied: Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel = "icon" href = "img/SiGiEd.png" type = "image/png"> 
    <link rel="stylesheet" type="text/css" href="css/estilos-II.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/xlsx.full.min.js"></script>
    <script src="js/FileSaver.min.js"></script>
    <script src="js/tableexport.min.js"></script>

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
                     
                         <li class="lista-pasos">Inicio</li> 
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
        

  </div> 

  <br>
  <div>
  <button type="button" class="btn btn-outline-success" style="float: right;" onclick=exportar()>Exportar</button>
  </div>
<br>
  <section class="content-header" >
  
					<h3 class="text-center"> Reportes Prioridad Baja </h3>
				</section>

				<section class="content" id="tabla">
					
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



                      
                </form>
            </div>
        </div>
	</main>
	
	<script type="text/javascript">
	function exportar(){
        $tabla = document.querySelector("#tabla");
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reportes prioridad baja", //Nombre del archivo de Excel
           sheetname: "Reportes prioridad baja", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
	}
	</script>

    <?php
    require 'Footer.php';
    ?>

</body>
</html>
