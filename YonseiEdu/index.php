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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/jquery.tablesorter.js" type="text/javascript"></script> <!-- Should check file directory -->

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
                    연세에듀수학 관리
                </div>
                <div class="container">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="font-weight-bold">오늘의 수업</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <?php
                                            $today = date("D");
                                            if($today == "Sat" || $today == "Sun") {
                                                echo '<div class="text-center">오늘은 수업이 없습니다.</div>';
                                            } else {
                                                $sql = "SELECT title, {$today} FROM CLASS_TB WHERE {$today} <> '00:00:00' AND teacher = '{$_SESSION['name']}' ORDER BY {$today} ASC";
                                                $result = mysqli_query($conn, $sql);

                                                $i=1;
                                                while($row = mysqli_fetch_array($result)) {
                                                    $title = $row['title'];
                                                    $time = substr($row[$today], 0, 5);

                                                    echo '<tr>
                                                            <th scope="row">'.$i.'</th>
                                                            <td><a href="classmember.php?title='.$title.'">'.$title.'</a></td>
                                                            <td>'.$time.'</td>
                                                        </tr>';
                                                    $i+=1;
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="font-weight-bold">수강료 확인</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">이승준</a></td>
                                            <td>23일</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><a href="#">이승준</a></td>
                                            <td>24일</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><a href="#">이승준</a></td>
                                            <td>25일</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php
        }
    ?>
    <script type="text/javascript">
        function search(){
            var value=$('input[name=name]').val();

            if(value!=""){
                location.href="findmember.php?name="+value;
            }
        }
    </script>
</body>

</html>
