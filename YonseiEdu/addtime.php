<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        ?>
        <script type="text/javascript">
            alert("로그인을 해주세요. 선생님 이외에는 사용할 수 없습니다.");
            location.href="loginpage.php";
        </script>
        <?php
    }
    $conn = mysqli_connect("localhost", "root", "37LmrYOZzCH7", "YONSEIEDU_DB"); // check mariaDB password

    $title = $_POST['inputClassName'];
    $teacher = $_POST['inputTeacher'];

    $sql = "SELECT title, teacher FROM CLASS_TB WHERE title='{$title}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if($row != NULL && $row['teacher'] == $teacher) {
        echo '<script>alert("이름이 겹치는 반이 있습니다. 확인해주세요."); location.href="timetable.php";</script>';
    } else {
        $mon = $_POST['mon'] != '00:00:00' ? $_POST['mon'] : NULL;
        $tue = $_POST['tue'] != '00:00:00' ? $_POST['tue'] : NULL;
        $wed = $_POST['wed'] != '00:00:00' ? $_POST['wed'] : NULL;
        $thu = $_POST['thu'] != '00:00:00' ? $_POST['thu'] : NULL;
        $fri = $_POST['fri'] != '00:00:00' ? $_POST['fri'] : NULL;

        $sql = "INSERT INTO CLASS_TB VALUES ('{$title}', '{$teacher}', '{$mon}', '{$tue}', '{$wed}', '{$thu}', '{$fri}')";
        $result = mysqli_query($conn, $sql);
?>
<script type="text/javascript">
    alert("시간표 추가에 성공했습니다.");
    location.href="timetable.php";
</script>
<?php } ?>
