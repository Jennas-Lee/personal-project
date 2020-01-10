<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                     <li class="nav-item"><a href="register.php" class="nav-link">회원가입</a></li>
                     <li class="nav-item"><a href="login.php" class="nav-link">로그인</a></li>
                 </ul>
             </div>
         </nav>
     </header>
     <main role="main">
         <div class="container">
             <div class="h3 mt-4 mb-4">&nbsp;</div>
             <div class="h3 text-center mt-4 mb-4">교과과정</div>
         </div>
         <div class="container">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                 <li class="nav-item">
                     <a href="#1st" class="nav-link" id="1st" data-toggle="tab" role="tab" aria-controls="1st" aria-selected="true">1학년</a>
                 </li>
                 <li class="nav-item">
                     <a href="#2nd" class="nav-link" id="2nd" data-toggle="tab" role="tab" aria-controls="2nd" aria-selected="false">2학년</a>
                 </li>
                 <li class="nav-item">
                     <a href="#3rd" class="nav-link" id="3rd" data-toggle="tab" role="tab" aria-controls="3rd" aria-selected="false">3학년</a>
                 </li>
                 <li class="nav-item">
                     <a href="#4th" class="nav-link" id="4th" data-toggle="tab" role="tab" aria-controls="4th" aria-selected="false" disabled>4학년</a>
                 </li>
                 <li class="nav-item">
                     <a href="#5th" class="nav-link" id="5th" data-toggle="tab" role="tab" aria-controls="5th" aria-selected="false" disabled>5학년</a>
                 </li>
             </ul>
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="1st" role="tabpanel" aria-labelledby="1st-tab">
                     <table class="table table-bordered text-center">
                         <thead class="thead-light">
                             <tr>
                                 <th scope="col">교과</th>
                                 <th scope="col">과목</th>
                                 <th scope="col">시간</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>국어</td>
                                 <td>국어</td>
                                 <td>4</td>
                             </tr>
                             <tr>
                                 <td>수학</td>
                                 <td>수학</td>
                                 <td>4</td>
                             </tr>
                             <tr>
                                 <td>영어</td>
                                 <td>실용영어</td>
                                 <td>2</td>
                             </tr>
                             <tr>
                                 <td>사회</td>
                                 <td>통합사회</td>
                                 <td>2</td>
                             </tr>
                             <tr>
                                 <td>과학</td>
                                 <td>통합과학</td>
                                 <td>2</td>
                             </tr>
                             <tr>
                                 <td>체육</td>
                                 <td>체육</td>
                                 <td>2</td>
                             </tr>
                             <tr>
                                 <td rowspan="2" style="line-height: 70px;">예술</td>
                                 <td>음악</td>
                                 <td>2</td>
                             </tr>
                             <tr>
                                 <td>미술창작</td>
                                 <td>1</td>
                             </tr>
                             <tr class="table-info">
                                 <td>기술가정/제2외국어</td>
                                 <td>프로그래밍</td>
                                 <td>3</td>
                             </tr>
                             <tr class="table-info">
                                 <td>전문기초</td>
                                 <td>컴퓨터시스템일반</td>
                                 <td>4</td>
                             </tr>
                             <tr class="table-info">
                                 <td>전문실무</td>
                                 <td>응용프로그래밍 화면구현</td>
                                 <td>4</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="tab-pane fade" id="2nd" role="tabpanel" aria-labelledby="2nd-tab"></div>
                 <div class="tab-pane fade" id="3rd" role="tabpanel" aria-labelledby="3rd-tab"></div>
                 <div class="tab-pane fade" id="4th" role="tabpanel" aria-labelledby="4th-tab">...</div>
                 <div class="tab-pane fade" id="5th" role="tabpanel" aria-labelledby="5th-tab">...</div>
             </div>
         </div>
     </main>
     <hr>
     <footer class="container">
         <h6 class="text-center mt-2">
             COPYRIGHT &copy; 2019-SeungJun Lee
             <br>
             All Rights Reserved
         </h6>
     </footer>
</body>
</html>
