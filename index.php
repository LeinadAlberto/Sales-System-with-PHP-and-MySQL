<?php
    $ruta = !empty($_GET['url']) ? $_GET['url'] : "Home/index";
    $array = explode("/", $ruta); /* Retorna un array */
    /* 
        Indice 0 => Controlador
        Indice 1 => Método
        Indice 2 => Parametros 
    */
    $controller = $array[0];
    $metodo = "index";
    $parametro = "";

    if (!empty($array[1])) {
        if (!empty($array[1] != "")) {
            $metodo = $array[1];
        }
    }

    if (!empty($array[2])) {
        if (!empty($array[2] != "")) {
            for($i=2; $i<count($array); $i++) {
                $parametro .= $array[$i] . ",";
            }
            $parametro = trim($parametro, ",");
        }
    }

    $dirControllers = "Controllers/" . $controller . ".php";

    if(file_exists($dirControllers)) {
        require_once($dirControllers);
        $controller = new $controller();
        if (method_exists($controller, $metodo)) {
            $controller->$metodo($parametro);
        } else {
            echo "No existe el método";
        }
    } else {
        echo "No existe el controlador";
    }
?>