<?php
    $conn = mysqli_connect("localhost", "root", "37LmrYOZzCH7", "YONSEIEDU_DB"); // check mariaDB password

    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO TEACHER_TB VALUES('{$name}', '{$password}')";
    $result = mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    location.href="loginpage.php";
</script>
