<?php
class Usuario {
    var $id ;
    var $usr;
    var $rol; 

    function __construct($usr){
       $this->usr = $usr;
       $stmt = Conexion::conectar()->prepare("SELECT * FROM `usuario` WHERE `usr` = $usr");

        $stmt -> execute();

        $usuario = $stmt -> fetchAll();

        $stmt = null;

        foreach ($usuario as $key => $value) {
            $this->id = $value['id'];
            $this->rol = $value['rol_id'];
        }
    }

    function get_categorias(){
        /*===================================
        =            CATEGORIAS            =
        ===================================*/

        $stmt = Conexion::conectar()->prepare("SELECT * FROM `categoria`");

        $stmt -> execute();

        $categoria = $stmt -> fetchAll();

        $stmt = null;

        $categoria_descp = "<select name='id_categoria' class='form-control' id='form-categorias'>";

        foreach ($categoria as $key => $value) {
            $categoria_descp .= "<option id=".$value['id']."value=".$value['descripcion'].">".$value['descripcion']."</option>";
        }

        $categoria_descp .= "</select>";
        return $categoria_descp;
    }

    function get_fecha(){
        $fecha = date('d-m-Y');
        return $fecha;
    }

    function get_hora(){
        $hora = date("H:i:s"); 
        return $hora;
    }
    
    function get_direccion(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `institucion` WHERE `cueanexo` = $this->usr");

        $stmt -> execute();

        $institucion = $stmt -> fetchAll();

        $stmt = null;
        $direccion = "";
        foreach ($institucion as $key => $value) {
            $direccion = $value['calle']." ".$value['calle_nro'] ;
        }
        return $direccion;
    }

    function get_localidad(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `institucion` WHERE `cueanexo` = $this->usr");

        $stmt -> execute();

        $institucion = $stmt -> fetchAll();

        $stmt = null;
        $localidad = "";
        foreach ($institucion as $key => $value) {
            $localidad = $value['localidad'];
        }
        return $localidad;

    }

    function get_telefono(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `institucion` WHERE `cueanexo` = $this->usr");

        $stmt -> execute();

        $institucion = $stmt -> fetchAll();

        $stmt = null;
        $telefono = "";
        foreach ($institucion as $key => $value) {
            $telefono = $value['telefono_cod_area'].$value['telefono'];
        }
        return $telefono;

    }

    function get_origenes(){

        $origen_descp = "<select name='id_origen' class='form-control' id='form-origenes' >";

        $origen_descp .= "<option value='Interno'>Interno</option>";
        $origen_descp .= "<option value='Externo'>Externo</option>";
        
        $origen_descp .= "</select>";

        //$descp =  $this-> get_descripcion_origen('Interno');
        //$origen_descp .= $descp;
        return $origen_descp;
    }

    function get_descripcion_origen($origen){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `origen`WHERE `origen` like '$origen'");

        $stmt -> execute();

        $origen = $stmt -> fetchAll();

        $stmt = null;

        $descripcion = "";

        foreach ($origen as $key => $value) {
            $descripcion .= "<input type='radio' name='descripcion_origen' values='".$value['descripcion']."'>".$value['descripcion']."<br> ";
        }
        return $descripcion;
    }

    function get_perdidas(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `perdida`");

        $stmt -> execute();

        $perdida = $stmt -> fetchAll();

        $stmt = null;

        //$perdida_descp = "<select name='id' class='form-control' id='form-perdidas'>";

        foreach ($perdida as $key => $value) {
            $perdida_descp .= "<input type='radio' name='descripcion_perdida' values='".$value['id']."'>".$value['descripcion']."<br> ";
        }

        $perdida_descp .= "</select>";
        return $perdida_descp;
    }

    function get_escuelas_oficinas(){

        if($this->rol == 1){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM `institucion`");

            $stmt -> execute();

            $escuelas_oficinas = $stmt -> fetchAll();

            $stmt = null;

            $escuelas_oficinas_descp = "<select name='id_esc_ofic' class='form-control' id='form-escuelas'>";

            foreach ($escuelas_oficinas as $key => $value) {
                $escuelas_oficinas_descp .= "<option id=".$value['cueanexo']."value=".$value['cueanexo'].">".$value['nro']."</option>";
            }
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM `institucion` WHERE `nro` LIKE '$this->usr'");

            $stmt -> execute();

            $escuelas_oficinas = $stmt -> fetchAll();

            $stmt = null;

            $escuelas_oficinas_descp = "<select name='id' class='form-control' id='form-escuelas'>";

            foreach ($escuelas_oficinas as $key => $value) {
                $escuelas_oficinas_descp .= "<option id=".$value['cueanexo']."value=".$value['cueanexo'].">".$value['nro']."</option>";
            }

        }
        

        $escuelas_oficinas_descp .= "</select>";
        return $escuelas_oficinas_descp;
    }   

    

}

?>