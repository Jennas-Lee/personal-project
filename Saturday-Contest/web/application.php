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
             <div class="h3 text-center mt-4 mb-4">관리자 신청하기</div>
         </div>
         <div class="container">
             <?php
                 if(!isset($_SESSION['id'])){
                     echo "로그인하십시오!";
                 } else {
             ?>
             <div class="alert alert-info" role="alert">
                 <div class="h4 alert-heading">2기 관리자 모집중!</div>
                 <ul class="list-unstyled">
                     <li>모집 대상 : 인공지능소프트웨어과 2020년도 입학 신입생</li>
                     <li>모집 인원 : 1명</li>
                     <li>신청 기한 : 2020년 03월 19일 오전 0시</li>
                     <li>신청 방법 : 로그인 후 하단 신청서 작성 후 전송, 확인 메세지를 수신하시면 신청이 완료됩니다.</li>
                     <li>1차 발표 : 2020년 03월 20일 오후 9시</li>
                     <li>2차 면접 : 2020년 03월 23일 오후 5시</li>
                     <li>최종 발표 : 2020년 03월 25일 오전 8시</li>
                     <li>주의 사항 : 모든 안내와 발표는 카카오톡으로 전송됩니다. 카카오톡을 반드시 확인해 주시기 바랍니다.</li>
                     <li>문의 사항 : 모든 문의사항은 <a href="mailto:leezeunjun@gmail.com" class="alert-link">메인 관리자 이메일(leezeunjun@gmail.com)</a>로 연락주시기 바랍니다.</li>
                 </ul>
             </div>
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>관리자 특권</strong>
                 <br>
                 <ol>
                     <li>대회 참가자들의 모든 소스를 열람할 수 있습니다.</li>
                     <li>총관리자의 모든 지식을 전해드립니다.(웹, 알고리즘, 파이썬, 자바, 데이터베이스 등등)</li>
                     <li>이 사이트 소유권을 가지게 되고, 모든 소스를 열람할 수 있습니다.</li>
                 </ol>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>관리자 페널티</strong>
                 <br>
                 <ol>
                     <li>대회 참가가 불가능합니다.</li>
                     <li>대회 유지 비용을 지불해야 할 수도 있습니다.</li>
                     <li>CodeUp 트레이닝을 따로 받으셔야 합니다.</li>
                     <li>중간에 그만두면 곤란합니다. 인력이 부족합니다.</li>
                 </ol>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="application_ok.php" method="post">
                 <textarea name="content1" rows="3" maxlength="99" placeholder="관리자가 되고 싶은 이유는?" style="width: 100%;" id="content1"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter1">0/100</span>
                 </div>
                 <textarea name="content2" rows="3" maxlength="99" placeholder="관리자가 되면 하고자 하는 각오!" style="width: 100%;" id="content2"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter2">0/100</span>
                 </div>
                 <textarea name="content3" rows="3" maxlength="99" placeholder="관리자가 되면 자신의 개인 시간을 침범당할 수 있다. 이에 대해 어떻게 생각하는가?" style="width: 100%;" id="content3"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter3">0/100</span>
                 </div>
                 <textarea name="content4" rows="3" maxlength="99" placeholder="관리자가 되면 중간에 그만둘 수 없다. 하지만 그만두고 싶은 충동이 일어나면 어떻게 할 것인가?" style="width: 100%;" id="content4"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter4">0/100</span>
                 </div>
                 <textarea name="content5" rows="3" maxlength="99" placeholder="관리자가 되면 대회 참가를 할 수 없다. 굉장히 아쉬울수도 있다. 어떻게 생각하는가?" style="width: 100%;" id="content5"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter5">0/100</span>
                 </div>
                 <textarea name="content6" rows="6" maxlength="299" placeholder="참가 학생이 이의제기를 보내왔다. 대회 규칙에는 어긋나지만 이 학생의 이의제기도 일리가 있다. 어떻게 대처할것인가?" style="width: 100%;" id="content6"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter6">0/300</span>
                 </div>
                 <textarea name="content7" rows="1" maxlength="20" placeholder="#include <stdio.h>에서 stdio는?" style="width: 100%;" id="content7"></textarea>
                 <div class="container mb-1 text-right">
                     <span id="counter7">0/20</span>
                 </div>
                 <button type="submit" class="btn btn-primary">전송</button>
             </form>
             <?php } ?>
         </div>
         <script>
             $(function(){
               $('#content1').keyup(function(e){
                   var content1 = $(this).val();
                   $(this).height(((content1.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter1').html(content1.length + '/100');
               });
               $('#content2').keyup(function(e){
                   var content2 = $(this).val();
                   $(this).height(((content2.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter2').html(content2.length + '/100');
               });
               $('#content3').keyup(function(e){
                   var content3 = $(this).val();
                   $(this).height(((content3.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter3').html(content3.length + '/100');
               });
               $('#content4').keyup(function(e){
                   var content4 = $(this).val();
                   $(this).height(((content4.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter4').html(content4.length + '/100');
               });
               $('#content5').keyup(function(e){
                   var content5 = $(this).val();
                   $(this).height(((content5.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter5').html(content5.length + '/100');
               });
               $('#content6').keyup(function(e){
                   var content6 = $(this).val();
                   $(this).height(((content6.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter6').html(content6.length + '/300');
               });
               $('#content7').keyup(function(e){
                   var content7 = $(this).val();
                   $(this).height(((content7.split('\n').length + 1) * 1.5) + 'em');
                   $('#counter7').html(content7.length + '/20');
               });
               $('#content1').keyup();
             });
         </script>
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
