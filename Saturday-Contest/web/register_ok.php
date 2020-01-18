<?php
    $conn = mysqli_connect(
        'localhost',
        'root',
        'root1234',
        'contest'
    );

    $identy = $_POST['identy'];
    $name = $_POST['name'];
    $passwd = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $year = $_POST['year'];
    $email = $_POST['email'];

    $idch = "SELECT * FROM member WHERE id='$identy'";
    $result = mysqli_query($conn, $idch);
    $row = mysqli_fetch_array($result);
    if($row >= 1){
        echo "<script>alert('사용할 수 없는 아이디입니다. 다시 확인해주세요.'); history.back()</script>";
    } else {
        $sql = "INSERT INTO member (id, name, year, pw, email, rating, tier) VALUES('".$identy."', '".$name."', '".$year."', '".$passwd."', '".$email."', '0', 'Unranked')";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
?>
    <meta charset="utf-8">
    <script type="text/javascript">alert('회원가입이 완료되었습니다.')</script>
    <meta http-equiv="refresh" content="0 url=login.php">
<?php } ?>
