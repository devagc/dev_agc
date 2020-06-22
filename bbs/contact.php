<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Counseling.css">
    <link rel="stylesheet" href="./css/m_counseling.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>상담신청</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
</head>
<body>
    <dl class="skip ">
        <dt class="blind"><strong>skip Navigation</strong></dt>
        <dd><a href="#container">skip to Content</a></dd>
    </dl> 
<div class="wrap">
    <div class="customer">
        <div class="title_1">
            <h1>상담신청 <span>궁금하신점을 남겨주세요.</span></h1>
        </div>
        <div class="border_1"></div>
    </div>
<!-- 
    <h1>input 요소의 크기 설정</h1>
	<form class="form">
		<label for="">사용자</label> <br>
		<input type="text" name="username">
		<label for="">사용자</label> <br>
		<input type="password" name="password">
	</form> -->

    <form action="contact_save.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>fieldset legend</legend>
            <div class="title">
                <h3>1. 간단한 정보만 알려주세요</h3>
            </div>
            <div class="field_wrap">
                <div class="field">
                    <label for="text">이름</label> <br>
                    <input type="text" name="name" id="name" maxlength="8" placeholder="" value="" autofocus>
                </div>
                <div class="field">
                    <label for="userpw">연락처</label> <br>
                    <input type="text" name="tel" id="tel" placeholder="" value="">
                </div>
            </div>
            <div class="title">
                <h3>2.어떤 서비스가 필요하신가요? <span>아래 항목을 선택해주세요.</span> </h3>
            </div>
            <div class="field_1">
                <label><input type="checkbox" name="web" value="web"> Wep site (홈페이지 제작)</label>
                <label><input type="checkbox" name="shopping" value="shopping"> Shopping Mall (쇼핑몰 제작)</label>
                <label><input type="checkbox" name="mobile" value="mobile"> Mobile Web (모바일웹 제작)</label>
                <label><input type="checkbox" name="app" value="app"> App (앱제작)</label>
                <label><input type="checkbox" name="others" value="others"> The others (기타)</label>
            </div>
            <div class="title">
                <h3>3.예산과 일정은 어떻게 되나요? <span>아래 항목을 선택해주세요.</span> </h3>
            </div>
            <div class="field_2">
                <!-- <label for="birth">생년월일</label> -->
                <select name="s_v6" id="s_v6" class="select">
                    <option value="">선택해주세요</option>
                    <option value="~300">~300</option>
                    <option value="300~500">300~500</option>
                    <option value="500~1000">500~1000</option>
                    <option value="1000~1500">1000~1500</option>
                    <option value="1500~2000">1500~2000</option>
                    <option value="2000~">2000~</option>
                </select>
                <select name="s_v7" id="s_v7" class="select">
                    <!-- <option value="">선택해주세요</option> -->
                    <option value="60일 이하">60일 이하</option>
                    <option value="60일~90일">60일~90일</option>
                    <option value="90일~120일">90일~120일</option>
                    <option value="120일~150일">120일~150일</option>
                    <option value="150일 이상">150일 이상</option>
                </select>
                <!-- <input type="text" name="day" size="4" value="" title="일을 입력하세요"> 일 -->
            </div>
            <div class="title">
                <h3>4.어떻게 도와드리면 될까요?</h3>
            </div>
            <div class="field_3">
                <!-- <label for="comments">의견</label> -->
                <textarea name="comments" id="comments" cols="50" rows="10"></textarea>
            </div>
            <div class="field_4">
                <label for="userfile">파일첨부</label>
                <input type="file" name="file" id="file" multiple>
            </div>
            <div class="field_3">
                <!-- <label for="comments">의견</label> -->
                <textarea name="comments2" id="comments2" cols="50" rows="10">
1. 개인정보의 처리 목적 <DEV>(이하 ‘데브’)은(는) 다음의 목적을 위하여 개인정보를 처리하고 있으며, 다음의 목적 이외의 용도로는 이용하지 않습니다.
- 고객 가입의사 확인, 고객에 대한 서비스 제공에 따른 본인 식별.인증, 회원자격 유지.관리, 물품 또는 서비스 공급에 따른 금액 결제, 물품 또는 서비스의 공급.배송 등


2. 개인정보의 처리 및 보유 기간
① 데브은 정보주체로부터 개인정보를 수집할 때 동의 받은 개인정보 보유․이용기간 또는 법령에 따른 개인정보 보유․이용기간 내에서 개인정보를 처리․보유합니다.
② 구체적인 개인정보 처리 및 보유 기간은 다음과 같습니다.
- 고객 가입 및 관리 : 서비스 이용계약 또는 회원가입 해지시까지, 다만 채권․채무관계 잔존시에는 해당 채권․채무관계 정산시까지
- 전자상거래에서의 계약․청약철회, 대금결제, 재화 등 공급기록 : 5년 


3. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.

① 정보주체는 데브에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.
1. 개인정보 열람요구
2. 오류 등이 있을 경우 정정 요구
3. 삭제요구
4. 처리정지 요구




