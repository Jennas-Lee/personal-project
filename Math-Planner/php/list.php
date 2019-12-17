<?php
    include "db.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                       <!-- jquery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">      <!-- bootstrap theme -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- bootstrap js -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:500&display=swap" rel="stylesheet">
        <!-- font -->
    <title>수학진도시스템</title>
</head>
<body class="bg-dark">
    <header role="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <a href="index.php" class="navbar-brand">수학진도시스템</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            진도관리
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a href="list.php?title=yeonma_math1&page=1" class="dropdown-item text-light" onmouseover="this.className='dropdown-item text-dark bg-light'" onmouseout="this.className='dropdown-item text-light'">연마수학 - 수학Ⅰ</a>
                            <a href="list.php?title=ssen_math1&page=1" class="dropdown-item text-light" onmouseover="this.className='dropdown-item text-dark bg-light'" onmouseout="this.className='dropdown-item text-light'">라이트센 - 수학Ⅰ</a>
                            <a href="list.php?title=yeonma_huaktong&page=1" class="dropdown-item text-light" onmouseover="this.className='dropdown-item text-dark bg-light'" onmouseout="this.className='dropdown-item text-light'">연마수학 - 확률과 통계</a>
                            <a href="list.php?title=ssen_huaktong&page=1" class="dropdown-item text-light" onmouseover="this.className='dropdown-item text-dark bg-light'" onmouseout="this.className='dropdown-item text-light'">라이트센 - 확률과 통계</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">숙제관리</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main role="main" class="mt-3 ml-1 mr-1">
        <div class="container-lg">
            <p class="font-weight-bold h1 text-white-50">
                <?php
                    $title=$_GET['title'];
                    $page=$_GET['page'];

                    if($title=="yeonma_math1") {
                        echo "연마수학 - 수학Ⅰ";
                    } else if($title=="ssen_math1") {
                        echo "라이트센 - 수학Ⅰ";
                    } else if($title=="yeonma_huaktong") {
                        echo "연마수학 - 확률과 통계";
                    } else if($title=="ssen_huaktong") {
                        echo "라이트센 - 확률과 통계";
                    } else {
                        // echo "<script>alert('잘못된 접근입니다.'); window.locate.href="index.php";</script>";
                    }
                ?>
            </p>
            <form action="write.php" enctype="multipart/form-data" method="post">
                <table class="table table-dark text-center mt-4">
                    <thead>
                        <tr>
                            <th scope="col">대단원 이름</th>
                            <th scope="col">소단원 이름</th>
                            <th scope="col">완료 날짜</th>
                            <th scope="col">완료 여부</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>지수함수와 로그함수</td>
                            <td>거듭제곱</td>
                            <td><input type="date" id="list-date"></td>    PHP로 오늘 날짜 가져온 후 value에 대입
                            <td><input type="checkbox"></td>
                        </tr> -->
                        <?php
                            $query="SELECT * FROM $title WHERE BigNum=$page";
                            $sql=mq($query);
                            while($list=$sql->fetch_array()) {
                                ?>
                                    <tr>
                                        <td scope="col1"><?php echo $list["BigMem"] ?></td>
                                        <td scope="col1" name="smlmem"><?php echo $list["SmlMem"] ?></td>
                                        <td scope="col1">
                                            <?php
                                                if($list["CompleteTrue"]==0) {
                                                    echo '<input type="date" name="completedate">';
                                                } else {
                                                    echo $list["CompleteDate"];
                                                }
                                            ?>
                                        </td>
                                        <td scope="col1">
                                            <?php
                                                if($list["CompleteTrue"]==0) {
                                                    echo '<input type="checkbox" name="completetrue">';
                                                } else {
                                                    echo '<input type="checkbox" checked disable>';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-secondary btn-lg">저장</button>
            </form>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item <?php if($page=="1") echo "active"; ?> "><a href="<?php echo "list.php?title=$title&page=1" ?>" class="page-link">1</a></li>
                    <li class="page-item <?php if($page=="2") echo "active"; ?> "><a href="<?php echo "list.php?title=$title&page=2" ?>" class="page-link">2</a></li>
                    <li class="page-item <?php if($page=="3") echo "active"; ?> "><a href="<?php echo "list.php?title=$title&page=3" ?>" class="page-link">3</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <hr>
    <footer role="footer" class="container">
        <h6 class="text-center text-light">
            이 사이트는 외부인은 사용할 수 없습니다
            <br>
            이 사이트를 발견하셨을시 <a href="mailto:leezeunjun@gmail.com" class="text-primary">leezeunjun@gmail.com</a>으로 연락해주시기 바랍니다.
            <br>
            COPYRIGHT &copy; SeungJun Lee, All Rights RESERVED
        </h6>
    </footer>
</body>
</html>
