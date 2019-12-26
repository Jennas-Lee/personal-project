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
    <title>세명컴고 토코파</title>
    <style media="screen">
        * {
            font-family: 'Noto Sans KR', sans-serif;
        }
    </style>
</head>
<body>
    <header role="header">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a href="index.php" class="navbar-brand">세명컴고 토코파</a>
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
                         <a href="#" class="nav-link">오늘의 대회 결과</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">대회안내</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item"><a href="#" class="nav-link">회원가입</a></li>
                     <li class="nav-item"><a href="#" class="nav-link">로그인</a></li>
                 </ul>
             </div>
         </nav>
     </header>
     <main role="main">
         <div class="container text-center">
             <div class="h3 mt-4 mb-4">
                 다음 대회
             </div>
             <div class="jumbotron">
                 <p class="lead">1시즌 1차 배치</p>
                 <p class="lead">2020-03-02 19:00:00</p>
                 <h1 class="display-4">
                     <span class="d-day"></span> <span>17:00:00</span>
                 </h1>
             </div>
         </div>
         <div class="container">
             <div class="h3 text-center mt-4 mb-4">
                 지난 대회의 결과
             </div>
             <div class="card-group">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Bronze</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Silver</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Gold</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="h3 text-center mt-4 mb-4">
                 TOP 5
             </div>
             <div class="card-group">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Bronze</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Silver</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title text-center">Gold</h5>
                         <div class="card-text"></div>
                     </div>
                 </div>
             </div>
         </div>
     </main>
</body>
</html>
