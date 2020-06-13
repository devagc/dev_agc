<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

    $notice = "";
    $secret = "";
    
    //null값도 가능
    // if(empty($_POST['notice']) || empty($_POST['notice']) || empty($_POST['link1']) || empty($_POST['link2']) || empty($_POST['youtube'])):

    // else:
    //     $notice = $_POST['notice'];
    //     $secret = $_POST['secret'];
    //     $link1 = $_POST['link1'];
    //     $link2 = $_POST['link2'];
    //     $youtube = $_POST['youtube'];
    // endif;
    $notice = (empty($_POST['notice'])) ? 0 : $_POST['notice'];
    $secret = (empty($_POST['secret'])) ? 0 : $_POST['secret'];
    $link1 = (empty($_POST['link1'])) ? 0 : $_POST['link1'];
    $link2 = (empty($_POST['link2'])) ? 0 : $_POST['link2'];
    $youtube = (empty($_POST['youtube'])) ? 0 : $_POST['youtube'];

    //무조건 넘어와야 되는 값
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    
    if($_FILES['imgFile']['type'] == 'image/jpeg'):
        $_FILES['imgFile']['type'] = 'image/jpg';
    endif;
    $myTempFile = $_FILES['imgFile']['tmp_name'];
    // var_dump($_FILES);
    //유효성 검사
    if($title == null || $title == ''):
        echo "<script>alert('제목을 입력하세요');history.back();</script>";
    elseif($contents == null || $contents == ''):
        echo "<script>alert('내용을 입력하세요.');history.back();</script>";
    elseif(preg_match("/<script>/",$title) || preg_match("/<script>/",$contents)):
        echo "<script>alert('비정상적인 접근입니다.');history.back();</script>";
    else:
        // $title = $dbconnect->real_escape_string($title);
        // $contents = $dbconnect->real_escape_string($contents);
        
        $memberID = $_SESSION['mb_id'];
        $memberName = $_SESSION['mb_name'];

        $regTime = date("Y/m/d/h/i/s");

       echo "<br>";
        if(!empty($myTempFile)):
             //파일 타입 및 확장자 구하기
            $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);
            //파일 이름
            $fileName = $_FILES['imgFile']['name'];
            $fname = substr($fileName, 0, -4);
            //파일 타입
            $fileType = $fileTypeExtension[0];
            //파일 확장자
            $extension = $fileTypeExtension[1];
            //확장자 검사
            $isExtGood = false;
            switch($extension){	  
            case 'jpeg':
            case 'bmp':
            case 'gif':
            case 'png':
            case 'jpg':
            $isExtGood = true;
            break;
            default:
                echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch";
                exit;
                break;
            }    
        
        
            if($fileType == 'image'):
                if($isExtGood):
                    //임시 파일 옮길 저장 및 파일명
                    $myFile = "fileimg/{$fname}.{$extension}";

                    //임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
                    $imageUpload = move_uploaded_file($myTempFile,$myFile);

                    //업로드 성공 여부 확인
                    // if($imageUpload == false):
                    //     echo "<script>alert('파일업로드에 실패 하였습니다.');history.back();</script>";
                    // endif;
                else:
                    //확장자가 jpg, bmp, gif, png가 아닐때
                    echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. -else";
                    exit;
                endif;
            else:
                echo "이미지 파일이 아닙니다.";
                exit;
            endif;
        endif;
        if(empty($fileName)):
            $fileName = 0;
        endif;
        $sql = "INSERT INTO dev_notice(wr_subject,wr_content,mb_id,wr_name,wr_datetime,wr_last,wr_1,wr_2,wr_3,wr_5,wr_6,wr_7)
                VALUES(
                '{$title}',
                '{$contents}',
                '{$memberID}',
                '{$memberName}',
                '{$regTime}',
                '{$regTime}',
                '{$notice}',
                '{$secret}',
                '{$fileName}',
                '{$link1}',
                '{$link2}',
                '{$youtube}'
                )";

        $result = $dbConnect->query($sql);
        if($result === false):
            echo "저장하는 과정에서 문제가 생겼습니다. 개발자에게 문의해주세요";
        else:
            $sql = "SELECT wr_id FROM dev_notice order by wr_id desc";
            $result = $dbConnect->query($sql);
            $row = mysqli_fetch_array($result);
            $boardID = $row['wr_id'];
            echo "<script>alert('완료했습니다');location.href='view.php?wr_id={$boardID}';</script>";
        endif;
    endif;
?>