<?php
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

//   id
//   pw
//   pw2
//   name
//   email
//   phone

  $id = $_POST['id'];
  $pw1 = $_POST['pw'];
  $pw2 = $_POST['pw2'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['phone'];

//유효성 검사

// id 유효성검사
if($id == null || $id == ''):
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('올바른 아이디 형식이 아닙니다.');history.back();</script>";
    exit;
endif;
//이메일 검사
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Content-Type: text/html; charset=UTF-8");

      echo "<script>alert('올바른 이메일 형식이 아닙니다.');history.back();</script>";
	    exit;
  }

//비밀번호 검사
if($pw1 == $pw2){
  $pw = $pw1;
}else{
  header("Content-Type: text/html; charset=UTF-8");

  echo "<script>alert('비밀번호가 다릅니다.');history.back();</script>";
  exit;
}
//비밀번호 암호화
$pw = sha1('php200'.$pw);

//이메일 중복 검사
$isIdCheck = false;

$sql = "SELECT mb_id FROM dev_member WHERE mb_id = '{$id}'";
$result = $dbConnect->query($sql);

if($result){
  $count = $result->num_rows;
  if($count == 0){
    $isIdCheck = true;
  }else{
    header("Content-Type: text/html; charset=UTF-8");

    echo "<script>alert('이미 존재하는 아이디 입니다.');history.back();</script>";
    exit;
  }
}else{
  header("Content-Type: text/html; charset=UTF-8");

  echo "<script>alert('에러발생 : 관리자 문의 요망');history.back();</script>";
  exit;
}
// INSERT INTO dev_member(mb_id,mb_password,mb_name,mb_hp,mb_datetime)
// VALUES('gksrnjstn3','한권수','a1s2d3z4x5c6',01024792736,'2020-03-22 03:08:15')

$regTime = date('Y-m-d H:i:s');
if($isIdCheck == true){
  $regTime = time();
  $sql = "INSERT INTO dev_member(mb_id,mb_password,mb_name,mb_hp,mb_datetime)";
  $sql .= "VALUES('{$id}','{$pw}','{$name}',{$tel},{$regTime});";
  $result = $dbConnect->query($sql);

  if($result){
    $_SESSION['mb_id'] = $dbConnect->insert_id;
    $_SESSION['mb_name'] = $name;
    Header("Location:../index.php");
  }else{
    header("Content-Type: text/html; charset=UTF-8");

    echo "<script>alert('회원가입 실패 - 관리자에게 문의');history.back();</script>";
    exit;
  }
}else{
  header("Content-Type: text/html; charset=UTF-8");

  echo "<script>alert('아이디 중복값입니다.');history.back();</script>";

}
 ?>
