<?php
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

    $name = $_POST['name'];
    $email = $_POST['userEmail'];
    $comments = $_POST['comments'];
    
    //유효성 검사
    if($name == '' || $name == null):
        echo "<script>alert('이름을 입력해주세요');history.back();</script>";
        exit;
    elseif($email == '' || $email == null):
        echo "<script>alert('이메일을 입력해주세요');history.back();</script>";
        exit;
    elseif($comments == '' || $comments == null):
        echo "<script>alert('상담내용을 입력해주세요');history.back();</script>";
        exit;
    endif;

    //이메일 유효성 검사
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Content-Type: text/html; charset=UTF-8");
  
        echo "<script>alert('올바른 이메일 형식이 아닙니다.');history.back();</script>";
          exit;
    }

    
    $regTime = date('Y-m-d H:i:s');
    // $regTime = time();
    // var_dump($regTime);
    $sql = "INSERT INTO dev_con(wr_content,wr_name,wr_email,wr_datetime)";
    $sql .= "VALUES('{$comments}','{$name}','{$email}','{$regTime}');";
    $result = $dbConnect->query($sql);
    
    if($result){
        echo "<script>alert('상담신청이 완료되었습니다.');location.href='../index.php';</script>";
        // Header("Location:../index.php");
    }
?>