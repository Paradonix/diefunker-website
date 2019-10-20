<?php

if (isset($_POST['addNew-submit'])) {

    $text = $_POST['addNewText'];
    $img = $_POST['userImg'];
    $align = $_POST['align'];

    require '../../dbh.php';

    $sql = "INSERT INTO `quotes` (`id`, `blockquote`, `img`) VALUES (NULL, '<div class=\"row\">\r\n    <blockquote class=\"quote $align\"><p>$text</p></blockquote>', '<img class=\"img-$align\" src=\"../images/$img\">\r\n</div>');";

    if ($conn->query($sql) === TRUE) {
        header("location: ../member.admin");
    }
    else {
        echo "Error inserting record: " . $conn->error;
    }

    $conn->close();

}
else {
    header("location: ../../index");
    exit();
}
