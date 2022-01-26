<?php 
require __DIR__ . '../database.php';

$json = json_encode($FAQ);

header('Content-Type:application/json');

echo $json ;

?>