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
        background-color: #64b6d1;
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
                <li><a href="#" class="seleccionado">Inicio</a></li>
                <li><a href="#">Mesa de ayuda</a></li>
                <a href="#">Salir</a>
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
                     
                         <li class="lista-pasos ">Mis Reportes</li> 
                         <li class="lista-pasos">Nuevo Reporte</li>
                         <li class="lista-pasos">Editar Reporte</li>
                     
                </div>
            </div>
            <div class="contenedor-reporte">
                <form action="#" method="POST">
                <br>
                <br>
                
                    <div class="titulo">
                    <div class="container">
                        <h1 class="display-4 text-center">Sistema de Gestión de Infraestructura Educativa </h1>
                        <h3 class="display-5 text-center">Prueba Piloto</h3>
                                               
                        <h6 class="lead text-center">Si.G.I.Ed. es un dispositivo provincial 
                        que permite generar información acerca del estado de la infraestructura de 
                        los establecimientos de la provincia del Chubut reportados por los directores de
                        las escuelas públicas, de todos los niveles y modalidades de la provincia.
                        </h6>
                        
                        <h5 class="text-center">
El uso del sistema nos permitirá atender a las reparaciones y demandas que se presenten, reduciendo los tiempos de respuesta. 
                        </h5 >
                        
                        <h5 class="lead text-center" style="font-weight:bold">Agradecemos su colaboración. </h5>
                        
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>

    <?php
    require 'Footer.php';
    ?>

</body>
</html>
