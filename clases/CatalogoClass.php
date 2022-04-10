<?php
    
    include_once("../utils/conexion.php");

    class CatalogoClass extends Conexion {
        private $id;
        private $tabla;
        private $valor;

        public function __construct(){
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getTabla(){
            return $this->tabla;
        }

        public function setTabla($tabla){
            $this->tabla = $tabla;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function insertCatalogo(){
            $mysqli = $this->conect();      
            $sql = "INSERT INTO tl_catalogo (cat_tabla, cat_valor) values('$this->tabla', '$this->valor')";

            if($mysqli->query($sql) === true) {
                return "registro exitoso";
            } else {
                return "registro fallido";
            }
        }

        public function selectCatalogo() {
            $mysqli = $this->conect();
            $sql = "SELECT * FROM tl_tabla";
            
            $mysqli->real_query($sql);

            $resultado = $mysqli->use_result();

            if (!$resultado) {
                return "no se ha obtenido información";
            }

            $resp = array();

            while ($fila = $resultado->fetch_assoc()) {
                $valor = array($fila['tl_id'], $fila['tl_nombre'], $fila['tl_desc']);
                array_push($resp, $valor);
            }        

            return $resp;
        }

    }


?>