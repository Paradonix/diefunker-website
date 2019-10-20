<?php

if (isset($_POST['login-submit'])) {

    require '../../dbh.php';

    $name = $conn->real_escape_string($_POST['name']);
    $password = $conn->real_escape_string($_POST['pwd']);

    if (empty($name) || empty($password)) {
        header("location: ../login?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE name=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../login?error=sqlerror");
            exit();
        }
        else {

            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwd']);
                if ($pwdCheck == false) {
                    header("location: ../login?error=wrong");
                    exit();
                }
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userUid'] = $row['name'];

                    header("location: ../login?login=success");
                    exit();
                }
                else {
                    header("location: ../login?error=wrong");
                    exit();
                }
            }
            else {
                header("location: ../login?error=wrong");
                exit();
            }
        }
    }

}
else {
    header("location: ../index.php");
    exit();
}
