<?php
    $dsn = 'mysql:host=localhost:8889;dbname=admin';
    $username = 'admin';
    $password = 'admin1234';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>