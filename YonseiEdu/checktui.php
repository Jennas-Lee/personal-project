<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        ?>
        <script type="text/javascript">
            alert("로그인을 해주세요. 선생님 이외에는 사용할 수 없습니다.");
            location.href="loginpage.php";
        </script>
        <?php
    } else if(!isset($_GET['num'])) {
        ?>
        <script type="text/javascript">
            alert("학생이 선택되지 않았습니다. 다시 확인해주세요.");
            location.href="member.php?page=1&grade=0";
        </script>
        <?php
    } else {
        $num = $_GET['num'];
        $date = $_POST['date'];
        $method = $_POST['met'];

        $conn = mysqli_connect("localhost", "root", "37LmrYOZzCH7", "YONSEIEDU_DB"); // check mariaDB password
        $sql = "INSERT INTO TUITION_TB VALUES ('{$num}', '{$date}', {$method})";
        $result = mysqli_query($conn, $sql);
    }
?>
<script type="text/javascript">
    alert("교육비 납부확인이 완료되었습니다.");
    location.href="checktuition.php?num=<?php echo $num; ?>";
</script>
