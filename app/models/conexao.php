<?php
$host = "localhost";
$user = "root";
$senha = "root";
$db = "aurora_cafe";

$conn = new mysqli($host, $user, $senha, $db);

if($conn->connect_error){
    die ("" . $conn->connect_error);
}
?>