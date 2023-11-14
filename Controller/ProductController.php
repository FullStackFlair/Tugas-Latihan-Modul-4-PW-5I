<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Collator;
use Traits\ResponseFormatter;

// disimulasikan ini adalah class controller product
class ProductController extends Controller
{
    // gunakan trait yang sudah dibuat
    use ResponseFormatter;

    // magic method, method ini akan diakses pada saat pembuatan object.
    public function __construct()
    {
        // set atribut controllerName pada parent class controller
        $this->controllerName = "Get All Product";

        // set atribut controllerMethod pada parent class controller
        $this->controllerMethod = "GET";
    }

    // disimulasikan ini method untuk get dara product
    public function getAllProduct()
    {
        // array dummy data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_atribut" => $this->getControllerAttribut(), //ambil method getControllerAtribut dari parent class
            "Product" => $dummyData
        ];

        // gunakan method dari trait yang sudah dibuat
        return $this->ResponseFormatter(200, "Success", $response);
    }
}