<?php
    
    include_once("../utils/conexion.php");

    class TablaClass extends Conexion {
        private $id;
        private $nombre;
        private $desc;

        public function __construct(){
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getDesc(){
            return $this->desc;
        }

        public function setDesc($desc){
            $this->desc = $desc;
        }

        public function insertTabla(){
            $mysqli = $this->conect();      
            $sql = "INSERT INTO tl_tabla (tl_nombre, tl_desc) values('$this->nombre', '$this->desc')";

            if($mysqli->query($sql) === true) {
                return "registro exitoso";
            } else {
                return "registro fallido";
            }
        }

        public function selectTabla() {
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