<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<?php
$faqData = array(
    array(
        'question' => '영양성분 정보의 출처가 확실한가요?',
        'answer' => '네, 영양성분 정보는 식품 표준법에 따라 정확하게 기재되어 있으며 출처를 확인할 수 있습니다.',
    ),
    array(
        'question' => '타 사이트와의 닭가슴살 정보가 동일한가요?',
        'answer' => '네! 저희 영양많닭은 해당 사이트에서 직접 조사를 하기 때문에 동일한 정보를 제공합니다.',
    ),
    array(
        'question' => '이 사이트에 기재되지 않은 닭가슴살들은 추가할 예정이신가요?',
        'answer' => '네! 저희 영양많닭은 아직 초기 단계로 여러분에게 더 많은 닭가슴살에 대한 정보를 제공하기 위해 준비중입니다.',
    ),
    array(
        'question' => '이 사이트가 다른 닭가슴살 사이트와의 차이점이 뭔가요?',
        'answer' => '저희 영양많닭은 닭가슴살을 판매목적이 아닌 닭가슴살 제품들에 대한 정확한 영양정보 제공에 중점을 두고 있습니다. ',
    ),
    array(
        'question' => '닭가슴살 구매는 할 수 없나요?',
        'answer' => '네, 아쉽게도 저희 영양많닭의 목적은 닭가슴살의 영양정보들을 제공하고 비교 분석하여 소비자분들이 더 나은 구매를 할 수 있도록 돕는 것에 중점을 두고 있습니다. <br>구매는 영양많닭에서 정보를 비교하신 후 해당 사이트에서 구매 부탁드립니다.',
    )
    // 다른 질문과 답변 추가...
);
// 상위 5개 질문만 추출
$top5Questions = array_slice($faqData, 0, 5);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영양많닭 고객센터</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main">
        <div class="service__inner">
            <h2 class="service__title">고객센터</h2>
            <div class="service__box">
                <div class="service__search">
                    <form action="#" name="#" method="POST">
                        <input type="search" name="searchKeyword" aria-label="검색" placeholder="궁금하신 내용을 입력해주세요">
                        <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                    </form>
                </div>
                <div class="service__menu">
                    <ul>
                        <li class="serv1">
                            <a href="../notice/notice.php">
                                <img src="../assets/img/notice.svg" alt="공지">
                                <span class="txt">공지사항</span>
                            </a>
                        </li>
                        <li class="serv2">
                            <a href="../consultation/consultation.php">
                                <img src="../assets/img/customer-service.svg" alt="1:1 상담" >
                                <span class="txt">1:1 상담</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="faq__inner">
                <h2  class="faq__title">자주 묻는 질문</h2>
            </div>
            <div class="faq__table">
                <table>
                    <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col style="width: 10%;">
                        <col style="width: 15%;">
                        <col style="width: 7%;">
                    </colgroup>
                    <tbody>
                        <?php foreach ($top5Questions as $index => $faqItem) { ?>
                            <tr>
                                <td>
                                    <a href="#" class="question-link" data-index="<?php echo $index; ?>">
                                        <strong>Q</strong>
                                        <?php echo $faqItem['question']; ?>
                                    </a>
                                </td>
                            </tr>
                            <tr class="answer">
                                <td colspan="5">
                                    <div class="answer__content">
                                        <?php echo $faqItem['answer']; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
    <script>
        // 페이지가 로드될 때 답변 숨김 처리
        document.addEventListener('DOMContentLoaded', function() {
            const answerElements = document.querySelectorAll('.answer');
            answerElements.forEach(function(answerElement) {
                answerElement.style.display = 'none';
            });
        });
        // 질문 클릭 시 답변 토글 처리
        const questionLinks = document.querySelectorAll('.question-link');
        questionLinks.forEach(function(questionLink) {
            questionLink.addEventListener('click', function(event) {
                event.preventDefault();
                const answerElement = this.parentNode.parentNode.nextElementSibling;
                const answerContent = answerElement.querySelector('.answer__content');
                if (answerElement.style.display === 'none') {
                    // 답변이 숨겨져 있는 경우
                    answerElement.style.display = 'table-row';
                    answerContent.style.display = 'block';
                } else {
                    // 답변이 표시되어 있는 경우
                    answerElement.style.display = 'none';
                    answerContent.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>