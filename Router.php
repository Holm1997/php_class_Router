<?php



class Router
{


    protected $routes = [];
    protected $uri;
    protected $method;

    public function __construct()
    {
        $this->uri = REQUEST;
        $this->method = METHOD;
    }

    public function match()
    {
        $matches = false;
        
        foreach ($this->routes as $route){
            if($route['uri'] == $this->uri && $route['method'] == strtoupper($this->method)) {
                echo 'link to ' . $route['controller'];
                $matches = true;
                break;
            }

        } 
        if (!$matches){
            echo 'FAIL - route not found';
        }
    }

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }
}