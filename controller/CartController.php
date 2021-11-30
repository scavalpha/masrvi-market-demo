<?php

require_once "../model/FakeDb.php";

$action  = $_GET['action'];
$id = $_GET['id'];

if(isset($_SESSION['cart'])) {

    $product = $_SESSION['allProducts'][$id];

    if($action === "add") {
        $_SESSION['cart']->addProduct($product, 1);
    }
    else if ($action === "remove"){
        $_SESSION['cart']->removeProduct($product);
    }

    return $_SESSION['allProducts'][$id]->getTitle();

}
