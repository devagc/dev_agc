<?php
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';
  
  unset($_SESSION['mb_id']);
  unset($_SESSION['mb_email']);

  header("Content-Type: text/html; charset=UTF-8");

  echo "<script>alert('로그아웃 되었습니다.');</script>";
  Header("Location:../index.php");
 ?>