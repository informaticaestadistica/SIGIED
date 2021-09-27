<?php 
	
	require_once 'Conexion.php';

	class Institucion {
		
		public $cueanexo;
		public $nro;
		public $nombre;
		public $telefono;
		public $codigo_area;
		public $email;
		public $email_alt;
		public $departamento;
		public $localidad;
		public $calle;
		public $nro_calle;
		public $cod_postal;
		public $nombre_direc;
		public $apellido_direc;

		public $con;

		function __construct($cueanexo) {
			if($cueanexo != null)
				$this->get_by_cueanexo($cueanexo);
		}

		private function get_by_cueanexo($cueanexo) {
			$this->con = Conexion::conectar();
			$stmt = $this->con->prepare('SELECT * FROM institucion WHERE cueanexo = '.$cueanexo);
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			$result = $result[0];

			$this->set_datos($result);
		}

		private function set_datos($datos) {

			$this->cueanexo = $datos['cueanexo'];
			$this->nro = $datos['nro'];
			$this->nombre = $datos['nombre'];
			$this->telefono = $datos['telefono'];
			$this->codigo_area = $datos['telefono_cod_area'];
			$this->email = $datos['email'];
			$this->email_alt = $datos['email_alt'];
			$this->departamento = $datos['departamento'];
			$this->localidad = $datos['localidad'];
			$this->calle = $datos['calle'];
			$this->nro_calle = $datos['calle_nro'];
			$this->cod_postal = $datos['cod_postal'];
			$this->nombre_direc = $datos['nombre_direc'];
			$this->apellido_direc = $datos['apellido_direc'];
		}

		public static function get_instituciones() {
			$con = Conexion::conectar();
			$stmt = $con->prepare('SELECT * FROM institucion');
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$instituciones = array();
			foreach($result as $institucion) {
				$inst = new Institucion(null);
				$inst->set_datos($institucion);
				$instituciones[] = $inst;
			}
			return $instituciones;
		}

		public function get_cueanexo() {
			return $this->cueanexo;
		}

		public function get_nro() {
			return $this->nro;
		}

		public function get_nombre() {
			return $this->nombre;
		}

		public function get_telefono() {
			return $this->telefono;
		}

		public function get_codigo_area() {
			return $this->codigo_area;
		}

		public function get_enail() {
			return $this->enail;
		}

		public function get_email_alt() {
			return $this->email_alt;
		}

		public function get_departamento() {
			return $this->departamento;
		}

		public function get_localidad() {
			return $this->localidad;
		}

		public function get_direccion() {
			return $this->calle . $this->nro_calle;
		}

		public function get_cod_postal() {
			return $this->cod_postal;
		}

		public function get_director() {
			return $this->nombre_direc . $this->apellido_direc;
		}

	}
?>