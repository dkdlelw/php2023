<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원가입 페이지</title>
        <?php include "../include/head.php" ?>
    </head>
    <body class="gray">
        <?php include "../include/skip.php" ?>
        <!-- //skip -->
        <?php include "../include/header.php" ?>
        <!-- //header -->
        <main id="main" class="container">
            <div class="intro__inner center bmStyle">
                <picture class="intro__images">
                    <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                    <img src="../assets/img/join01.png" alt="회원가입 이미지">
                </picture>
                <p class="intro__text">
                    회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
                </p>
            </div>
            <!-- //intro__inner -->
            <div class="join__inner">
                <h2>이용약관</h2>
                <div class="index">
                    <ul>
                        <li>1</li>
                        <li class="active">2</li>
                        <li>3</li>
                    </ul>
                </div>
                <div class="join__form">
                    <form action="joinResult.php" name="joinResult" method="post" onsubmit="return joinChecks()">
                        <fieldset>
                            <legend class="blind">회원가입 영역</legend>
                            <div>
                                <label for="youName" class="required">이름</label>
                                <input class="inputStyle" type="text" id="youName" name="youName" placeholder="이름을 입력해주세요" maxlength="5" required>
                                <p class="msg" id="youNameComment"><!-- 이름은 한글로만 작성할 수 있습니다. --></p>
                            </div>
                            <div class="over">
                                <label for="youEmail" class="required">이메일</label>
                                <input class="inputStyle" type="email" id="youEmail" name="youEmail" placeholder="이메일을 입력해주세요"required>
                                <a href="#c" class="youCheck" onclick="emailChecking()">이메일 중복검사</a>
                                <p class="msg" id="youEmailComment"><!-- 이미 등록되어있는 이메일 입니다. 다시확인해주세요. --></p>
                            </div>
                            <div class="over">
                                <label for="youNick" class="required">닉네임</label>
                                <input class="inputStyle" type="text" id="youNick" name="youNick" placeholder="닉네임을 입력해주세요" required>
                                <a href="#c" class="youCheck">닉네임 중복검사</a>
                                <p class="msg" id="youNickComment"><!-- 이미 등록되어있는 닉네임입니다. --></p>
                            </div>
                            <div>
                                <label for="youPass" class="required">비밀번호</label>
                                <input class="inputStyle" type="password" id="youPass" name="youPass" placeholder="비밀번호를 입력해주세요" required>
                                <p class="msg" id="youPassComment"><!-- 문자, 특수기호, 숫자가 들어가야합니다. --></p>
                            </div>
                            <div>
                                <label for="youPassC" class="required">비밀번호 확인</label>
                                <input class="inputStyle" type="password" id="youPassC" name="youPassC" placeholder="비밀번호를 다시한번 입력해주세요" required>
                                <p class="msg" id="youPassCComment"><!-- 비밀번호가 일치하지 않습니다. --></p>
                            </div>
                            <div>
                                <label for="youBirth">생년월일</label>
                                <input class="inputStyle" type="text" id="youBirth" name="youBirth" placeholder="YYYY-MM-DD" required>
                                <p class="msg" id="youBirthComment"><!-- 생년월일이 일치하지 않습니다. --></p>
                            </div>
                            <div>
                                <label for="youPhone">연락처</label>
                                <input class="inputStyle" type="text" id="youPhone" name="youPhone" placeholder="연락처를 입력해주세요" maxlength="15" required>
                                <p class="msg" id="youPhoneComment"><!-- 휴대폰 번호를 입력해주세요 --></p>
                            </div>
                            <button type="submit" class="btnStyle">회원가입 완료</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
        <!-- //main -->
        <?php include "../include/footer.php" ?>
        <!-- //footer -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        let isEmailCheck = false;
        function emailChecking(){
            let youEmail = $("#youEmail").val();
            if(youEmail == null || youEmail == ''){
                $("#youEmailComment").text("* 이메일을 입력해주세요");
            }else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youEmail" : youEmail, "type" : "isEmailCheck"},
                    dataType : "json",
                    success : function(data){
                        if(data.result == "good"){
                            $("#youEmailComment").text("* 사용 가능한 이메일 입니다");
                            isEmailCheck = true;
                        }else {
                            $("#youEmailComment").text("* 이미 존재하는 이메일 입니다");
                            isEmailCheck = false;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }
        function joinChecks(){
            //이름 유효성 검사
            if($("#youName").val() == ''){
                $("#youNameComment").text("* 이름을 입력해주세요!");
                $("#youName").focus();
                return false;
            }
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("* 이름은 한글만 사용 가능합니다.");
                $("#youName").val('');
                $("#youName").focus();
                return false;
            }

            // 이메일 유효성 검사
            if($("#youEmail").val() == ''){
                $("#youEmailComment").text("* 이메일을 입력해주세요!");
                $("#youEmail").focus();
                return false;
            }
            let getYouEmail =  RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i);
            if(!getYouEmail.test($("#youEmail").val())){
                $("#youEmailComment").text("* 이메일 형식에 맞게 작성해주세요!");
                $("#youEmail").val('');
                $("#youEmail").focus();
                return false;
            }
                // 닉네임 유효성 검사
            if($("#youNick").val() == ''){
                $("#youNickComment").text("* 닉네임을 입력해주세요!");
                $("#youNick").focus();
                return false;
            }
            let getYouNick =  RegExp(/^[가-힣]+$/);
            if(!getYouNick.test($("#youNick").val())){
                $("#youNickComment").text("* 닉네임은 한글 또는 숫자만 사용 가능합니다.");
                $("#youNick").val('');
                $("#youNick").focus();
                return false;
            }
                // 비밀번호 유효성 검사
            if($("#youPass").val() == ''){
                $("#youPassComment").text("* 비밀번호를 입력해주세요!");
                $("#youPass").focus();
                return false;
            }
            // 8~20자 이내, 공백X, 영문, 숫자 , 특수문자
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text("8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }
                    // 비밀번호확인 유효성 검사
            if($("#youPassC").val() == ''){
                $("#youPassCComment").text("* 비밀번호를 입력해주세요!");
                $("#youPassC").focus();
                return false;
            }
            // 동일한지 체크
            if($("#youPass").val() != $("#youPassC").val()){
                $("#youPassCComment").text("* 비밀번호가 일치하지 않습니다.")
                return false;
            }
            // 생년월일 유효성검사
            if($("#youBirth").val() == ''){
                $("#youBirthComment").text("* 생년월일 입력해주세요!");
                $("#youBirth").focus();
                return false;
            }
            let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getYouBirth.test($("#youBirth").val())){
                $("#youBirthComment").text("* 생년월일 형식이 정확하지 않습니다.(YYYY-MM-DD)");
                $("#youBirth").val('');
                $("#youBirth").focus();
                return false;
            }
            // 연락처 유효성검사
            if($("#youPhone").val() == ''){
                $("#youPhoneComment").text("* 생년월일 입력해주세요!");
                $("#youPhone").focus();
                return false;
            }
            let getYouPhone= RegExpRegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getYouPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("* 연락처 형식이 정확하지 않습니다.(000-0000-0000)");
                $("#youPhone").val('');
                $("#youPhone").focus();
                return false;
            }
        }
    </script>
    </body>
</html>