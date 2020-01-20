<?php
    $conn = mysqli_connect(
        'localhost',
        'root',
        'root1234',
        'contest'
    );

    $id = $_SESSION['id'];
    $con1 = $_POST['content1'];
    $con2 = $_POST['content2'];
    $con3 = $_POST['content3'];
    $con4 = $_POST['content4'];
    $con5 = $_POST['content5'];
    $con6 = $_POST['content6'];
    $con7 = $_POST['content7'];

    $sql = "INSERT INTO application (id, content1, content2, content3, content4, content5, content6, content7) VALUES ('$id', '$con1', '$con2', '$con3','$con4', '$con5', '$con6', '$con7')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<meta charset="utf-8">
<script type="text/javascript">alert('관리자 신청이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=index.php">
