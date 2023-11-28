<?php


class Controller {

    function __Construct()
    {
        $this->view = new View();
    }

    public function loadModel($name) {

        $path = 'App/models/'.$name.'_Model.php';

        if (file_exists($path)) {
            require 'App/models/'.$name.'_Model.php';

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
        
    }
}