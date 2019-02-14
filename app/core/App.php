<?php
/**
 * Description of App
 *
 * @author Fernando Macedo
 */
class App {
    
    protected $controller = 'home';
    protected $method = 'index';
    protected $params =[];
            
    function __construct() {
        $url = $this->parseUrl();
        
        //verifica e atribui a rota para controller passado na url
        if(file_exists('../app/Controllers/'. $url[0] .'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once '../app/Controllers/'. $this->controller .'.php';
        
        $this->controller = new $this->controller;
        
        //verifica e atribui a rota para action/metodo passado na url
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                 unset($url[1]);
            }
        }
        
        $this->params = $url ? array_values($url) : [];
        
        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }
    
    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
