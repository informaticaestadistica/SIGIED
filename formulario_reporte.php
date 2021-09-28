<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sigied: Reclamos</title>
    <?php
        require 'head.php';
    ?>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<style>
    
    main{
        min-height: 70vh;
    }

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
        box-shadow: 1px 1px 5px ;
        background-image: linear-gradient( 109.6deg,  rgba(223,234,247,1) 11.2%, rgba(244,248,252,1) 91.1% );
    }
    .formulario {
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
    .btn{
        cursor: pointer;
    }
</style>



<body>
	<header class="header">
        <?php
            require 'header.php';
        ?>
    <main class="main">
    	<div class="pantalla-nuevo-reclamo">
            <div class="pantalla-pasos-reclamo">
                <div class="contenedor-pasos">
                     <ol id="pasos">
                         <li class="lista-pasos seleccionado">Datos generales</li> 
                         <li class="lista-pasos">Detalle de Elemento</li>
                         <li class="lista-pasos">Archivos adjuntos</li>
                         <li class="lista-pasos">Prioridades</li>
                     </ol>
                </div>
            </div>
            <div class="contenedor-reporte">
                <form action="controller.php" method="POST">
                    <div class="titulo">
                        <h1 class="text-center" id="titulo">Datos Generales</h1>
                    </div>
<!--############################### Pantalla de Datos Generales #################################################-->                    
                    <fieldset class="formulario" id="datos-generales">

                        <div class="row" >
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Escuela N°:</h5>
                                </label>
                                    <input type="text" name="escuela-nro"  class=" form-control" readonly disabled>
                            </div>
                            <div class="col">
                                <label>
                                   <h5 class="font-weigth-bold">N° Anexo:</h5>
                                </label>
                                <input type="text" class="form-control" name="escuela-anexo" disabled readonly required>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Fecha:</h5>
                                </label>
                                <input type="text" class="form-control" disabled readonly required>
                            </div>
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Hora:</h5>
                                </label>
                                <input type="text" class="form-control" disabled readonly required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Direccion:</h5>
                                </label>
                                <input type="text" class="form-control" disabled readonly required>
                            </div>
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Localidad:</h5>
                                </label>
                                    <input type="text" class="form-control" disabled readonly required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Teléfono:</h5>
                                </label>
                                <input type="tel" class="form-control" disabled readonly required>
                            </div>
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Autor Reporte:</h5>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="categoria">
                                    <h5>Categoria</h5>
                                </label>
                                <select id="categoria" name="categoria" class="form-control"><!--Datos traidos de la BBDD--></select>
                                </select>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Titulo:</h5>
                                </label>
                                <input type="text" class="form-control" required placeholder="Titulo" name="titulo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Breve Descripción:</h5>
                                </label>
                                <textarea class="form-control" rows="3" name="breve-descripcion"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Orígen</h5>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="radio" name="origen" value="interno">Interno<br>
                                <input type="radio" name="origen" value="externo">Externo
                            </div>
                            <div class="col">
                                <input type="radio" name="tipo-origen">Uso<br>
                                <input type="radio" name="tipo-origen">Mal uso
                            </div>
                            <div class="col">
                                <input type="radio" name="tipo-origen">Accidental<br>
                                <input type="radio" name="tipo-origen">Otro
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Perdida:</h5>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input name="perdida" type="checkbox">Edificio<br>
                                <input name="perdida" type="checkbox">Ambiente
                            </div>
                            <div class="col">
                                <input name="perdida" type="checkbox">Mobiliario<br>
                                <input name="perdida" type="checkbox">Vehiculo
                            </div>
                            <div class="col">
                                <input name="perdida" type="checkbox">Información<br>
                                <input name="perdida" type="checkbox">Personas
                            </div>
                        </div>
                    </fieldset>
                    
<!--############################### Pantalla de Detalles del Elemento #################################################-->
                    <fieldset class="formulario oculto" id="detalle-elemento">
                        <div id="contenedor-falla">
                            <div class="falla">
                                <div class="row">
                                    <div class="col">
                                        <label>
                                            <h5 class="font-weigth-bold">Categoría:</h5>
                                        </label>
                                            <input type="text" class="text-muted form-control" id="categoria-elegida" readonly value="Estructura">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="elemento">Elemento</label>
                                        <select class="form-control" id="elemento" name="elemento" required><!--Datos traidos de la BBDD--></select>
                                    </div>
                                    <div class="col">
                                        <label for="sub-elemento">Sub-Elemento</label>
                                        <select class="form-control" id="sub-elemento" name="sub-elemento" required><!--Datos traidos de la BBDD--></select>
                                    </div>
                                    <div class="col">
                                        <label for="falla">Falla</label>
                                        <select class="form-control" id="falla" name="falla" required> <!--Datos traidos de la BBDD--></select>
                                    </div>
                                </div>
                                <button class="btn-borrar oculto">Borrar</button>
                            </div>
                        </div>
                        <button id="btn-nuevo" class="btn">Nuevo</button>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Descripción:</h5>
                                </label>
                                <textarea class="form-control" rows="3" name="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>
                                    <h5 class="font-weigth-bold">Número de Serie:</h5>
                                </label>
                                <input type="text" name="nro-serie" class="form-control">
                            </div>
                        </div>
                    </fieldset>
<!--############################### Pantalla de Detalles del Elemento #################################################-->
                    <fieldset class="formulario oculto" id="archivo-adjunto">
                        <h1>A revisar</h1>
                    </fieldset>
<!--############################### Pantalla de Prioridades #################################################-->
                    <fieldset class="formulario oculto" id="prioridades">
                        <label>
                            <h5>¿Qué importancia tiene el elemento para asegurar la presencialidad?</h5>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input name="importancia" type="checkbox">Insignificante<br>
                                <input name="importancia" type="checkbox">Bajo
                            </div>
                            <div class="col">
                                <input name="importancia" type="checkbox">Medio<br>
                                <input name="importancia" type="checkbox">Alto
                            </div>
                        </div>
                        <label>
                            <h5>¿Cúal es la probabilidad de suspención de la presencialidad a corto plazo?</h5>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input name="importancia" type="checkbox">Insignificante<br>
                                <input name="importancia" type="checkbox">Bajo
                            </div>
                            <div class="col">
                                <input name="importancia" type="checkbox">Medio<br>
                                <input name="importancia" type="checkbox">Alto
                            </div>
                        </div>
                        <label>
                            <h5>¿Qué porcentaje de matricula se ve afectado directamente por la falla?</h5>
                        </label>
                        <div class="row">
                            <div class="col">
                                <input name="importancia" type="checkbox">0-25%<br>
                                <input name="importancia" type="checkbox">25-50%
                            </div>
                            <div class="col">
                                <input name="importancia" type="checkbox">50-75%<br>
                                <input name="importancia" type="checkbox">75-100%
                            </div>
                        </div>
                    </fieldset>
                    <div class="container text-center">
                        <input type="submit" value="Generar reporte">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--<footer class="footer">
    	<div class="footer-contenido">
    		Direccion de Estadisticas
    	</div>
    </footer>-->
    <?php
    require 'sigied/footer.php';
    ?>
<script type="text/javascript" src="js/nuevo_reclamo.js"></script>
</body>
</html>