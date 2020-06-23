<?php 
    
    // include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';
    // /dev_agc/bbs/view.php
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/setCookie.php';
    // server check
    $host_check = $_SERVER['HTTP_HOST'];
    $base_URL = $_SERVER['REQUEST_URI'];
    $base_URL = substr($base_URL,13);
    // local search 때문에 만들어줌
    $base_URL2 = substr($base_URL,0,23);
    $base_URL3 = substr($base_URL,0,14);
    
    // $real_sever = "gksrnjstn31.cafe24.com/bbs/board.php";
    // $real_sever = substr($real_sever, 27);

    $real_sever = $_SERVER['HTTP_HOST'];
    $real_sever .= $_SERVER['REQUEST_URI'];
    $real_sever = substr($real_sever, 27);
    
    // 실섭 search 때문에 만들어줌
    $real_sever2 = substr($real_sever, 0, 23);
    $real_sever3 = substr($real_sever, 0, 14);

    $sql = " SELECT count(wr_id) FROM dev_notice";
    $result = $dbConnect->query($sql);
    $conTotalCount = $result->fetch_array(MYSQLI_ASSOC);
    $conTotalCount = $conTotalCount['count(wr_id)'];

    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
      }else{
        $page = 1;
      }

      $numView = 5;
      
      $firstLimiValue = ($numView * $page) - $numView;
    //총 페이지 수
    $totalPage = ceil($conTotalCount / $numView);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>공지사항</title>
    <?php 
    if(!empty($_GET['wr_id'])):
        $boardID = $_GET['wr_id'];
    else:
        $boardID = 0;
    endif;

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

        $sty_m = "";
        if($host_check == 'localhost'):
            if($base_URL == 'board.php'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($base_URL == 'view.php'):
                $sty = 'container';
                $sty_m = 'container_m';
            elseif($base_URL == 'write.php'):
                $sty = 'content';
                $sty_m = 'content_m';
            elseif($base_URL == 'view.php?wr_id='.$boardID):
                $sty = 'container';
                $sty_m = 'container_m';
            elseif($base_URL3 == 'board.php?page'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($base_URL2 == 'SearchResult.php?serach'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($base_URL2 == 'qa.php'):
                $sty = 'about';
                $sty_m = 'about_m';
            endif;
        else:
            if($real_sever == 'board.php'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($real_sever == 'view.php'):
                $sty = 'container';
                $sty_m = 'container_m';
            elseif($real_sever == 'write.php'):
                $sty = 'content';
                $sty_m = 'content_m';
            elseif($real_sever == 'view.php?wr_id='.$boardID):
                $sty = 'container';
                $sty_m = 'container_m';
            elseif($real_sever3 == 'board.php?page'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($real_sever2 == 'SearchResult.php?serach'):
                $sty = 'about';
                $sty_m = 'about_m';
            elseif($real_sever == 'qa.php'):
                $sty = 'about';
                $sty_m = 'about_m';
            endif;
        endif;
    }
    
    ?>
    
    <!-- <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/about_m.css">
    <link rel="stylesheet" href="./css/container.css">
    <link rel="stylesheet" href="./css/container_m.css">
    <link rel="stylesheet" href="./css/content.css">
    <link rel="stylesheet" href="./css/content_m.css"> -->

    <link rel="stylesheet" href="./css/<?php echo $sty; ?>.css">
    <link rel="stylesheet" href="./css/<?php echo $sty_m; ?>.css">
    <link rel="icon" href="./img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
    <?php 
        if($base_URL == 'write.php') {
    ?>
        <script src="ckeditor/ckeditor.js"></script>
    <?php
        }
    ?>
    <style>
    <?php 
        if($real_sever2 == 'SearchResult.php?serach'):
    ?>
        #header{
            margin-bottom:3%;
        }
    <?php endif; ?>
    </style>
</head>
