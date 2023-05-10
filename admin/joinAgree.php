<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

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
                <img src="../assets/img/join02.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- //intro__inner -->
        <div class="join__inner container">
            <h2>회원가입</h2>
            <div class="index">
                <ul>
                    <li  class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div>
                    <h3 class="blind">[회원가입 이용약관]</h3>
                    <div class="scroll">
                        제1조 (목적)<br>
                        이 약관은 회원이 회사가 제공하는 서비스를 이용함에 있어 회사와 회원간의 권리와 의무, 책임사항 등을 규정함을 목적으로 합니다.<br><br>

                        제2조 (정의)<br>

                        이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br>
                        ① "회사"란 서비스를 제공하는 주체를 의미합니다.<br>
                        ② "회원"이란 이 약관에 따라 회사와 이용계약을 체결하고 회사가 제공하는 서비스를 이용하는 자를 의미합니다.<br>
                        ③ "서비스"란 회사가 제공하는 모든 서비스를 의미합니다.<br>
                        ④ "아이디(ID)"란 회원 식별과 서비스 이용을 위하여 회원이 선정하고 회사가 승인하는 영문자, 숫자, 특수문자의 조합을 의미합니다.<br>
                        ⑤ "비밀번호"란 회원이 부여 받은 아이디와 일치된 회원임을 확인하고 회원의 비밀보호를 위해 회원 자신이 설정한 문자 또는 숫자의 조합을 의미합니다.<br>
                        ⑥ "게시물"이란 회원이 서비스를 이용함에 있어 회사가 제공하는 각종 게시판, 블로그 등에 게시, 등록한 글, 사진, 동영상 및 각종 파일과 링크 등을
                        의미합니다.<br><br>
                        제3조 (이용 계약 체결)<br>

                        이용계약은 회원이 이 약관의 내용에 대해 동의하고 회사가 정한 가입 양식에 따라 회원정보를 기입한 후 가입을 완료함으로써 체결됩니다.<br>
                        회사는 다음과 같은 사유가 있을 경우 이용 계약 체결을 거부하거나, 회원 가입을 취소할 수 있습니다.<br>
                        ① 이용자가 본 약관에 의거한 이용계약 해지 후 재가입을 신청하는 경우<br>
                        ② 이용계약 신청서의 내용을 허위로 기재한 경우<br>
                        ③ 회사가 정한 회원 자격요건을 만족하지 않거나, 만 14세 미만인 경우<br>
                        ④ 기타 회사가 정한 이용신청요건이 미비한 경우<br><br>
                        제4조 (회원 정보의 변경 및 관리)<br>

                        회원은 개인정보 수정란을 통해 언제든지 본인의 개인정보를 열람하고 수정할 수 있습니다.<br>
                        회원은 아이디와 비밀번호를 관리할 책임이 있으며, 제3자에게 유출되지 않도록 관리해야 합니다.<br>
                        3. 회원은 자신의 개인정보가 변경되었을 경우 즉시 회사에 대하여 회원 정보 수정을 요청하여야 합니다.<br>

                        회사는 회원이 제공한 정보에 대하여 정보의 정확성, 진실성, 최신성을 확보하기 위하여 노력하며, 회원이 정보를 변경하지 않음으로 인하여 발생하는 손해에 대하여 책임을 지지
                        않습니다.<br><br>
                        제5조 (서비스 이용)<br>

                        서비스 이용은 회원이 제3조에 따라 이용계약을 체결한 후 이용 가능합니다.<br>
                        회원은 본인의 아이디(ID)와 비밀번호를 사용하여 서비스를 이용할 수 있으며, 이를 타인에게 양도할 수 없습니다.<br>
                        회사는 회원의 서비스 이용 실적을 기반으로 회원 등급을 부여할 수 있으며, 등급별 혜택을 제공할 수 있습니다.<br>
                        회원은 서비스 이용 시 다음과 같은 행위를 해서는 안됩니다.<br>
                        ① 다른 회원의 아이디(ID)와 비밀번호를 도용하거나 부정하게 사용하는 행위<br>
                        ② 서비스의 안전성을 해치는 행위<br>
                        ③ 회사의 운영진, 직원, 관계자 등을 사칭하는 행위<br>
                        ④ 다른 회원에 대한 개인정보를 수집, 저장, 공개하는 행위<br>
                        ⑤ 타인의 명예를 훼손하거나 불이익을 주는 행위<br>
                        ⑥ 회사의 서비스 이용 약관, 관련 법령 및 회사가 공지한 이용규칙을 위반하는 행위<br>
                        ⑦ 기타 불법적이거나 부적절한 행위<br>

                    </div>
                    <div class="check">
                        <input type="checkbox" id="agree1">
                        <label for="agree">이용약관 동의</label>
                    </div>
                </div>
                <div class="mt60">
                    <h3 class="blind">[개인정보 수집 동의서]</h3>
                    <div class="scroll">
                        수집하는 개인정보 항목<br>
                        회사는 서비스 제공을 위하여 아래와 같은 개인정보를 수집합니다.<br><br>

                        필수항목: 이름, 아이디, 비밀번호, 이메일 주소, 휴대전화번호, 주소<br>
                        선택항목: 생년월일, 성별, 관심분야<br>
                        개인정보 수집 및 이용 목적<br><br>
                        회사는 수집한 개인정보를 다음과 같은 목적으로 이용합니다.<br>

                        서비스 제공: 회원 가입, 본인 인증, 서비스 이용 안내, 고객 지원, 결제 처리<br>
                        마케팅 및 광고에 활용: 신상품 출시 및 이벤트 안내, 맞춤형 광고 제공, 서비스 개선 및 제공<br>
                        개인정보 보유 및 이용 기간
                        회사는 회원이 탈퇴를 요청하지 않은 경우에는 회원의 개인정보를 회원이 회사 서비스 이용을 위해 등록한 날로부터 회원 탈퇴시까지 보유하며, 탈퇴 요청 시 즉시
                        파기합니다.<br><br>

                        개인정보 제공<br>
                        회사는 회원의 개인정보를 외부에 제공하지 않습니다. 단, 다음의 경우에는 예외로 합니다.<br><br>

                        회원의 동의가 있는 경우<br>
                        관계법령에 의거해 회원의 개인정보 제공이 필요한 경우<br><br>
                        개인정보 취급 위탁<br>
                        회사는 서비스 제공에 필요한 경우 회원의 개인정보 처리를 위탁할 수 있습니다. 이 경우, 위탁 업체는 회원의 개인정보를 안전하게 처리하도록 필요한 조치를 취하며, 회사와의
                        계약에서 개인정보 보호 관련 사항을 명확히 규정하여 준수합니다.<br><br>

                        개인정보 취급 관련 권리<br>
                        회원은 언제든지 자신의 개인정보를 조회하거나 수정할 수 있습니다. 또한 개인정보 처리의 중지 또는 삭제를 요청할 수 있으며, 이에 대한 조치가 취해질 수 있습니다.<br>

                        위 개인정보 수집에 대하여 동의합니다.<br>

                        ※ 동의하지 않을 경우 회원 가입이 제한될 수 있습니다.
                        <div class="check">
                            <input type="checkbox" id="agree2">
                            <label for="agree">개인정보 수집 및 이용동의</label>
                        </div>
                        <div>
                            <p class="agreeMsg">and</p>
                            <button href="joinSave.php" class="btnStyle agreeBtn">동의</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- // footer -->

    <script>
        //체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelectorAll(".agreeMsg");

        agreeBtn.addEventListner("click", (e) => {
            e.preventDefault();

            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerText = "체크박스를 다시 한 번 확인해주세요";
                    e.preventDefault();
                }
            })
        })
    </script>
</body>
</html>