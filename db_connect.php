<?php

    $connect = mysqli_connect("localhost", "fourest", "123456", "ninja_pizza");

    if(!$connect) {
        echo "Connection error: " . mysqli_connect_error();
    }

?>