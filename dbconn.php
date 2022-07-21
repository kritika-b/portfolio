<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "getInTouch";
    $conn= mysqli_connect($servername,$username,$password,$database);

    if(!$conn) {
        echo "Connection failed...!";
    }
?>