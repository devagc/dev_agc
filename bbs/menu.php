<?php 
    include 'head.php';
?>
<dl class="skip ">
        <dt class="blind"><strong>skip Navigation</strong></dt>
        <dd><a href="#container">skip to Content</a></dd>
    </dl> 
    <!-- header -->
    <div id="header">
        <div class="nav">
            <div class="logo">
                <a href="../index.php"><h1><img src="img/logo1.png" alt=""></h1></a>
            </div>
            <button type="button" class="btn_menu">Menu Open / Close</button>
            <div class="nav">
                <ul>
                    <li><a href="intro.php">회사소개</a></li>
                    <li><a href="bbs/board.php">공지사항</a></li>
                    <?php 
                        if(!isset($_SESSION['mb_id'])){
                    ?>
                    <li><a href="../member/login.php">로그인</a></li>
                    <li><a href="../member/reg.php">회원가입</a></li>
                    <?php
                        }else{
                    ?>
                    <li><a href="../member/logout.php">로그아웃</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- //header -->
     <!-- header -->
     <div id="header" class="header">
        <div class="nav">
            <div class="logo">
                <a href="../index.php"><h1><img src="img/logo1.png" alt=""></h1></a>
            </div>
            <button type="button" class="btn_menu">Menu Open / Close</button>
            <div class="nav">
                <ul>
                    <li><a href="intro.php">회사소개</a></li>
                    <li><a href="bbs/board.php">공지사항</a></li>
                    <li><a href="../member/login.php">로그인</a></li>
                    <li><a href="../member/logout.php">로그아웃</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //header -->