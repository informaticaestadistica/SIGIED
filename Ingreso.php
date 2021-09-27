<?php

	require_once 'Conexion.php';
	
	if (isset($_POST['usr'])) {
		
		$usr = $_POST['usr'];

		if ($usr != null){
				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE usr = :$usr");

			$stmt -> bindParam(":".$usr, $usr, PDO::PARAM_STR);

			$stmt -> execute();

			$respuesta = $stmt -> fetch();

			$stmt = null;
			
			if ($respuesta != null) {

				if ($respuesta['password'] == $_POST['pass']) {

					session_start();
					$_SESSION['usr'] = $respuesta['usr'];
					header('location: Home.php');
					die();
					
				} else {
					echo "Contraseña incorrecta";
					header('location: Index.php');
					die();
				}
				
			} else {
				echo "Usuario no encontrado";
				header('location: Index.php');

			}
			
		} else {

			echo "Ocurrió un error, intente nuevamente";
			header('location: Index.php');

		}
		

	}

?>