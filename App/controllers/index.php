<?php

class index extends Controller
{

    public function __Construct()
    {
        parent::__Construct();
    }

    public function index()
    {
        $this->view->render('contents/head');
    }
}