<?php

    session_start();

    $connect = new mysqli('localhost', 'root', 'root', 'mameemoodang');

    if ($connect->connect_error) {
        echo "connect failed" . $connect->connect_error;
    } else {
        // echo "connect successed";
    }

?>