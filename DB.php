<?php

$mysqli = new mysqli("localhost", "root", "Lelfh123", "site");
$mysqli->set_charset("utf8");
function gl_products(){
    GLOBAL $mysqli;
    $products = array();
    if ($result = $mysqli->query('SELECT * FROM products')) {
        while($tmp = $result->fetch_assoc()) {
            $products[] = $tmp;
        }
        $result->close();
        return $products;
    }
}