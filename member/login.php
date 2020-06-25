<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    if(isset($_SESSION['mb_id'])):
        Header("Location:../index.php");
    endif;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg"></div>
    <div class="login">
        <img src="../img/logo1.png" alt="" class="img">
        <div class="close">
            <button type="button" title="로그인 창 닫기"><a href="../index.php"><img src="../img/x_1.png" alt=""></a></button>
        </div>
        <div class="sns">
            <ul>
                <a href="#"><li><img src="../img/sns_p.jpg" alt=""></li></a>
                <a href="#"><li><img src="../img/sns_k.jpg" alt=""></li></a>
                <a href="naverlogin.php"><li><img src="../img/sns_n.jpg" alt=""></li></a>
            </ul>
        </div>
        <form method="POST" action="loginok.php" id="loginForm" name="submitform">
            <fieldset>
                <legend>Login area</legend>
                <div class="field">
                    <label for="u_id" class="blind">아이디</label>
                    <input type="text" name="id" id="id" placeholder="id" value="" required autofocus class="inp_field">
                </div>
                <div class="field">
                    <label for="u_pw" class="blind">비밀번호</label>
                    <input type="password" name="pw" id="pw" placeholder="password" value="" required class="inp_field">
                </div>
                <div class="btn_area">
                    <label class="left">
                        <input type="checkbox" name="chk" value="y">
                        로그인 유지
                    </label>
                    <button type="submit" class="right">
                        <span class="icon"></span>
                        로그인
                    </button>
                </div>
            </fieldset>
            <ul class="link">
                <li><a href="find.php">아이디/비밀번호 찾기</a></li>
                <li><a href="reg.php">회원 가입</a></li>
                <li><a href="#">Open ID</a></li>
            </ul>
        </form>
    </div> 
</body>
</html>