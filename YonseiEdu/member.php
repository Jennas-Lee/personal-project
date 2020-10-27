<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "37LmrYOZzCH7", "YONSEIEDU_DB"); // check mariaDB password
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CDN -->
    <script src="https://kit.fontawesome.com/7cc77c19eb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery.tablesorter.js" type="text/javascript"></script> <!-- Should check file directory -->

    <style>
        * {
            font-family: 'Noto Sans KR', sans-serif;
        }
    </style>
    <title>연세에듀수학</title>
</head>

<body>
    <?php
        if(!isset($_SESSION['name'])) {
            ?>
            <script type="text/javascript">
                alert("로그인을 해주세요. 선생님 이외에는 사용할 수 없습니다.");
                location.href="loginpage.php";
            </script>
            <?php
        } else {
            ?>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="index.php" class="navbar-brand">연세에듀수학 관리</a> <!-- Should change file name to php -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controles="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="member.php?page=1&grade=0" class="nav-link">원생관리 <i class="fas fa-users"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="attendance.html" class="nav-link">출결관리 <i class="fas fa-clipboard-check"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="lately.html" class="nav-link">최근출결 <i class="fas fa-user-check"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="smspage.php" class="nav-link">단체문자 <i class="fas fa-sms"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="tuition.php?page=1&grade=0" class="nav-link">교육비관리 <i class="fas fa-money-check-alt"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="timetable.php" class="nav-link">시간표관리 <i class="fas fa-clock"></i></a> <!-- Should change file name to php -->
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">로그아웃 <i class="fas fa-sign-out-alt"></i></a> <!-- Should change file name to php -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="name" placeholder="이름" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="search();">원생검색</button>
                </form>
            </div>
        </nav>
    </header>
    <main role="main">
        <div class="container text-center h1 mt-3 mb-3">
            원생관리
        </div>
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" id="grade0" href="member.php?page=1&grade=0">전체</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="grade1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">초등학교</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="member.php?grade=1&g=1">초1</a>
                        <a class="dropdown-item" href="member.php?grade=1&g=2">초2</a>
                        <a class="dropdown-item" href="member.php?grade=1&g=3">초3</a>
                        <a class="dropdown-item" href="member.php?grade=1&g=4">초4</a>
                        <a class="dropdown-item" href="member.php?grade=1&g=5">초5</a>
                        <a class="dropdown-item" href="member.php?grade=1&g=6">초6</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="grade2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">중학교</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="member.php?grade=2&g=1">중1</a>
                        <a class="dropdown-item" href="member.php?grade=2&g=2">중2</a>
                        <a class="dropdown-item" href="member.php?grade=2&g=3">중3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="grade3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">고등학교</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="member.php?grade=3&g=1">고1</a>
                        <a class="dropdown-item" href="member.php?grade=3&g=2">고2</a>
                        <a class="dropdown-item" href="member.php?grade=3&g=3">고3</a>
                    </div>
                </li>
            </ul>
            <table id="memberTable" class="table table-striped text-center tablesorter mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">반</th>
                        <th scope="col">이름</th>
                        <th scope="col">전화번호</th>
                        <th scope="col">부모님 전화번호</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $grade = (isset($_GET["grade"]) && $_GET["grade"]) ? $_GET["grade"] : 0;
                        echo '<script>
                            $("#grade'.$grade.'").addClass("active");
                        </script>';
                        if($grade == 0) {

                            $sql = "SELECT * FROM STUDENT_TB";
                            $result = mysqli_query($conn, $sql);
                            $row_num = mysqli_num_rows($result);

                            $page = (isset($_GET["page"]) && $_GET["page"]) ? $_GET["page"] : 1;
                            $list = 10;
                            $block_ct = 5;

                            $block_num = ceil($page / $block_ct);
                            $block_start = (($block_num - 1) * $block_ct) + 1;
                            $block_end = $block_start + $block_ct - 1;

                            $total_page = ceil($row_num / $list);
                            if($block_end > $total_page) $block_end = $total_page;
                            $total_block = ceil($total_page / $block_ct);
                            $start_num = ($page - 1) * $list;

                            $sql = "SELECT * FROM STUDENT_TB ORDER BY name ASC LIMIT {$start_num}, {$list}";
                            $result = mysqli_query($conn, $sql);

                            $i=1;
                            while($row = mysqli_fetch_array($result)) {
                                $stunum = "010-".substr($row['stunum'], 3, 4)."-".substr($row['stunum'], 7, 4);
                                if($row['parnum'] == NULL) $parnum = "없음";
                                else $parnum = "010-".substr($row['parnum'], 3, 4)."-".substr($row['parnum'], 7, 4);

                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$row['class'].'</td>
                                    <td><a href="memberinfo.php?num='.$row['stunum'].'">'.$row['name'].'</a></td>
                                    <td>'.$stunum.'</td>
                                    <td>'.$parnum.'</td>
                                </tr>';
                                $i+=1;
                            }
                        } else {
                            $g = $_GET['g'];
                            if($grade == 1) {
                                $school = "초";
                            } else if($grade == 2) {
                                $school = "중";
                            } else {
                                $school = "고";
                            }
                            $class = $school.$g."%";
                            $sql = "SELECT * FROM STUDENT_TB WHERE class LIKE '{$class}' ORDER BY name ASC";
                            $result = mysqli_query($conn, $sql);

                            $i=1;
                            while($row = mysqli_fetch_array($result)) {
                                $stunum = "010-".substr($row['stunum'], 3, 4)."-".substr($row['stunum'], 7, 4);
                                if($row['parnum'] == NULL) $parnum = "없음";
                                else $parnum = "010-".substr($row['parnum'], 3, 4)."-".substr($row['parnum'], 7, 4);

                                echo '<tr>
                                    <th scope="row">'.$i.'</th>
                                    <td>'.$row['class'].'</td>
                                    <td><a href="#">'.$row['name'].'</a></td>
                                    <td>'.$stunum.'</td>
                                    <td>'.$parnum.'</td>
                                </tr>';
                                $i+=1;
                            }
                        }
                    ?>
                </tbody>
            </table>
            <a href="addmember.html" class="btn btn-primary btn-sm">원생추가</a>
        </div>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                        if($grade == 0) {
                            if($page == 1) {
                                ?>
                                    <li class="page-item disabled">
                                        <span class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </span>
                                    </li>
                                <?php
                            } else {
                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="member.php?page=<?php echo $page - 1; echo "&grade=".$grade ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php
                            }

                            for($i = $block_start; $i <= $block_end; $i++) {
                                if($page == $i) {
                                    echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="member.php?page='.$i.'grade='.$grade.'">'.$i.'</a></li>';
                                }
                            }

                            if($page % 5 == 1) {
                                $i = $page;
                            } else {

                            }
                        ?>
                        <?php
                            if($page == ceil($row_num/10)) {
                                ?>
                                    <li class="page-item disabled">
                                        <span class="page-link" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </span>
                                    </li>
                                <?php
                            } else {
                                ?>
                                    <li class="page-item">
                                        <a class="page-link" href="member.php?page=<?php echo $page + 1; echo "&grade=".$grade ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </main>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#memberTable").tablesorter();
            });

            function search(){
                var value=$('input[name=name]').val();

                if(value!=""){
                    location.href="findmember.php?name="+value;
                }
            }
        </script>
    <?php
            }
        }
    ?>
</body>

</html>