4. 처리하는 개인정보의 항목 
① 데브​은 다음의 개인정보 항목을 처리하고 있습니다.

- 필수항목 : 이메일, 휴대전화번호, 비밀번호, 로그인ID, 이름
- 선택항목 : 소속, 지점(대리점)명





5. 개인정보의 파기 

데브은 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.

- 파기절차
이용자가 입력한 정보는 목적 달성 후 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다.
- 파기기한
이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.




6. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항

① 데브은 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다. 

② 쿠키는 웹사이트를 운영하는데 이용되는 서버가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다. 

가. 쿠키의 사용 목적 : 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다. 

나. 쿠키의 설치•운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다. 다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.


7. 개인정보 보호책임자

① 데브은 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.

▶ 개인정보 보호책임자 
성명 : 한권수
직책 : 대표
직급 : 대표
연락처 : rnjsdms424@gmail.com ② 정보주체께서는 데브의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 데브은 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.




8. 개인정보 처리방침 변경

①이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.




9. 개인정보의 안전성 확보 조치 

데브 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.

1. 정기적인 자체 감사 실시
개인정보 취급 관련 안정성 확보를 위해 정기적(년 1회)으로 자체 감사를 실시하고 있습니다.
2. 개인정보 취급 직원의 최소화 및 교육
개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.
3. 내부관리계획의 수립 및 시행
개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.
4. 해킹 등에 대비한 기술적 대책
데브은 해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안프로그램을 설치하고 주기적인 갱신·점검을 하며 외부로부터 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다.
5. 개인정보의 암호화
이용자의 개인정보는 비밀번호는 암호화 되어 저장 및 관리되고 있어, 본인만이 알 수 있으며 중요한 데이터는 파일 및 전송 데이터를 암호화 하거나 파일 잠금 기능을 사용하는 등의 별도 보안기능을 사용하고 있습니다.
6. 접속기록의 보관 및 위변조 방지
개인정보처리시스템에 접속한 기록을 최소 6개월 이상 보관, 관리하고 있으며, 접속 기록이 위변조 및 도난, 분실되지 않도록 보안기능 사용하고 있습니다.
7. 개인정보에 대한 접근 제한
개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여,변경,말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.
8. 문서보안을 위한 잠금장치 사용
개인정보가 포함된 서류, 보조저장매체 등을 잠금장치가 있는 안전한 장소에 보관하고 있습니다.
9. 비인가자에 대한 출입 통제
개인정보를 보관하고 있는 물리적 보관 장소를 별도로 두고 이에 대해 출입통제 절차를 수립, 운영하고 있습니다.
                </textarea>
            </div>
            <div class="field_5">
                <label><input type="checkbox" name="agree" value="" class="agree"> 위 개인정보처리방침에 동의합니다.</label>
            </div>
        </fieldset>
        <div class="btn_area">
            <button type="submit" class="submit">등록</button>
            <button type="reset">취소</button>
        </div>
    </form>
</div>
    <!-- footer -->
    <div id="footer">
        <div class="address">
            <div class="logo">
                <a href="index.html"><h1><img src="img/logo1.png" alt=""></h1></a>
            </div>
            <div class="nav">
                <ul>
                    <li>웹 퍼블리셔 한대수 E-mali : gkseotn54@naver.com</li>
                    <li>웹 퍼블리셔 한권수 E-mali : gkseotn54@naver.com</li>
                </ul>
            </div>
        </div>
    </div>
<!-- //footer -->
<script src="./js/jquery-3.4.1.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/index.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>

<script>
    $(document).ready(function(){
    //nav
    $('#header .nav .btn_menu').click(function(){
        var $nav = $('#header .nav ul');
        if($nav.hasClass('active')) {
            $('#header .nav ul').slideUp(300);
            $nav.removeClass('active');
        }
        else {
            $('#header .nav ul').slideDown(300);
            $nav.addClass('active');
        }
        
    });
// contact_save.php
// $('.submit').attr('action', 'contact_save.php').submit();
// 동의함 checkbox 선택시 value 값에 대입
$('.agree').on('click',function(){
    $('.agree').val('동의함');
});

    // form tag value check
    $('.submit').click(function(){
        var name = $('#name').val();
        var tel = $('#tel').val();
        var s_v6 = $('#s_v6').val();
        var agree = $('.agree').val();
        console.log(agree);
        if(name == ''){
            alert('이름을 적어주세요!');
            $("#name").focus();
            return false;
        }else if(tel == ''){
            alert('전화번호를 적어주세요!');
            $("#tel").focus();
            return false;
        }else if(s_v6 == ''){
            alert('기간을 선택해주세요!');
            $("#s_v6").focus();
            return false;
        }else if(agree == ''){
            alert('개인정보처리방침에 동의해주세요!');
            $(".agree").focus();
            return false;
        }
    });
    console.log($("#file").val());
});
</script>