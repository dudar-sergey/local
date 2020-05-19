<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "site");

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
if(isset($_POST['current_id2'])) {
    $current_id = $_POST['current_id2'];
    if ($current_id) {
        $result2 = $mysqli->query('DELETE from cart where id_product="'.$current_id.'" and id_user="'.$_SESSION['id'].'"');
    }
}