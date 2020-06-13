<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    if(isset($_SESSION['mb_id'])):
        if(isset($_SESSION['mb_id'])):
            Header("Location:../index.php");
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>화원가입</title>
    <link rel="stylesheet" href="../css/membership_2.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
    <script src="../js/jquery.validate.min.js"></script>
    <style>
        .form span.error { color:tomato;  width:100%; position:absolute; bottom:-20px; z-index:10; font-size:12px; padding:0 20px; box-sizing:border-box;}
    </style>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
 
        $(function(){ $(".form").validate({ 
            //규칙 
            rules:{ 
                    name:{
                        required : true, //필수입력여부 
                        minlength : 5 //최소 입력 글자수 
                        }, 
                    email:{
                        required : true, //필수입력여부
                        email : true //이메일형식
                        },
                    url:{ 
                        required : false, //필수입력여부
                        url : true //url형식
                        }
                 }, 
                 
                 //메시지 
            messages:{
                    name:{
                        equired : "이름은 필수 입력입니다.",
                        minlength : "최소 2글자 이상 입력해주세요." 
                        }, 
                    email: { 
                        required : "이메일은 필수 입력입니다.",
                        email : "이메일 형식을 지켜주세요." 
                            }, 
                    url:{ 
                        required : "url은 필수입력이 아닙니다.",
                        url : "url 형식을 지켜주세요." 
                        } 
                }, 
            //메시지 태그 
            errorElement : 'span', 
            //태그 
            errorClass: 'error', 
            //클레스 이름 
            validClass:'vaild' 
            });
             });

    </script>
</head>
<body>
    <div class="bg"></div>
    <div class="login">
        <img src="../img/logo1.png" alt="" class="img">
        <div class="close">
            <button type="button" title="로그인 창 닫기"><a href="../index.php"><img src="../img/x_1.png" alt=""></a></button>
        </div>

        <div id="contact" class="contact">
            <!-- <h2><img src="img/logo1.png" alt=""></h2> -->
            <form action="signupsave.php" method="POST" id="sign" name="submitform" class="form">
                <fieldset>
                    <legend>fieldset legend</legend>
                    <div class="field field_1">
                        <div class="field_in f1">
                            <!-- <label for="id">아이디</label> <br> -->
                            <input type="id" name="id" id="id" maxlength="30" placeholder="아이디" value="">
                        </div>
                        <div class="field_in f2">
                            <!-- <label for="pwd">비밀번호</label><br> -->
                            <input type="password" name="pw" id="pw"  placeholder="비밀번호" value="">
                        </div>
                        <div class="field_in f2">
                            <!-- <label for="pwd">비밀번호 재확인</label><br> -->
                            <input type="password" name="pw2" id="pw2"  placeholder="비밀번호 확인" value="">
                        </div>
                        <div class="field_in f3">
                            <!-- <label for="name">이름</label><br> -->
                            <input type="text" name="name" id="name" maxlength="10" placeholder="이름" value="">
                        </div>
                        <div class="email">
                            <div class="title">
                            </div>
                            <span class="email_box">
                                <input type="email" id="email" name="email" placeholder="이메일" aria-label="선택입력" class="int" maxlength="100">
                            </span>
                        </div>
                        <div class="join_title">
                            <!-- <label for="phoneNo">휴대전화</label><br> -->
                            <input type="text" name="phone" id="phone" placeholder="전화번호" >
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="right">
                    <span class="icon"></span>
                    가입하기
                </button>
            </form>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        // $(document).ready(function(){
        //     $(".error").hide();


        // })
 
        $(function(){ $(".form").validate({ 
            //규칙 
            rules:{ 
                    name:{
                        required : true, //필수입력여부 
                        minlength : 5 //최소 입력 글자수 
                        }, 
                    email:{
                        required : true, //필수입력여부
                        email : true //이메일형식
                        },
                    url:{ 
                        required : false, //필수입력여부
                        url : true //url형식
                        }
                 }, 
                 
                 //메시지 
            messages:{
                    name:{
                        equired : "이름은 필수 입력입니다.",
                        minlength : "최소 2글자 이상 입력해주세요." 
                        }, 
                    email: { 
                        required : "이메일은 필수 입력입니다.",
                        email : "이메일 형식을 지켜주세요." 
                            }, 
                    url:{ 
                        required : "url은 필수입력이 아닙니다.",
                        url : "url 형식을 지켜주세요." 
                        } 
                }, 
            //메시지 태그 
            errorElement : 'span', 
            //태그 
            errorClass: 'error', 
            //클레스 이름 
            validClass:'vaild' 
            });
             });

    </script>
</body>
</html>