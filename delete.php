<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $connection = new mysqli("localhost","root","1234", "myshop");

    $sql = "DELETE FROM clients WHERE id=$id";
    
    $connection->query($sql);
    $connection->close();
    header("Location: /myshop/index.php");
    exit;
}
?>