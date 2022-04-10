<?php

    require("../clases/CatalogoClass.php");

    header("Content-Type: application/json");    

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(isset($_GET['id'])){
            $catalogo = new CatalogoClass();
            $resp["msg"] = $catalogo->selectTabla();
            echo json_encode($resp);
        } else {
            echo "no hay data";
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = json_decode(file_get_contents('php://input'), true);

        $catalogo = new CatalogoClass();
        $catalogo->setTabla($_POST['tabla']);
        $catalogo->setValor($_POST['valor']);
        
        $resp["msg"] = "data: " . json_encode($catalogo->insertCatalogo());
        echo json_encode($resp);

    }

?>