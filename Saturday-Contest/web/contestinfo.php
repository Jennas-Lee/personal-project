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
             <div class="h3 text-center mt-4 mb-4">대회안내</div>
         </div>
         <div class="container">
             <div class="h5"><strong class="h4">Q.</strong> 대회는 어떻게 운영되나요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>대회는 2주마다 한번씩 토요일 오후 7시부터 3시간동안 진행됩니다. 문제와 정답 제출은 <a href="https://codeup.kr" target="_blank">CodeUp 알고리즘 트레이닝</a>에서 진행됩니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 대회가 언제 시작되는지 어떻게 아나요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>여러분이 가입하신 이 사이트에 등록하신 카카오톡으로 메세지가 전송됩니다. 단, 카카오톡 연동을 하실 때 '메세지 수신'항목을 반드시 체크해주시기 바랍니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 대회를 참여하지 않으면 어떤 페널티가 있나요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>대회를 참여하지 않으면 레이팅 15점이 감점되고, 불이익이 있을 수 있습니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 분명 카카오톡 연동을 했는데, 대회날마다 메세지가 오지 않아요.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>메세지 수신에 동의하지 않으면 메세지가 전송되지 않습니다. 관리자에게 문의해주시면 해결방법을 알려드리겠습니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 시즌이 무엇인가요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>여러분들은 한 시즌동안 배정받은 티어 안에서 경쟁하셔야 합니다. 한 시즌은 약 4개월입니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 티어가 무엇인가요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>시즌 초 여러분들은 티어 배치를 보게 됩니다. 배치 결과를 바탕으로 Bronze, Silver, Gold로 나뉘게 됩니다. 티어마다 문제 난이도는 다릅니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 밴은 무엇인가요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>대회의 공정성과 많은 학생들에게 기회를 제공하고자 관리자, 기능반은 밴(Ban)되며, 밴 리스트는 이 사이트에 항상 공개됩니다. 또한 페널티를 먹은 학생도 밴처리됩니다.
                 밴된 학생들은 문제를 풀수는 있지만 레이팅에는 반영되지 않습니다. 밴 리스트는 영광스런 박제 또는 영 좋지 않은 박제가 될 것입니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 숏코딩이 무엇인가요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>소스 용량을 극한으로 줄이는 것을 말합니다. 불필요한 공백 등을 지워 바이트 수(byte)가 적게 나오면 됩니다. 숏코딩 점수는 AS된 풀이의 평균 용량을 계산하며, 상위 10명에게
                 추가점수를 부여합니다. 소스를 극한으로 줄여보세요.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 이의제기를 하고 싶습니다.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>이의제기는 이 사이트의 이의제기 메뉴를 이용하시면 됩니다. 이의제기한 사람의 정보는 절대 비공개를 원칙으로 합니다. 답장은 카카오톡으로 전송됩니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 문제가 어려워요.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>사람마다 느끼는 난이도가 다를 수 있습니다. 하지만 모든 문제는 관리자가 AS(All Solve)한 문제입니다. 힌트를 얻으려면 인터넷에 검색해보는 센스~!</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 그냥 인터넷에 돌아다니는 소스를 복붙하면 안되나요?</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>인터넷에 돌아다니는 소스를 제출하면 CodeUp 계정 정지 + 대회 1시즌간 참여 불가 페널티를 받습니다. CodeUp 계정 정지는 더이상의 대회 참여가 불가능하므로 인터넷에 돌아다니는
                 소스도 자신의 것으로 이해하고 직접 타이핑하며 변수이름과 범위 등도 자신의 것으로 리팩토링(ReFactoring)하는 것을 추천합니다.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 분명 Dev C++이나 Visual Studio에서는 잘 나오는데, CodeUp에서 제출하면 답이 이상해요.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>Dev C++, Visual Studio와 CodeUp의 컴파일러는 다릅니다. CodeUp의 컴파일러가 더 엄격하다고 생각하셔야 합니다. 변수 초기화 등은 CodeUp의 컴파일러는 반드시
                 해주어야 합니다. 자세한 컴파일러 사양은 CodeUp 사이트를 확인해주세요.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 저도 관리자가 되고 싶어요.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>SNC 관리자는 매년 1학기 초 모집공고를 내고, 5월 초 모집을 받습니다. 신청 대상은 신입생(1학년)입니다. 자세한 내용은 <a href="adminrecruit.php">관리자 신청 페이지</a>를 확인해주세요.</div>
             <hr>
             <div class="h5"><strong class="h4">Q.</strong> 이 사이트의 디자인이 CodeUp이랑 비슷해요.</div>
             <div><strong class="h5">A.&nbsp;&nbsp;</strong>맞습니다. 이 사이트는 Bootstrap으로 디자인되었고 CodeUp을 벤치마킹했습니다.</div>
             <hr>
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
