<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7cc77c19eb.js" crossorigin="anonymous"></script>
    <title>SNC Contest</title>
    <style media="screen">
        * {
            font-family: 'Noto Sans KR', sans-serif;
        }
        .introduce-link a:hover {
            text-decoration: none;
        }
        .book img {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
             <a href="index.php" class="navbar-brand">Saturday Night Coding</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             순위현황
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a href="#" class="dropdown-item">시즌 배치 결과</a>
                             <a href="#" class="dropdown-item">Bronze</a>
                             <a href="#" class="dropdown-item">Silver</a>
                             <a href="#" class="dropdown-item">Gold</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a href="dailyresult.php" class="nav-link">오늘의 대회 결과</a>
                     </li>
                     <li class="nav-item">
                         <a href="contestinfo.php" class="nav-link">대회안내</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             관리자가 추천하는 것들
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a href="introduce.php" class="dropdown-item">관리자 소개</a>
                             <a href="book.php" class="dropdown-item">관리자가 추천하는 책</a>
                             <a href="#" class="dropdown-item">관리자가 추천하는 코딩 공부법</a>
                             <a href="application.php" class="dropdown-item">관리자 신청하기</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a href="exception.php" class="nav-link">이의제기</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                     <?php
                        if(isset($_SESSION['id'])){
                            echo "<li class=\"nav-item\"><a href=\"profile.php?id=\" class=\"nav-link\">프로필</a></li>";
                            echo "<li class=\"nav-item\"><a href=\"logout.php\" class=\"nav-link\">로그아웃</a></li>";
                        } else {
                            echo "<li class=\"nav-item\"><a href=\"register.php\" class=\"nav-link\">회원가입</a></li>";
                            echo "<li class=\"nav-item\"><a href=\"login.php\" class=\"nav-link\">로그인</a></li>";
                        }
                     ?>
                 </ul>
             </div>
         </nav>
     </header>
     <main role="main">
         <div class="container">
             <div class="h3 mt-4 mb-4">&nbsp;</div>
             <div class="h3 text-center mt-4 mb-4">관리자가 추천하는 책</div>
         </div>
         <div class="container book">
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/hongongc.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791162241868&orderClick=LEA&Kc=" title="교보문고 바로가기">혼자 공부하는 C언어</a></div>
                             <div class="card-text">입문자가 C언어를 배우기 딱 좋은 책. 기초부터 포인터, 구조체, 함수, 전처리 지시자 등 C언어 '기초'를 마스터하기 좋은 책이다. 나온지도 얼마 되지 않아서 최신에 맞게 출판된 책.</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/cpicture.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9788931555349&orderClick=LEa&Kc=" title="교보문고 바로가기">C가 보이는 그림책</a></div>
                             <div class="card-text">자료구조와 알고리즘의 동작원리가 그림으로 그려져 있다. 이 책도 입문자가 보기 좋다. 단, 출판된 지 17년정도 됬으므로 최신에 맞지 않을 수도 있다.</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/jumptopython.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791163030911&orderClick=LEa&Kc=" title="교보문고 바로가기">Do it! 점프 투 파이썬</a></div>
                             <div class="card-text">파이썬을 배우기에 잘 나온 책. 출판된지 꽤 오래되었지만 19년도에 전면 개정되었다. 뒤에 예제도 있으니 풀어보면 재미있다. 파이썬은 킹갓짱짱언어이기 때문에 꼭 해보는 것을 추천한다.</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/jaryogujo.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791188612130&orderClick=LEa&Kc=">Do it! 자료구조와 함께 배우는 알고리즘 입문: C 언어 편</a></div>
                             <div class="card-text">C를 입문했다면, 이제 자료구조와 알고리즘을 공부해보자. 이 책도 간결하고 그림으로 되어있어 자료구조와 알고리즘을 이해하기 쉽다. 단점은 알고리즘을 헤더파일부터 작성해 CodeUp에서 사용하기에는 부적절할수도
                             있으니 잘 리팩토링 해볼것.</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/htmlcssjs.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791158391331&orderClick=LAG&Kc=#N">생활코딩! HTML+CSS+자바스크립트</a></div>
                             <div class="card-text">인터넷에서 무료로 강의해주시는 이고잉님의 책. WEB1 HTML, CSS, JavaScript를 유튜브와 함께 배울 수 있는 책이다. 중간중간에 강의를 확인해보면 더욱 도움된다. 응프구현시간때 매우 도움될 것으로 생각한다. 이고잉님 사랑합니다~!</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/phpmysql.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791158391348&orderClick=LAG&Kc=">생활코딩! PHP+MySQL</a></div>
                             <div class="card-text">이것도 이고잉님의 책이다. 웹디자인이 아닌 동적인 웹페이지를 구현하는 웹개발이 하고싶은가? PHP를 배워보는 것을 추천한다. MySQL도 배워 PHP에서 데이터베이스를 불러올 수 있는 기술까지! 유튜브도 들으면
                             효과 만점이다. 관리자는 이 책으로 응프구현 수행평가를 만점받았다.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card mb-3">
                 <div class="row no-gutters">
                     <div class="col-md-3">
                         <img src="img/git.jpg">
                     </div>
                     <div class="col-md-9">
                         <div class="card-body">
                             <div class="h5 card-title"><a href="http://www.kyobobook.co.kr/product/detailViewKor.laf?ejkGb=KOR&mallGb=KOR&barcode=9791163031222&orderClick=LAG&Kc=">Do it! 지옥에서 온 문서관리자 깃&amp;깃허브 입문</a></div>
                             <div class="card-text">한번씩은 들어봤을 깃허브(github)를 공부할 수 있는 책이다. 깃허브가 무엇인지, 어떻게 사용하는지부터 깃허브를 사용한 팀원간의 협업을 배울 수 있다. 개인 포트폴리오 관리도 용이하다. 어떤 기업은 이력서에
                                 깃허브 주소를 적으라는 곳도 있다. 지금부터 할 줄 알면 좋을 것 같다. 재미있다.
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </main>
     <hr>
     <footer class="container">
         <h6 class="text-center mt-2">
             COPYRIGHT &copy; 2020~ SeungJun Lee
             <br>
             All Rights Reserved
         </h6>
     </footer>
</body>
</html>
