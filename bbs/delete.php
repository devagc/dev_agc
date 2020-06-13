<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

    $sql = "SELECT * FROM dev_notice";
    $result = $dbConnect->query($sql);
    
    

    
        //주소값 맨뒤에 있는 id값을 받아 처리
        $base_URL = $_SERVER['REQUEST_URI'];
        $base_URL = substr($base_URL,30);
        $boardID = (int)$base_URL;
     while($row = mysqli_fetch_array($result)):   
        //유효성 검사
        if($boardID == '' || $boardID == null):
            echo "<script>alert('잘못된 접근입니다.');history.back();</script>";
        elseif($boardID == $row['wr_id']):
            $sql = "DELETE FROM dev_notice where wr_id = {$boardID}";
            $result = $dbConnect->query($sql);
            echo '삭제가 정상적으로 되었습니다. <script>location.href="board.php"</script>';
        elseif($result === false):
            echo '삭제가 정상적으로 이루어지지 않았습니다. 관리자에게 문의해주세요';
        endif;
    endwhile;
?>