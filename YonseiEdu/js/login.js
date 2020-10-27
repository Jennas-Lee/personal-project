$(function(){
    $('#submit').click(function(e){
        e.preventDefault();
        $.ajax({
            url : '../login.php',
            type : 'POST',
            data : {
                name : $('#inputName').val(),
                password : $('#inputPassword').val()
            },
            dataType : "text",
            success : function(data){
                if(data == "1"){
                    // login success
                    location.href="../index.php";
                } else if(data == "2"){
                    // check name
                    $("#inputName").addClass("is-invalid");
                    $("#inputNameValid").text("이름을 확인해주세요.");
                    $('#spinner').removeClass('spinner-border spinner-border-sm');
                } else if(data == "3") {
                    //check password
                    $("#inputPassword").addClass("is-invalid");
                    $("#inputPasswordValid").text("비밀번호를 확인해주세요.");
                    $('#spinner').removeClass('spinner-border spinner-border-sm');
                } else {
                    // error
                    alert("이 알림이 계속되면 개발자에게 연락주세요.\n" + data);
                }
            },
            error : function(jqXHR, textStatus, errorThrown){
                // error
                alert("이 알림이 계속되면 개발자에게 연락주세요.\najax error : " + textStatus + "\n" + errorThrown);
            }
        });
    });
});
