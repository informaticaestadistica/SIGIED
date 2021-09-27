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
            <img src="img/SiGied_logo_b" class="img-logo-Sigied">
            
        </div>
        <div>
        <nav class="navbar">
            <ul>
                <li><a href="#" class="seleccionado">Inicio</a></li>
                <li><a href="#">Mis Pedidos</a></li>
                <li><a href="#">Nuevo Pedido</a></li>
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
                     <ol id="pasos">
                         <li class="lista-pasos seleccionado">Datos generales</li> 
                         <li class="lista-pasos">Detalle de Elemento</li>
                         <li class="lista-pasos">Archivos adjuntos</li>
                         <li class="lista-pasos">Prioridades</li>
                     </ol>
                </div>
            </div>
            <div class="contenedor-reporte">
                <form action="#" method="POST">
                    <div class="titulo">
                        <h1 class="text-center" id="titulo">Datos Generales</h1>
                    </div>
                    <div class="datos-generales" id="datos-generales">
                        <div class="row" >
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Escuela N°: <span class="font-weight-light text-center">1</span></h5>
                            </div>
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">N° Anexo: <span class="font-weight-light text-center">0</span></h5>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Fecha: <span class="font-weight-light text-center">22/2021</span></h5>
                            </div>
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Hora: <span class="font-weight-light text-center">11 : 55</span></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Direccion: <span class="font-weight-light text-center">Direccion</span></h5>
                            </div>
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Localidad: <span class="font-weight-light text-center">Rawson</span></h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Teléfono: <span class="font-weight-light text-center">2804-123456</span></h5>
                            </div>
                            <div class="col mx-sm-3 mb-2">
                                <h5 class="fonyt-weigth-bold">Autor Reporte:</h5>
                                <input type="text" class="form-control" value="Dirección de Estadísticas">
                            </div>
                        </div>

<!--############################### Fin de la pantalla de los pasos 1 #################################################-->
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Categoría Reporte</h5>
                                <select class="form-control">
                                </select>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Titulo: </h5>
                                <input type="text" class="form-control" placeholder="Titulo del reclamo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Breve Descripción:</h5>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Orígen</h5>
                                <input type="radio" name="origen">Interno
                                <input type="radio" name="origen">Externo
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="radio" name="tipo-origen">Uso<br>
                                <input type="radio" name="tipo-origen">Mal uso<br>
                                <input type="radio" name="tipo-origen">Accidental<br>
                                <input type="radio" name="tipo-origen">Otro<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Perdida:</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="checkbox">Edificio<br>
                                <input type="checkbox">Ambiente
                            </div>
                            <div class="col">
                                <input type="checkbox">Mobiliario<br>
                                <input type="checkbox">Vehiculo
                            </div>
                            <div class="col">
                                <input type="checkbox">Información<br>
                                <input type="checkbox">Personas
                            </div>
                        </div>
                    </div>
<!--############################### Fin de la pantalla de los pasos 2 #################################################-->
                    <div class="detalle-elemento oculto" id="detalle-elemento">
                        <div class="row">
                            <div class="col">
                                <h5 class="fonyt-weigth-bold">Categoría: <span class="text-muted" id="categoria-elegida">Categoria seleccionado</span></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Elemento</label>
                                <div id="elementos"></div>
                            </div>
                            <div class="col">
                                <label>Sub-Elemento</label>
                                <div id="sub_elementos"></div>
                            </div>
                            <div class="col">
                                <label>Falla</label>
                                <div id="falla"></div>
                            </div>
                        </div>
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

<script>
    const pasos = document.getElementById('pasos')

    pasos.addEventListener('click', (e)=>{
        if(e.target.classList.contains('lista-pasos')){
            if(e.target.textContent == 'Detalle de Elemento'){
                document.querySelector('.seleccionado').classList.remove('seleccionado')
                e.target.classList.add('seleccionado')
                document.getElementById('detalle-elemento').classList.remove('oculto')
                document.getElementById('datos-generales').classList.add('oculto')
                document.getElementById('titulo').textContent = 'Detalles del elemento'
            }
        }
    })
</script>

</body>
</html>
