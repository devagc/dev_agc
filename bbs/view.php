<?php
    include 'head.php';

    
    // 게시판 글 
    $boardID = $_GET['wr_id'];
    $sql = "SELECT wr_id, wr_subject, wr_content, mb_id, wr_name, wr_datetime, wr_last, wr_1, wr_2, wr_3, wr_4, wr_5, wr_6, wr_7 FROM dev_notice where wr_id = {$boardID} ";
    $result = $dbConnect->query($sql);
    $row = mysqli_fetch_array($result);

    //client ip 가지고 오기
    function get_client_ip(){
        $ipaddress = '';
        if(getenv('HTTP_CLIENT_IP')):
            $ipaddress = getenv('HTTP_CLIENT_IP');
        elseif(getenv('HTTP_X_FORWARDED_FOR')):
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        elseif(getenv('HTTP_X_FORWARDED')):
            $ipaddress = getenv('HTTP_X_FORWARDED');
        elseif(getenv('HTTP_FORWARDED_FOR')):
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        elseif(getenv('HTTP_FORWARDED')):
            $ipaddress = getenv('HTTP_FORWARDED');
        elseif(getenv('REMOTE_ADDR')):
            $ipaddress = getenv('REMOTE_ADDR');
        else:
            $ipaddress = 'UNKNOWN';
        endif;
        return $ipaddress;
        
    }
    
    //쿠키값을 통해 조회수 컨트롤
    if(!empty($boardID) && empty($_COOKIE['cu'.$boardID])):
        $sql1 = "UPDATE dev_notice SET wr_4 = wr_4 + 1 where wr_id =".$boardID;
        $result1 = $dbConnect->query($sql1);
        // $row1 = mysqli_fetch_array($result1);
        // var_dump($row1);
        // if(!empty($row1)):
        //     setcookie('cu'.$boardID,TRUE,time() + (60*60*24),'/');
        // endif;
    endif;
    // var_dump($_COOKIE['memberID']);

    // 회원
    $sql2 = "SELECT mb_id FROM dev_member WHERE mb_id = 'admin'";
    $result2 = $dbConnect->query($sql2);
    $row2 = mysqli_fetch_array($result2);
?>
<style>
    .youtube{
        width:100%;
        margin-bottom: 3%;
    }
</style>
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
                    <li><a href="board.php">공지사항</a></li>
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
                    <li><a href="../member/reg.php">로그아웃</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- visual -->
    <div id="visual">
        <div class="visual_nav">
            <div class="text">
                <h1>글쓰기</h1>
                <p><span>Dev</span>  정보를 공유해 보세요.</p>
            </div>
        </div>
    </div>
    <div id="visual_1">
        <div class="visual_nav">
            <ul>
                <li><a href="board.php" style="background-color:#fff;color:#000;">공지사항</a></li>
                <li class="li"><a href="qa.php">Q & A</a></li>
                <li class="li"><a href="#">이벤트</a></li>
            </ul>
        </div>
    </div>
    <!-- //visual -->
