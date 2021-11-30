<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

session_reset();
if(!session_id())
{
    session_start();
}

if (!isset($_SESSION['highlights'])) {

    $product1 = new Product(0, "Dell inspiron 15", 200, 10, "product-1.jpg");
    $product2 = new Product(1, "Macbook air", 300, 10, "product-2.jpg");
    $product3 = new Product(2, "Dell xps 13", 250, 10, "product-3.jpg");
    $product4 = new Product(3, "Lenovo IdeaPad 3", 180, 10, "product-4.jpg");
    $product5 = new Product(4, "Hp pavillon", 210, 10, "product-5.jpg");
    $product6 = new Product(5, "Asus L410", 230, 10, "product-6.jpg");



     $highlights = [];

     addProduct($product1, $highlights);
     addProduct($product2, $highlights);
     addProduct($product3, $highlights);

    $allProducts = [];

    addProduct($product1, $allProducts);
    addProduct($product2, $allProducts);
    addProduct($product3, $allProducts);
    addProduct($product4, $allProducts);
    addProduct($product5, $allProducts);
    addProduct($product6, $allProducts);


    $cart = new Cart();

    $_SESSION['highlights'] = $highlights;

    $_SESSION['allProducts'] = $allProducts;

    $_SESSION['cart'] = $cart;


}

function addProduct(Product $product, Array &$highlights)
    {
        $highlights [$product->getId()] = $product;

    }


