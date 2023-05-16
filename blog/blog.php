<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- // header -->

    <main id="main" class="container">    
        <div class="blog__search bmStyle">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발과 관련된 글 입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                        <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
           <div class="left">
                <div class="blog__wrap">
                    <h2>All Post</h2>
                    <div class="cards__inner col2 line2">
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩의 기초</h3>
                                <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 팁 및 트릭</h3>
                                <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 최신 트렌드</h3>
                                <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>자바스크립트</h3>
                                <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                                <img src="../assets/img/blog01.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩의 기초</h3>
                                <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                                <img src="../assets/img/blog02.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 팁 및 트릭</h3>
                                <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                                <img src="../assets/img/blog03.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 최신 트렌드</h3>
                                <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                                <img src="../assets/img/blog04.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>자바스크립트</h3>
                                <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog05.jpg, ../assets/img/blog05@2x.jpg 2x, ../assets/img/blog05@3x.jpg 3x" />
                                <img src="../assets/img/blog05.jpg" alt="">
                            </figure>
                            <div class="card__title">
                                <h3>자바스크립트</h3>
                                <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                            </div>
                            <div class="card__info">
                                <a href="#" class="more">더보기</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="right mt100">
                <div class="blog__aside">
                    <div class="intro">
                        <div class="img">
                            <picture class="intro__images">
                                <source srcset="../assets/img/intro02.png, ../assets/img/intro02@2x.png 2x, ../assets/img/intro02@3x.png 3x" />
                                <img src="../assets/img/intro02.png" alt="소개이미지">
                            </picture> 
                            <p class="text">
                                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                            </p>
                        </div>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>
           </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>