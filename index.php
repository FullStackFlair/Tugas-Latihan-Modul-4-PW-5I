<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// deklarasikan objek class
$productController = new ProductController;

// tampilkan hasul kembalian dari method getAllProduct menggunakan echo
echo $productController->getAllProduct();