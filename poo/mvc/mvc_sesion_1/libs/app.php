<?php
require_once('controller.php');
class App{
    
    private Controller $controlador;
    public function __construct(string $controllerStr){
       
            $this->cargarControlador($controllerStr);

    }

    public function cargarControlador(string $controllerStr){
        $file = CONTROLLERS_ROUTE.$controllerStr.'.php';
        $className = ucfirst($controllerStr);
        if(file_exists($file)){
            require_once($file);
            if(class_exists($className)){
               $this->controlador=new $className;
            }
        }else{
            $this->controlador=new Controller;
        }
    }
}