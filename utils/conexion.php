<?php

    require_once("../config/config.php");

    class Conexion{
        public static function conect(){
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            return $mysqli;
        }
    }

?>