<?php
    function conn(){

        $db = "test";
        $user = "root";
        $pass = "123456";
        $host = "localhost";

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        return $conn;
    }
?>