<?php
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/set_session.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

  $id = $_POST['id'];
  $pw = $_POST['pw'];
  //유효성 검사
  //이메일 검사
//   if(!filter_var($id, FILTER_VALIDATE_EMAIL)){
//     header("Content-Type: text/html; charset=UTF-8");

//     echo "<script>alert('올바른 아이디가 아닙니다.');history.back();</script>";
//     exit;
//   }

if($id == null || $id == ''):
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('올바른 아이디가 아닙니다.');history.back();</script>";
    exit;
endif;

  //비밀번호 검사
  if($pw == null || $pw == ''){
    header("Content-Type: text/html; charset=UTF-8");

    echo "<script>alert('비밀번호를 입력해주세요');history.back();</script>";
    exit;
  }

  $pw = sha1('php200'.$pw);

  $sql = "SELECT mb_id, mb_name, mb_no FROM dev_member ";
  $sql .= "WHERE mb_id = '{$id}' AND mb_password = '{$pw}'";
  $result = $dbConnect->query($sql);

  if($result){
    if($result->num_rows == 0){
      header("Content-Type: text/html; charset=UTF-8");

      echo "<script>alert('로그인 정보가 일치하지 않습니다.');history.back();</script>";
      exit;
    }else{
      $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
      $_SESSION['mb_id'] = $memberInfo['mb_id'];
      $_SESSION['mb_name'] = $memberInfo['mb_name'];
      $_SESSION['mb_email'] = $memberInfo['mb_email'];
      Header("Location:../index.php");

    }
  }
 ?>
