<?php

    require("../clases/CapituloClass.php");

    header("Content-Type: application/json");    

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(isset($_GET['id'])){
            $capitulo = new CapituloClass();
            $resp["msg"] = $capitulo->selectCapitulo();
            echo json_encode($resp);
        } else {
            $capitulo = new CapituloClass();
            $resp["msg"] = $capitulo->selectCapitulo();
            echo json_encode($resp);
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = json_decode(file_get_contents('php://input'), true);

        $capitulo = new CapituloClass();

        //echo $_POST['cap'];
                
        $resp["msg"] = $capitulo->validaCapitulo($_POST['cap']);
        echo json_encode($resp);

    }

?>