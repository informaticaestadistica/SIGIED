<!--==============================
=            CABECERA            =
===============================-->

<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    include "Cabecera.php";

?>
<html>
<body>

<div class="bg">

<!--==========================
=           D-FLEX           =
===========================-->

<!-- CAMBIAR EL D-FLEX Y FUENTE -->
<div class="d-flex flex-column stycky-footer-wrapper" id="c2_ctl" style="display:block; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;"><br>

    <!--===============================================
    =            CAMBIAR NOMBRE DE SISTEMA            =
    ================================================-->

    
    
    
    <!--===========================================
    =            FORMULARIO DE INGRESO            =
    ============================================-->
    
    <div align="center">
        <div class="login">
            <form action="Ingreso.php" method="post" accept-charset="utf-8" >
                <div class="container">
                <div  class="titulo" >Bienvenido</div>
                    <div class="row">
                        <div class="col col-md-12">
                            <span>Usuario:</span>
                            <div class="col col-md-12">
                                <input type="text" name="usr" style="height: 25px; width: 110px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <span>Contraseña:</span>
                            <div class="col col-md-12">
                                <input type="text" name="pass" style="height: 25px; width: 110px">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button class="btn btn-secondary" id="btn-ingresar">INGRESAR</button>
            </form>
        </div>
    </div>


    <!--====  End of FORMULARIO DE INGRESO  ====-->
    
</div>
<!--====  End of D-FLEX  ====-->
<!--===================================
=            PIE DE PAGINA            =
====================================-->

</div>

</body>

<?php

    include "Footer.php";

?>
</html>