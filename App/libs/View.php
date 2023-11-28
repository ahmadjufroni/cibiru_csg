<?php

class View {

    function __Construct()
    {
        
    }

    public function render($name)
    {
        require 'App/views/' . $name . '.php';
 
 
 
    }
}