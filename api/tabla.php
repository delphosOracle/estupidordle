 <?php

    require("../clases/TablaClass.php");

    header("Content-Type: application/json");    

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(isset($_GET['id'])){
            $tabla = new TablaClass();
            $resp["msg"] = $tabla->selectTabla();
            echo json_encode($resp);
        } else {
            echo "no hay data";
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = json_decode(file_get_contents('php://input'), true);

        $tabla = new TablaClass();
        $tabla->setNombre($_POST['nombre']);
        $tabla->setDesc($_POST['desc']);
        
        $resp["msg"] = "data: " . json_encode($tabla->insertTabla());
        echo json_encode($resp);

    } else if($_SERVER['REQUEST_METHOD'] == 'PUT') {
        echo "NO es metodo get";
        

    } else if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        echo "NO es metodo get";


    }

?>