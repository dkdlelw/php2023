<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 영양많닭 로그인</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main>
    <div id="compare">
        <div class="compare__icon">
            <img src="../assets/img/ab-testing.svg" alt="성분 비교 아이콘">
            <h1>성분 비교</h1>
        </div>
        <div class="compare__item">
            <div class="compareMin">
                <div class="item__img1">
                    <img src="../assets/img/heodak_sauce_deri1.svg" alt="비교대상 왼쪽 이미지">
                </div>
                <div class="vsimg">
                    <img src="../assets/img/vs cute.svg" alt="vs이미지">
                </div>            
                <div class="item__img2">
                    <img src="../assets/img/heodak_sauce_fire1.svg" alt="비교대상 오른쪽 이미지">
                </div>
            </div>
        </div>
        <div class="compare__view">
            <div class="compare__redtext">
                <div class="compare__text">
                    <div class="compare__text1">나트륨</div>
                    <div class="compare__text2">420mg</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">단백질</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">탄수화물</div>
                    <div class="compare__text2">14g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">지방</div>
                    <div class="compare__text2">2.1g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">당류</div>
                    <div class="compare__text2">15g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">트랜스지방</div>
                    <div class="compare__text2">0g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">포화지방</div>
                    <div class="compare__text2">0g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">콜레스테롤</div>
                    <div class="compare__text2">60mg</div>
                </div>
            </div>
            <div class="compare__result">
                <p class="salt"><em class="compareUp">▲150</em></p>
                <p class="protein"><em class="compareUp">▼8</em></p>
                <p class="carbohydrate"><em class="compareDown">▼6</em></p>
                <p class="province"><em class="compareUp">▲1.7</em></p>
                <p class="sugars"><em class="compareDown">▼11</em></p>
                <p class="trans__fat">--</p>
                <p class="saturated__fat"><em class="compareUp">▲0.6</em></p>
                <p class="cholesterol">--</p>
            </div>
            <div class="compare__bluetext">
                <div class="compare__text">
                    <div class="compare__text3">570mg</div>
                    <div class="compare__text4">나트륨</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">18g</div>
                    <div class="compare__text4">단백질</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">6g</div>
                    <div class="compare__text4">탄수화물</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">3.8g</div>
                    <div class="compare__text4">지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">4g</div>
                    <div class="compare__text4">당류</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">0g</div>
                    <div class="compare__text4">트랜스지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">0.6g</div>
                    <div class="compare__text4">포화지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">60g</div>
                    <div class="compare__text4">콜레스테롤</div>
                </div>
            </div>
        </div>
        <div class="compare__graph__h1">
            <h2>제품 목록 그래프</h2>
        </div>
        <div id="compare__graph">
            <div class="horizontal-bar-graph" id="my-graph">
                <ul class="bar-graph"> 
                    <li>
                        <p>슬라이스 스팀 소스 닭가슴살 불닭</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 100%;"></span></div>
                    </li> 
                    <li>
                        <p>슬라이스 스팀 소스 닭가슴살 데리야끼</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 80%;"></span></div>
                    </li> 
                    <li>
                        <p>소스 슬라이스 닭가슴살 120g 레드크림커리</p>
                        <div class="bar-wrap"><span class="bar-fill"  style="width: 60%;"></span></div>
                    </li> 
                    <li>
                        <p>슬라이스 스팀 소스 닭가슴살 핫데리야끼</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 50%;"></span></div>
                    </li> 
                    <li>
                        <p>슬라이스 스팀 소스 닭가슴살 갈비</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 30%;"></span></div>
                    </li> 
                  </ul>              
            </div>
        </div>
        <div class="compare__list">
            <div class="com__list">
                <img src="../assets/img/heodak_sauce_fire.jpg" alt="첫번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/heodak_sauce_gal_b.jpg" alt="두번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/heodak_sauce_red_cream.jpg" alt="세번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/heodak_sauce_hot_deri.jpg" alt="네번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/heodak_sauce_deri.jpg" alt="다섯번째 선택 이미지">
            </div>
        </div>
    </div>
    </main>
    <!-- Mypick -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>