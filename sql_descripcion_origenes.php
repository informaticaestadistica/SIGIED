<?php
	require_once "Conexion.php";

	$conn = Conexion::conectar();

	if(!empty($_GET)){
		$origen = $_GET['origen'];
	}
	$stmt = $conn->prepare("SELECT descripcion FROM origen WHERE origen like '" ."$origen'");
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	