<!-- //visual -->
<div class="wrea">
        <div class="id">
            <div class="subject">
                <h2><?=$row['wr_subject']?></h2>
            </div>
            <ul class="id_1">
                <li><img src="./img/no_profile.gif" alt="" class="img"></li>
            </ul>
            <ul class="mid">
                <li><?=$row['wr_name']?></li>
                <li class="id_2">
                    <!-- 댓글 부분은 나중에 -->
                    <a href="#"><img src="./img/sp.png" alt="">1건</a>
                    <a href="#"><img src="./img/i.png" alt=""><?=$row['wr_4']?></a>
                    <a href="#"><img src="./img/c.png" alt=""><?=$row['wr_datetime']?></a>
                </li>
            </ul>
            <ul class="id_3">
                <li><a href="#"><img src="./img/p.png" alt="답변"></a></li>
                <?php 
                    if(isset($_SESSION['mb_id']) && $row2['mb_id'] == 'admin'):
                ?>
                <li><a href="write.php"><img src="./img/text.png" alt="글쓰기"></a></li>
                <li><a href="#"><img src="./img/menu.png" alt="메뉴"></a></li>
                <?php 
                    endif; 
                ?>
            </ul>
        </div>
        <div class="view">
            <div class="bookmark">
                <a href="#"><img src="../img/bookmark.png" alt="">스크랩</a>
                <?php 
                    if(isset($_SESSION['mb_id']) && $row2['mb_id'] == 'admin'):
                ?>
                <a href="delete.php?wr_id=<?=$row['wr_id']?>">삭제</a>
                <?php
                    endif;
                ?>
            </div>
            <div class="view">
            <p><?=$row['wr_content']?><br>
            <?php
                if(!empty($row['wr_3'])):
            ?>
                <img src="fileimg/<?=$row['wr_3']?>" class="boardimg">
            <?php 
            endif;
            ?>
            <br>
            <?php 
                if(!empty($row['wr_7'])):
            ?>
            <div class="youtube"><?=$row['wr_7']?></div>
            <?php 
                endif;
            ?>
            </p>
            </div>
        </div>
        <?php 
            //이전글 구함
            $wr_id = $row['wr_id'] - 1;
            $sql3 = "SELECT * FROM dev_notice where wr_id = '{$wr_id}' ";
            $result3 = $dbConnect->query($sql3);
            $row3 = mysqli_fetch_array($result3);
        ?>
        <div class="category">
            <ul>
                <li><a href="http://<?=$row['wr_5']?>"><img src="./img/link.png" alt=""><?=$row['wr_5']?> <br> <span>0회 연결</span></a></li>
                <li><a href="http://<?=$row['wr_6']?>"><img src="./img/link.png" alt=""><?=$row['wr_6']?> <br> <span>0회 연결</span></a></li>
            </ul>
        </div>
        <div class="comment_1">
            <div class="comment_text">
                <img src="./img/drob_1.png" alt="">
                <i>이전글</i><a href="view.php?wr_id=<?=$row3['wr_id']?>" class="ar"><?=$row3['wr_subject']?></a>
                <span><?=$row3['wr_datetime']?></span>
            </div>
        </div>
        <div id="comment">
            <a href="#">댓글<span>0</span><img src="./img/drob.png" alt=""></a>  
        </div>
        <div class="comment">
            <p>등록된 댓글이 없습니다.</p>
        </div>
        <form action="" method="POST">
            <fieldset>
                <legend>fieldset legend</legend>
                <!-- <div class="field">
                    <label for="text">제목</label>
                    <input type="text" name="text" id="text" maxlength="8" placeholder="제목을 입력하세요." value="" autofocus>
                </div> -->
                <!-- <div class="field">
                    <label for="userpw">비밀번호</label>
                    <input type="password" name="userpw" id="userpw" placeholder="password" value="">
                </div> -->
                <!-- <div class="field">
                    <label for="birth">생년월일</label>
                    <select name="birth" id="birth" title="연도를 선택하세요">
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                    </select> 년
                    <select name="month" title="월을 선택하세요">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                    </select> 월
                    <input type="text" name="day" size="4" value="" title="일을 입력하세요"> 일
                </div> -->
                <!-- <div class="field">
                    <label for="country">국가</label>
                    <select name="country" id="country">
                        <option>선택하세요</option>
                        <option value="1">가나</option>
                        <option value="2">가봉</option>
                        <option value="3">나이지리아</option>
                        <option value="4" selected>대한민국</option>
                        <option value="5">미국</option>
                    </select>
                </div> -->
                <!-- <div class="field">
                    <span>취미는 ?</span>
                    <label>
                        <input type="checkbox" name="book" value="book">
                        독서
                    </label>
                    <label>
                        <input type="checkbox" name="travel" value="travel">
                        여행
                    </label>
                    <label>
                        <input type="checkbox" name="movie" value="movie">
                        영화감상
                    </label>
                    <label>
                        <input type="checkbox" name="running" value="running">
                        달리기
                    </label>
                </div>
                <div class="field">
                    <span>성별</span>
                    <input type="radio" id="male" name="sex" value="male">
                    <label for="male">남</label>
                    <input type="radio" id="female" name="sex" value="female">
                    <label for="female">여</label>
                </div> -->
                <div class="field">
                    <!-- <label for="comments">의견</label> -->
                    <textarea name="comments" id="comments" cols="50" rows="10" placeholder="댓글내용을 입력해주세요."></textarea>
                </div>
                <!-- <div class="field">
                    <label for="userfile">파일첨부</label>
                    <input type="file" name="userfile" id="userfile" multiple>
                </div> -->
            </fieldset>
            <div class="btn_area">
                <button type="submit">등록</button>
                <button type="reset" id="close"><img src="./img/more.png" alt="">목록</button>
            </div>
        </form>
    </div>
<?php
    include 'footer.php';
?>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
$('#close').click(function(){
    window.history.back();
});
</script>