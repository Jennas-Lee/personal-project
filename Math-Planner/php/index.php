<?php
    include "db.php";
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
     <main role="main" class="mt-3 ml-2 mr-2">
         <div class="row row-cols-1 row-cols-md-2">
             <div class="col mb-3">
                 <div class="card h-100 bg-secondary">
                     <div class="card-header text-white">
                         <span class="align-middle">연마수학 - 수학Ⅰ</span>
                         <a href="list.php?title=yeonma_math1&page=1" class="btn btn-dark btn-sm float-right">더보기</a>
                     </div>
                     <div class="card-body text-warning">
                         <?php
                            $sql=mq("SELECT * FROM yeonma_math1 LIMIT 0, 8");
                            $count=mysqli_num_rows($sql);
                            if($count==0) {
                                echo '<div class="text-left">미완성</div>';
                            } else {
                                while($notice=$sql->fetch_array()) {
                                    $true=$notice["CompleteTrue"];
                                    if($true==0) {
                                        $title=$notice["SmlMem"];
                                        ?>
                                        <div class="text-left"><?php echo $title; ?></div>
                                        <?php
                                    }
                                }
                            }
                         ?>
                     </div>
                 </div>
             </div>
             <div class="col mb-3">
                 <div class="card h-100 bg-secondary">
                     <div class="card-header text-white">
                         <span class="align-middle">라이트센 - 수학Ⅰ</span>
                         <a href="list.php?title=ssen_math1&page=1" class="btn btn-dark btn-sm float-right">더보기</a>
                     </div>
                     <div class="card-body text-warning">
                         <?php
                            $sql=mq("SELECT * FROM ssen_math1 LIMIT 0, 8");
                            $count=mysqli_num_rows($sql);
                            if($count==0) {
                                echo '<div class="text-left">미완성</div>';
                            } else {
                                while($notice=$sql->fetch_array()) {
                                    $true=$notice["CompleteTrue"];
                                    if($true==0) {
                                        $title=$notice["SmlMem"];
                                        ?>
                                        <div class="text-left"><?php echo $title; ?></div>
                                        <?php
                                    }
                                }
                            }
                         ?>
                     </div>
                 </div>
             </div>
             <div class="col mb-3">
                 <div class="card h-100 bg-secondary">
                     <div class="card-header text-white">
                         <span class="align-middle">연마수학 - 확률과 통계</span>
                         <a href="list.php?title=yeonma_huaktong&page=1" class="btn btn-dark btn-sm float-right">더보기</a>
                     </div>
                     <div class="card-body text-warning">
                         <?php
                            $sql=mq("SELECT * FROM yeonma_huaktong LIMIT 0, 8");
                            $count=mysqli_num_rows($sql);
                            if($count==0) {
                                echo '<div class="text-left">미완성</div>';
                            } else {
                                while($notice=$sql->fetch_array()) {
                                    $true=$notice["CompleteTrue"];
                                    if($true==0) {
                                        $title=$notice["SmlMem"];
                                        ?>
                                        <div class="text-left"><?php echo $title; ?></div>
                                        <?php
                                    }
                                }
                            }
                         ?>
                     </div>
                 </div>
             </div>
             <div class="col mb-3">
                 <div class="card h-100 bg-secondary">
                     <div class="card-header text-white">
                         <span class="align-middle">라이트센 - 확률과 통계</span>
                         <a href="list.php?title=ssen_huaktong&page=1" class="btn btn-dark btn-sm float-right">더보기</a>
                     </div>
                     <div class="card-body text-warning">
                         <?php
                            $sql=mq("SELECT * FROM ssen_huaktong LIMIT 0, 8");
                            $count=mysqli_num_rows($sql);
                            if($count==0) {
                                echo '<div class="text-left">미완성</div>';
                            } else {
                                while($notice=$sql->fetch_array()) {
                                    $true=$notice["CompleteTrue"];
                                    if($true==0) {
                                        $title=$notice["SmlMem"];
                                        ?>
                                        <div class="text-left"><?php echo $title; ?></div>
                                        <?php
                                    }
                                }
                            }
                         ?>
                     </div>
                 </div>
             </div>
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
