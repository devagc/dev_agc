window.onload = function(){
    function idcheck(){
        var insertId=document.inputForm.id.value;
        alert("아이디는 "+insertId+" 입니다.");
        return;
    }
    function emailcheck(){
        var email1 = document.inputForm.email.value;
        var email2 = document.inputForm.email2.value;
        alert("이메일은 "+email1+email2+" 입니다.");                 return;
    }
    
    function joincheck(){
        var sname = document.inputForm.sname.value;
        var gender = document.inputForm.gender.value;
        var birth1 = document.inputForm.birth1.value;
        var birth2 = document.inputForm.birth2.value;
        var birth3 = document.inputForm.birth3.value;
        var Hobbys = [];
        for(var i=0; i<document.inputForm.hobby.length; i++){
            if(document.inputForm.hobby[i].checked) {
                Hobbys.push(document.inputForm.hobby[i].value);
            }
        }
        alert("이름 : "+sname+"\n"+"성별:"+gender+"\n"
        +"생년월일:"+birth1+"년"+birth2+"월"+birth3+"일"+"\n"
        +"취미:"+Hobbys.join("-"));
        return;
    }
    
    var checkBtn = document.getElementById("check");
    var checkEmail = document.getElementById("check2");
    var joinBtn = document.getElementById("join");
    addEvent(checkBtn, 'click', idcheck);
    addEvent(checkEmail, 'click', emailcheck);
    addEvent(joinBtn, 'click', joincheck);

}



