<?php

namespace Controller;

class Controller{
    // Variavle Atribut
    var $controllerName;
    var $controllerMethod;

    // Method untuk mengambil semua atribut
    public function getControllerAttribut(){
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod
        ];
    }
}