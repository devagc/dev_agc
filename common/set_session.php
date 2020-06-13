<?php
session_start();



include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';



$user_check=$_SESSION['mb_id'];    //세션 uid를 받아서

$ses_sql=mysqli_query($dbConnect, "select mb_id from dev_member where mb_id='$user_check' ");

$row=mysqli_fetch_array($ses_sql);

$login_session=$row['id'];  // 넘어온 값이 db에 있는 지 확인 후



if(!isset($login_session))  // 값이 비었다면 Login 페이지로 이동시킵니다. Session.php를 각 페이지에 include 시킴으로써 세션 구현

{

    // echo "<meta http-equiv='refresh' content='0; url=localhost/dev_dgc/member/login.php'>";

}
?>
