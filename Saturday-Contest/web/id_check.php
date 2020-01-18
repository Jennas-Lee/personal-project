<?php
    if($_POST['identy'] != NULL){
        $conn = mysqli_connect(
            'localhost',
            'root',
            'root1234',
            'contest'
        );
        $sql = "SELECT * FROM member WHERE id='{$_POST['identy']}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($row >= 1){
            echo "<span class=\"text-danger\">사용 불가능한 아이디입니다.</span>";
        } else {
            echo "<span class=\"text-primary\">사용 가능한 아이디입니다.</span>";
        }
    }
?>
