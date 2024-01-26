<?php 
    class Controller 
    {
        
        public function __construct()
        {
            $this -> views = new Views();
            $this -> cargarModel();
        }
        
        public function cargarModel()
        {
            $model = get_class($this) . "Model"; /* HomeModel */
            $ruta = "Models/" . $model . ".php"; /* Models/HomeModel.php */
            if (file_exists($ruta)) {
                require_once $ruta;
                $this -> model = new $model();
            }
        } 
    }

?>