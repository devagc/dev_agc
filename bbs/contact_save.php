<?php
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev_agc/common/connection.php';

    // form에서 넘어오는 값을 변수에 담아준다
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    // 필수 입력값이 아닌것은 따로 처리를 한다
    if(!empty($_POST['web'])):
        $web = $_POST['web'];
    else:
        $web = "선택안함";
    endif;

    if(!empty($_POST['shopping'])):
        $shopping = $_POST['shopping'];
    else:
        $shopping = "선택안함";
    endif;

    if(!empty($_POST['mobile'])):
        $mobile = $_POST['mobile'];
    else:
        $mobile = "선택안함";
    endif;

    if(!empty($_POST['app'])):
        $app = $_POST['app'];
    else:
        $app = "선택안함";
    endif;

    if(!empty($_POST['others'])):
        $others = $_POST['others'];
    else:
        $others = "선택안함";
    endif;

    if(!empty($_POST['s_v7'])):
        $s_v7 = $_POST['s_v7'];
    else:
        $s_v7 = "선택안함";
    endif;

    if(!empty($_POST['comments'])):
        $comments = $_POST['comments'];
    else:
        $comments = "선택안함";
    endif;
    
    $s_v6 = $_POST['s_v6'];
    $agree = $_POST['agree'];
    if(empty($name)):
        echo "<script>alert('이름을 입력하세요');history.back();</script>";
    elseif(empty($tel)):
        echo "<script>alert('전화번호를 입력하세요');history.back();</script>";
    elseif(empty($s_v6)):
        echo "<script>alert('기간을 선택하세요');history.back();</script>";
    elseif(empty($agree)):
        echo "<script>alert('개인정보처리방침에 동의해주세요');history.back();</script>";
    else:
        // 유효성 검사에서 아무 이상이 없을때 값 전달 받기
        $regTime = date("Y-m-d h:i:s");
        if($_FILES['file']['type'] == 'image/jpeg'):
            $_FILES['file']['type'] = 'image/jpg';
        endif;
        $myTempFile = $_FILES['file']['tmp_name'];
        // 파일 유효성 체크
        if(!empty($myTempFile)):
            // echo $userfile;
            //파일 타입 및 확장자 구하기
            $fileTypeExtension = explode("/", $_FILES['file']['type']);
            //파일 이름
            $fileName = $_FILES['file']['name'];
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

        $sql = "INSERT INTO dev_contact(wr_subject,wr_content,wr_name,wr_datetime,wr_last,wr_1,wr_2,wr_3,wr_4,wr_5,wr_6,wr_7,wr_8,wr_9)
                VALUES(
                '{$name}',
                '{$comments}',
                '{$name}',
                '{$regTime}',
                '{$regTime}',
                '{$web}',
                '{$shopping}',
                '{$mobile}',
                '{$app}',
                '{$others}',
                '{$s_v6}',
                '{$s_v7}',
                '{$fileName}',
                '{$agree}'
                )";

        $result = $dbConnect->query($sql);
        // debuging
        // var_dump($sql);
        if($result === false):
            echo "저장하는 과정에서 문제가 생겼습니다. 개발자에게 문의해주세요";
        else:
            echo "<script>alert('상담신청이 완료되었습니다.');location.href='../index.php';</script>";
        endif;
    endif;
?>