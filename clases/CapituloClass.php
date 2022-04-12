<?php
    
    include_once("../utils/conexion.php");

    class CapituloClass extends Conexion {
        private $dataInf;
        private $titulo;
        private $programa;
        private $temporada;
        private $tema;
        private $participantes;
        private $jugado;
        private $fechaJugado;

        public function __construct(){
        }

        public function setDataInf($dataInf){
            $this->dataInf;
        }

        public function getDataInf(){
            $this->dataInf;
        }

        public function selectCapitulo() {
            $mysqli = $this->conect();
            
            $sql = "SELECT * FROM tl_capitulos";
            
            $mysqli->real_query($sql);

            $resultado = $mysqli->use_result();

            if (!$resultado) {
                return "no se ha obtenido información";
            }

            $resp = array();

            while ($fila = $resultado->fetch_assoc()) {
                $valor = array($fila['cap_data_inf'], $fila['cap_titulo'], $fila['cap_programa'], $fila['cap_temporada'], $fila['cap_tema'], $fila['cap_participantes']);
                array_push($resp, $valor);
            }        

            return $resp;
        }

        public function getCapituloDia(){
            $mysqli = $this->conect();
            date_default_timezone_set('America/Bogota');
            $todaysDate = date("Y-m-d");
            $consulta = sprintf("SELECT * FROM tl_capitulos WHERE cap_fecha_jugado='%s'", $mysqli->real_escape_string($todaysDate));

            $resultado = $mysqli->query($consulta);

            if (!$resultado) {
                return "no se ha obtenido información";
            }

            $resp = array();

            while ($fila = $resultado->fetch_assoc()) {
                $valor = array($fila['cap_data_inf'], $fila['cap_titulo'], $fila['cap_programa'], $fila['cap_temporada'], $fila['cap_tema'], $fila['cap_participantes']);
                array_push($resp, $valor);
            }      
            
            return $resp; 
        }

        public function validaCapitulo($cap){
            $mysqli = $this->conect();
            date_default_timezone_set('America/Bogota');
            $todaysDate = date("Y-m-d");
            $consulta = sprintf("SELECT * FROM tl_capitulos WHERE cap_fecha_jugado='%s'", $mysqli->real_escape_string($todaysDate));

            $resultado = $mysqli->query($consulta);

            if (!$resultado) {
                return "no se ha obtenido información";
            }

            $resp = array();

            while ($fila = $resultado->fetch_assoc()) {
                $valor = array($fila['cap_data_inf'], $fila['cap_titulo'], $fila['cap_programa'], $fila['cap_temporada'], $fila['cap_tema'], $fila['cap_participantes']);
                array_push($resp, $valor);
            }       
            
            $sql = "SELECT * FROM tl_capitulos WHERE cap_data_inf = '$cap'";

            $mysqli->real_query($sql);

            $resultado2 = $mysqli->use_result();

            if (!$resultado2) {
                return "no se ha obtenido información";
            }

            $resp2 = array();

            while ($fila = $resultado2->fetch_assoc()) {
                $valor = array($fila['cap_data_inf'], $fila['cap_titulo'], $fila['cap_programa'], $fila['cap_temporada'], $fila['cap_tema'], $fila['cap_participantes']);
                array_push($resp2, $valor);
            }

            $validate = [];

            if($resp[0][0] === $resp2[0][0]){
                array_push($validate, "OK");
            } else {
                array_push($validate, "NO");
            }

            if($resp[0][2] === $resp2[0][2]){
                array_push($validate, "OK");
            } else {
                array_push($validate, "NO");
            }

            if($resp[0][3] > $resp2[0][3]){
                array_push($validate, ">");
            } else if($resp[0][3] < $resp2[0][3]){
                array_push($validate, "<");
            } else if($resp[0][3] == $resp2[0][3]){
                array_push($validate, "OK");
            }

            if($resp[0][4] === $resp2[0][4]){
                array_push($validate, "OK");
            } else {
                array_push($validate, "NO");
            }

            if($resp[0][5] === $resp2[0][5]){
                array_push($validate, "OK");
            } else {
                array_push($validate, "NO");
            }

            return $validate;

        }

    }

?>