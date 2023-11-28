<?php

class Bootstrap {

    function __Construct()
    {
            
        // benteng pertahananku
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);


        if (empty($url[0])) {
            require 'App/controllers/index.php';
            $controller = new index();
            $controller->index();
            return false;
        }


        $file = 'App/controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        }else{
            $this->blank();
        }
        
        @$controller = new $url[0];
        $controller->loadModel($url[0]);

        // memanggil Method
        if( isset($url[2])){
            if (method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                $this->blank();
            }
        }
        else {
            if( isset($url[1])){
                if (method_exists($controller, $url[1])){

                    $controller->{$url[1]}();
                }else{
                    $this->blank();
                }
            }else{
                
                 $controller->index();
            }
        }

    }

    function blank()
    {
        require 'App/controllers/blank.php';
        $controller = new blank();
        $controller->index();
        return false;
    }
    
}