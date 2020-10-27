<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "37LmrYOZzCH7", "YONSEIEDU_DB"); // check mariaDB password

    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM TEACHER_TB WHERE NAME='{$name}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row != NULL) {
        $hash = $row['password'];
        if(password_verify($password, $hash)) {
            $_SESSION['name'] = $name;
            echo "1";
        } else {
            echo "3";
        }
    } else {
        echo "2";
    }
?>
