<?php
	require_once "Conexion.php";

	$conn = Conexion::conectar();

	if(!empty($_GET)){
		$categoria = $_GET['categoria'];
	}
	$stmt = $conn->prepare("SELECT elemento.id, elemento.descripcion FROM elemento INNER JOIN categoria ON elemento.categoria_id = categoria.id
	WHERE categoria.descripcion LIKE '" ."$categoria'");
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	
