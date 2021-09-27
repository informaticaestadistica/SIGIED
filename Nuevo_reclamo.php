<?php
        session_start();

        require_once 'Conexion.php';

        if (isset($_SESSION['usr'])){
          $cueanexo = $_SESSION['usr'];
        }else{
          header('location: Index.php');
        }

        include "Cabecera.php";
?>

<html>
<body>
 <!-- Modal -->
 <div class="modal fade" id="cargaAlumno" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Carga de Estudiante</h5>
 </div>
 </div>
 </div>
 </div>
</body>
<?php include "Footer.php";?>
</html>