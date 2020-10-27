<?php session_start(); ?>
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
        form {
            position: absolute;
            width: 300px;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    <title>연세에듀수학</title>
</head>

<body>
    <?php
        if(!isset($_SESSION['name'])) {
            ?>
            <div class="container">
                <form method="post" action="">
                    <h3 class="text-center">연세에듀수학 로그인</h3>
                    <div class="form-group">
                        <label for="inputName">이름</label>
                        <input type="text" class="form-control" id="inputName" placeholder="이름" required autofocus>
                        <div id="inputNameValid" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">비밀번호</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="비밀번호" required>
                        <div id="inputPasswordValid" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-primary" onclick="$('#spinner').addClass('spinner-border spinner-border-sm');">
                            <span id="spinner" class="text-light" role="status" aria-hidden="true"></span>
                            로그인
                        </button>
                    </div>
                </form>
            </div>

            <!-- login js -->
            <script src="js/login.js"></script>
            <script type="text/javascript">
                $(document).ready(function(e){
                    $("#inputName").on("keyup", function(){
                        $("#inputName").removeClass("is-invalid");
                        $("#inputNameValid").empty;
                    });
                    $("#inputPassword").on("keyup", function(){
                        $("#inputPassword").removeClass("is-invalid");
                        $("#inputPasswordValid").empty;
                    });
                });
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("이미 로그인되어있습니다.");
                location.href="index.php";
            </script>
            <?php
        }
    ?>

</body>

</html>
