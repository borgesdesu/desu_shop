<?php

include "Model/Model.php";
include "Model/Customer.php";
include "Model/Product.php";
include "Model/Contact.php";

$customer = new Customer([
    'name'      => "Lucas",
    'birthdate' => "0000-00-00",
    'status'    => true
]);

echo "<pre>";
// var_dump($customer->get());
echo "<br />";
var_dump($customer->set([
    'name' => 'Lucas Borges'
]));

$product = new Product([
    'name'        => "Fone de Ouvido",
    'description' => "Bluetooth",
]);

var_dump($product->get());
echo "<br />";

$contact = new Contact([
    'type' => "email",
    'data' => "lucas99spfc@gmail.com",
]);

var_dump($contact->get());
echo "<br />";


echo "</pre>";