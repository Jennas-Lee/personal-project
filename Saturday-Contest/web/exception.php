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
                     <li class="nav-item"><a href="register.php" class="nav-link">회원가입</a></li>
                     <li class="nav-item"><a href="login.php" class="nav-link">로그인</a></li>
                 </ul>
             </div>
         </nav>
     </header>
     <main role="main">
         <div class="container">
             <div class="h3 mt-4 mb-4">&nbsp;</div>
             <div class="h3 text-center mt-4 mb-4">이의제기</div>
         </div>
         <div class="container">
             <div class="alert alert-danger" role="alert">
                 <div class="h4 alert-heading">이의제기 주의사항</div>
                 <ol>
                     <li>문제에 대한 이의제기는 할 수 없습니다. <br>관리자가 AS(All Solve)한 문제를 제시하였고, 선생님이 검토하시기 때문에 문제에는 아무 이상이 없습니다.</li>
                     <li>이의제기에 대한 답변은 카카오톡으로 전송됩니다. 카카오톡을 확인해주세요. <br>카카오톡이 수신되지 않으면 관리자 이메일로 연락주시기 바랍니다.</li>
                     <li>이의제기는 시험기간이 아니면 3일 이내에 확인 후 연락드리겠습니다.</li>
                     <li>이의제기 남용은 곤란합니다. 반드시 다른 참가자들도 영향을 받을 수 있는 사항을 제기해주시기 바랍니다.</li>
                 </ol>
             </div>
             <form action="">
                 <textarea name="exception" rows="5" placeholder="이의제기하려는 내용을 자세히 적어주시기 바랍니다." style="width: 100%;"></textarea>
                 <button type="submit" class="btn btn-primary">전송</button>
             </form>
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
