<?php 

	session_start();

	$cueanexo = $_SESSION['usr'];

	include "Cabecera.php";
	include "Reclamo.php";

	require_once "Conexion.php";


	/*======================================
	=            GUARDAR RECLAMO           =
	======================================*/
	
	if (isset($_POST['id_esc_ofic'])) {

		$esc_ofic = $_POST['id_esc_ofic'];
		$categoria = $_POST['id_categoria'];
		$titulo = $_POST['titulo'];
		$breve_descripcion = $_POST['breve_descripcion'];
		$origen = $_POST['id_origen'];
		$descripcion_origen = $_POST['descripcion_origen'];
		$perdida = $_POST['descripcion_perdida'];


		$elemento = $_POST['id_elemento'];
		$sub_elemento = $_POST['id_sub_elemento'];
		$falla = $_POST['id_falla'];
		$descripcion = $_POST['descripcion'];
		$nro_serie = $_POST['nro_serie'];


		$archivo_adj = $_POST['file'];
		$immportancia = $_POST['Importancia'];
		$probabilidad = $_POST['Probabilidad'];
		$porcentaje = $_POST['Porcentaje'];


		if(($immportancia == 'Bajo' or $immportancia == 'Insignificante') and 
		($probabilidad == 'Bajo' or $probabilidad == 'Insignificante')and 
		($porcentaje == 'Bajo' or $porcentaje == 'Insignificante' or $porcentaje == 'Alto')){
			$prioridad = 1;
		}

		if(($immportancia == 'Bajo' or $immportancia == 'Bajo') and $probabilidad == 'Medio' 
		and $porcentaje == 'Medio'){
			$prioridad = 2;
		}

		if($immportancia == 'Alto' and $probabilidad == 'Alto' 
		and $porcentaje == 'Alto'){
			$prioridad = 3;
		}

		$datos = array('esc_ofic' => $esc_ofic, 'categoria_id' => $categoria,
						'titulo' => $titulo, 'breve_descripcion' => $breve_descripcion,
						'origen_id' => $origen, 'descripcion_origen_id' => $descripcion_origen,
						'perdida_id' => $perdida, 'elemento_id'=> $elemento,
						'sub_elemento_id' =>$sub_elemento, 'falla_id' => $falla,
						'descripcion' => $descripcion, 'nro_serie' => $nro_serie,
						'archivo_adj' => $archivo_adj, 'prioridad_id' => $prioridad);

		$reclamo = new Reclamo($datos);
		$rta = $reclamo -> guardar_reclamo();

		if($rta){
			echo '<script>
			                
			                        swal({
			                                type: "success",
			                                title: "¡Cargado correctamente!",
			                                showConfirmButton: true,
			                                confirmButtonText: "Cerrar",
			                                closeOnConfirm: false

			                        }).then(function(result) {

			                                if(result.value){
		                                        window.location = "Home.php";
			                                }
			                        });
			                </script>';
		}else{

			        echo '<script>
			                        
			                swal({
			                        type: "error",
			                        title: "¡No se pudo cargar, por favor intente nuevamente!",
			                        showConfirmButton: true,
			                        confirmButtonText: "Cerrar",
			                        closeOnConfirm: false
			                }).then(function(result) {
			                        if(result.value){
			                                window.location = "Home.php";
			                        }
			                });
			                
			        </script>';


		}
		
	}
	
	/*=====  End of GUARDAR ALUMNO  ======*/


	
		

include "footer.php";

?>
