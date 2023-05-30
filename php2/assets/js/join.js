function checkFormSubmit() {
    var check1 = document.getElementById("check1");
    var check2 = document.getElementById("check2");
    var errorMessage = document.getElementById("error-message");

    if (!check1.checked || !check2.checked) {
        errorMessage.textContent = "* 모든 체크 박스에 동의해야 합니다.";
        return false; // 폼 제출 중단
    }

    errorMessage.textContent = ""; // 에러 메시지 초기화
    return true; // 폼 제출
}
