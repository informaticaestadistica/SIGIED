<?php 
	session_start();
	if ($_SESSION['usr'] == null)   {
		session_destroy();
		header('location: Index.php');
	}
	require "Cabecera.php" 
?>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php">Salir</a>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="control.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Usuarios</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Listas
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item disabled" href="#">Instituciones</a>
	          <a class="dropdown-item" href="listas_confirmados.php">Completados</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item disabled" href="#">Matrículas</a>
	        </div>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
	    </form>
	  </div>
	</nav>

	<div class="d-flex min-vh-100">
		
	</div>

</body>

<?php require "Footer.php" ?>