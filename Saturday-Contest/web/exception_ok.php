<?php
    $conn = mysqli_connect(
        'localhost',
        'root',
        'root1234',
        'contest'
    );

    $identy = $_SESSION['id'];
    $content = $_POST['exception'];

    $sql = "INSERT INTO exception (id, content, date) VALUES ('$identy', '$content', NOW())";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<meta charset="utf-8">
<script type="text/javascript">alert('이의제기가 완료되었습니다. 빠른 시일 내에 답변드리겠습니다.');</script>
<meta http-equiv="refresh" content="0 url=index.php">
