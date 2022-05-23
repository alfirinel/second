<?php

namespace app;

class page
{
    public $view = 'index';

    public function __construct(string $view = null)
    {
        if(isset($view)){
            $this->view = $view;
        }
    }

    public function process(string $page)
    {
        include_once 'views'. DIRECTORY_SEPARATOR. $this->view . '.php';
    }
}

