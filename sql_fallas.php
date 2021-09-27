<?php
	require_once "Conexion.php";

	$conn = Conexion::conectar();

	$stmt = $conn->prepare("SELECT id, descripcion FROM categoria_falla ");
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	
