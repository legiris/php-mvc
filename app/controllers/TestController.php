<?php

class TestController extends BaseController
{
    public function defaultAction()
    {
        $this->data['var'] = '5';
        
        //$parsedUrl = 'http://www.domena.cz/controller/parameter2/parameter3';
//        $parsedUrl = $_SERVER['REQUEST_URI'];
//        $parsedUrl = parse_url($parsedUrl);
//        $parsedUrl = trim($parsedUrl['path']);
//        $parsedUrl = ltrim($parsedUrl, '/');  //$parsedUrl = substr($parsedUrl, 1);
//        $url = explode('/', $parsedUrl);
        
        //var_dump($url);
        
        //$router = new RouterController();
        
        //var_dump($_SERVER['REQUEST_URI']);
        
        //$controller = $router->getController($_SERVER['REQUEST_URI']);
        
        //var_dump($controller);
        
        $this->data['title'] = 'TEST';
        //$this->data['url'] = $parsedUrl;
        
        $this->render();
        
        //var_dump($result);
        //var_dump($this->data);
        
        //return $this->data;
        //return 'I was here!';
    }
}