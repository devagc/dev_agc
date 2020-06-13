<!-- visual -->
<div id="visual">
        <div class="visual_nav">
            <div class="text">
                <h1>공지사항</h1>
                <p><span>Dev</span>  의 새로운 소식을 만나보세요.</p>
            </div>
        </div>
    </div>
    <div id="visual_1">
        <div class="visual_nav">
            <ul>
                <li><a href="board.php" style="background-color:#fff;color:#000;">공지사항</a></li>
                <li><a href="qa.php">Q & A</a></li>
                <li><a href="#">이벤트</a></li>
            </ul>
        </div>
    </div>
    <!-- //visual -->
    
    <!-- content -->
    <div class="content">
        <h1>중요안내</h1>
        <table class="table">
            <tr>
            <p><td class="td">오늘의 공지사항</td></p>
            </tr>
            <tr>
                <td>구분</td>
                <td>제목</td>
                <td>작성일</td>
                <td>조회수</td>
            </tr>
            <?php 
              if(isset($_GET['page'])){
                $page = (int) $_GET['page'];
              }else{
                $page = 1;
              }

              $numView = 5;
              $firstLimiValue = ($numView * $page) - $numView;

              $sql = "SELECT wr_id, wr_subject, mb_id, wr_datetime, wr_last, wr_1, wr_2, wr_4 FROM dev_notice";
              $sql .= " ORDER BY wr_id DESC LIMIT {$firstLimiValue}, {$numView}";
              $result = $dbConnect->query($sql);
              while($row = mysqli_fetch_array($result)){
                $escaped_bid = htmlspecialchars($row['wr_id']);
                $escaped_bsubject = htmlspecialchars($row['wr_subject']);
                $escaped_bdatetime = htmlspecialchars($row['wr_datetime']);
                if($row['wr_4'] == '' || $row['wr_4'] == null):
                  $row['wr_4'] = 0;
                endif;
            ?>
            <tr>
                <td><?=$escaped_bid?></td>
                <td><a href="view.php?wr_id=<?=$escaped_bid?>"><?=$escaped_bsubject?></a></td>
                <td><?=$escaped_bdatetime?></td>
                <td><?=$row['wr_4']?></td>
            </tr>
            <?php
              }
            ?>
        </table>
        <?php 
          if(!empty($_SESSION['mb_id'])){
            if($_SESSION['mb_id'] == 'admin' && $_SESSION['mb_name'] == '최고관리자'){
        ?>
        <div class="nomber">
            <a href="write.php"><img src="./img/text.png" alt="">글쓰기</a>
        </div>
        <?php
            } 
          }
        ?>
        <form name="search" method="get" action="SearchResult.php" class="form">
          <div class="from">
              <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="serach" placeholder="검색하세요...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">검색</button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
          </div>
        </form>
        <!-- pagenation -->
        <?php 
          include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/pagenation.php';
        ?>