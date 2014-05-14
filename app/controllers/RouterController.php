<?php

class RouterController extends BaseController
{
    protected $controller;

    /**
     * return controller name
     * @param string $url
     * @return string
     */
//    public function getController($url)
//    {
//        $this->controller = $this->parseUrl($url);
//        return ucwords($this->controller[3]) . 'Controller';
//    }

    /**
     * getting a controller from url
     * @param string $url
     */
    public function getControllerName($url)
    {
        $data = $this->getParameters($url);
        $controller = ucwords($data[0]);
        $controller = preg_replace('/-(.)/e', "ucwords('$1')", $controller);
        
        return $controller . 'Controller';
    }
    
    /**
     * parsing url into a string
     * @param string $url
     * @return string
     */
    public function parseUrl($url)
    {
        $parsedUrl = parse_url($url);
        $parsedUrl = trim($parsedUrl['path']);
        //$parsedUrl = ltrim($parsedUrl, '/');  //$parsedUrl = substr($parsedUrl, 1);
        $parsedUrl = preg_replace('/.*web\//', '', $parsedUrl);
        $parsedUrl = preg_replace('/\/$/', '', $parsedUrl);
        
        return $parsedUrl;
    }
    
    /**
     * parsing url parameters into an array
     * @param string $url
     * @return array
     */
    public function getParameters($url)
    {
        $parameters = $this->parseUrl($url);
        return explode('/', $parameters);
    }

}