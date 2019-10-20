<?php

    $editData = $_POST['data'];

    require '../dbh.php';

    $sql = "UPDATE edittable SET raidsText='$editData' WHERE id=1";

    if ($conn->query($sql) === TRUE) {
    }
    else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();

    echo $editData;

?>
