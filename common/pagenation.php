<?php 
    // include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

    $sql = " SELECT count(wr_id) FROM dev_notice";
    $result = $dbConnect->query($sql);
    $conTotalCount = $result->fetch_array(MYSQLI_ASSOC);
    $conTotalCount = $conTotalCount['count(wr_id)'];

    //총 페이지 수
    $totalPage = ceil($conTotalCount / $numView);
?>

<nav>
    <ul class="pagination">
        <li>
            <a href="board.php?page=1" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
           //현재 페이지의 앞 뒤 페이지 수 표시
		    $pageTerm = 5;
		
            //처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
            $startPage = $page - $pageTerm; 
            //음수일 경우 처리
            if($startPage < 1){
                $startPage = 1;
            }

            //처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
            $lastPage = $page + $pageTerm;

            //마지막 페이지의 수보다 클 경우 처리
            if($lastPage >= $totalPage){
                $lastPage = $totalPage;
            }

            for($i = $startPage; $i <= $lastPage; $i++){
            $nowPageColor = 'unset';
            if($i == $page){
                $nowPageColor = 'hotpink';
            }
        ?>
            <li><a href="board.php?page=<?=$i?>" style="color:<?=$nowPageColor?>"><?=$i?></a></li>
        <?php
            }
        ?>
        <li>
            <a href="board.php?page=<?=$totalPage?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>