<?php
	require_once "Conexion.php";

	$conn = Conexion::conectar();

	if(!empty($_GET)){
		$elemento = $_GET['elemento'];
	}
	$stmt = $conn->prepare("SELECT id, descripcion FROM sub_elemento WHERE elemento_id=" ."$elemento");
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	
