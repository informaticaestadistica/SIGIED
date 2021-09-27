<?php
	require 'Institucion.php';
	
	require_once 'Conexion.php';

	class Reclamo {
		
		public $institucion;
		public $cueanexo;
		public $titulo;
		public $breve_descripcion;
		public $origen;
		public $perdidas;
		public $categoria;
		public $elemento;
		public $sub_elemento;
		public $descripcion;
		public $importancia;
		public $prioridad;
		public $matricula;
		public $fecha_inicio;
		public $fecha_cierre;
		public $id;

		function __construct($datos) {
			
			$this->cueanexo = $datos['esc_ofic'];
			$this->institucion = new Institucion($this->cueanexo);
			$this->categoria = $datos['categoria'];
			$this->titulo = $datos['titulo'];
			$this->breve_descripcion = $datos['breve_descipcion'];
			$this->origen = $datos['origen_id'];
			$this->origen = $datos['orige_id'];
			$this->perdidas = $datos['perdidas_id'];
			//$this->elemento = $datos['elemento'];
			//$this->sub_elemento = $datos['sub_elemento'];
			//$this->descripcion = $datos['descripcion'];
			//$this->importancia = $datos['importancia'];
			$this->prioridad = $datos['prioridad_id'];
			$this->matricula = $datos['matricula_afectada'];
			$this->fecha_inicio = $datos['fecha_inicio'];
			$this->fecha_cierre = $datos['fecha_cierre'];
			$this->codigo = $datos['codigo'];
		}

		public function guardar_reclamo() {

			$con = Conexion::conectar();
			//Primer null id, Segundo Fecha de Cierre.
			$sql = "INSERT INTO reclamo VALUES (NULL, ':fecha' , ':cueanexo', :usuario , :falla , :prioridad , :estado , :origen , :perdida , ':matricula' , NULL, ':codigo')";
			$stmt = $con->prepare($sql);
			
			$stmt->bindParam(':cueanexo', $this->cueanexo , PDO::PARAM_STR);
			$stmt->bindParam(':titulo', $this->titulo , PDO::PARAM_STR);
			$stmt->bindParam(':breve_descripcion', $this->breve_descripcion , PDO::PARAM_STR);
			$stmt->bindParam(':origen', $this->origen , PDO::PARAM_STR);
			$stmt->bindParam(':perdidas', $this->perdidas , PDO::PARAM_STR);
			$stmt->bindParam(':categoria', $this->categoria , PDO::PARAM_STR);
			$stmt->bindParam(':elemento', $this->elemento , PDO::PARAM_STR);
			$stmt->bindParam(':sub_elemento', $this->sub_elemento , PDO::PARAM_STR);
			$stmt->bindParam(':descripcion', $this->descripcion , PDO::PARAM_STR);
			$stmt->bindParam(':importancia', $this->importancia , PDO::PARAM_STR);
			$stmt->bindParam(':prioridad', $this->prioridad , PDO::PARAM_STR);
			$stmt->bindParam(':matricula', $this->matricula , PDO::PARAM_STR);
			$stmt->bindParam(':fecha', $this->fecha_inicio , PDO::PARAM_STR);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}

		private function set_id($id) {
			$this->id = $id;
		}

		public static function get_reclamos(){
			$con = Conexion::conectar();

			$sql = "SELECT * FROM reclamo";
			$stmt = $con->prepare($sql);

			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$reclamos = array();
			foreach($result as $reclamo) {
				$reclamo_nuevo = new Reclamo($reclamo);
				$reclamo_nuevo->set_id($reclamo['id']);
				$reclamos[] = $reclamo_nuevo;
			}
			return $reclamos;
		}

		public function get_institucion() {
			$institucion = new Institucion($this->cueanexo);
			return $institucion;

		}

		public function get_titulo() {
			return $this->titulo;
		}

		public function get_breve_descripcion() {
			return $this->breve_descripcion;
		}

		public function get_origen() {
			return $this->origen;
		}

		public function get_perdidas() {
			return $this->perdidas;
		}

		public function get_categoria() {
			return $this->categoria;
		}

		public function get_elemento() {
			return $this->elemento;
		}

		public function get_sub_elemento() {
			return $this->sub_elemento;
		}

		public function get_descripcion() {
			return $this->descripcion;
		}

		public function get_importancia() {
			return $this->importancia;
		}

		public function get_prioridad() {
			switch ($this->prioridad) {
				case 1:
					$prioridad = 'Baja';
					break;
				case 2:
					$prioridad = 'Media';
					break;
				case 3:
					$prioridad = 'Alta';
					break;
				default:
					$prioridad  = 'No definida';
					break;
			}
			return $prioridad;
		}

		public function get_matricula() {
			return $this->matricula;
		}

		public function get_fecha_inicio() {
			return $this->fecha_inicio;
		}

		public function get_fecha_cierre() {
			return $this->fecha_cierre;
		}

		public function get_codigo() {
			return $this->codigo;
		}

		public function get_id(){
			return $this->id;
		}
	}
?>