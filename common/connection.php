<?php
header('Content-Type: text/html; charset=utf-8');

  $host = "localhost";
  $user = "root";
  $pw = "root";
  $dbName = "dev";
  $dbConnect = new mysqli($host, $user, $pw, $dbName);
  $dbConnect->set_charset("utf-8");

  if(mysqli_connect_errno()){
    echo "데이터베이스 접속 실패";
  }
 ?>
