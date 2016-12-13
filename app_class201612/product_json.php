<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'proj45');


$mysqli->query("SET NAMES utf8");


$result = $mysqli->query("SELECT * FROM products LIMIT 0, 5");
$data = array();

while($row=$result->fetch_assoc()){
    $data[] = $row;
}

header('Access-Control-Allow-Origin: *');

echo json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

