<?php

class BaseController
{
    protected $data = [];

    protected $view = 'test';
    
    protected $header = [
        'title' => '',
        'keywords' => '',
        'description' => '',
    ];
    
    
    function handleParams($parameters)
    {
        
    }
    
    public function render()
    {
        if ($this->view) {
            extract($this->data);
            require_once '/../app/views/' . $this->view . '.phtml';
        }
    }
    
    public function redirect($url)
    {
        header('Location: /' . $url);
        header('Connection: close');
        exit;
    }
}