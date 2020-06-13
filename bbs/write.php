<?php
    include 'menu.php';
?>
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
                <li><a href="board.php">공지사항</a></li>
                <li class="li"><a href="#">업데이트</a></li>
                <li class="li"><a href="#">이벤트</a></li>
            </ul>
        </div>
    </div>
    <!-- //visual -->
    <div class="wrea">
        <form action="writeSave.php" method="POST" name="ckeditor" enctype="multipart/form-data">
            <fieldset>
                <legend>fieldset legend</legend>
                <div class="field">
                    <ul class="check">
                        <li>
                            <input type="checkbox" id="notice" name="notice" value="1">
                            <label for="notice">공지</label>
                        </li>
                        <li>
                            <input type="checkbox" id="secret" name="secret" value="secret">
                            <label for="secret">비밀글</label>
                        </li>
                    </ul>
                </div>
                <div class="field">
                    <!-- <label for="text">제목</label> -->
                    <input type="text" name="title" id="title" placeholder="제목을 입력하세요." value="" autofocus>
                </div>
                <div class="field">
                    <!-- <label for="comments">의견</label> -->
                    <textarea class="ckeditor" name="contents" id="editor1" cols="1" rows="15"></textarea>
                </div>
                <div class="field">
                    <!-- <label for="userfile">파일첨부</label> -->
                    <input type="file" name="imgFile" id="userfile" multiple>
                </div>
                <div class="field">
                    <!-- <label for="userfile">파일첨부</label> -->
                    <input type="text" name="link1" id="link1" placeholder="링크 : http:// 는 제외해주세요">
                    <input type="text" name="link2" id="link2" placeholder="링크 : http:// 는 제외해주세요">
                    <input type="text" name="youtube" id="youtube" placeholder="YOUTUBE 동영상 링크를 복사해서 붙여넣어주세요">
                </div>
            </fieldset>
            <div class="btn_area">
                <button type="submit">등록</button>
                <button type="reset" id="close">취소</button>
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