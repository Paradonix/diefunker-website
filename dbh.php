<?php

    $dBServername = "localhost";
    $dBUsername = "diefunke_root";
    $dBPassword = "gE00eeivHz5zczWIcj";
    $dBName = "diefunke_system";

    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
    $conn->set_charset("utf8");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
