<?php

    $dBServername = "***********";
    $dBUsername = "**************";
    $dBPassword = "***************";
    $dBName = "************";

    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
    $conn->set_charset("utf8");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
