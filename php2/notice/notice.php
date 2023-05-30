<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $sql = "SELECT count(noticeID) FROM notice";
    $result = $connect -> query($sql);
    $noticeTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $noticeTotalCount = $noticeTotalCount['count(noticeID)'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영양많닭 공지사항</title>
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="notice__inner">
                <h2 class="notice__title">공지사항</h2>
            <div class="service__search">
                <form action="#" name="#" method="POST">
                    <input type="search" name="searchKeyword" aria-label="검색" placeholder="찾으시는 내용을 입력해주세요">
                    <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                </form>
            </div>
            <div class="notice__table">
                <table>
                    <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col>
                        <col style="width: 10%;">
                    </colgroup>
                    <tbody>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page =1;
    }
    $viewNum =20;
    $viewLimit = ($viewNum * $page) - $viewNum ;
    $sql = "SELECT n.noticeID, n.noticeTitle, y.youID, n.regTime, n.noticeView FROM notice n JOIN yungyangMember y ON(n.memberID = y.memberID) ORDER BY noticeID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
              echo "<tr>";
              echo "<td>".$info['noticeID']."</td>";
              echo "<td><a href='noticeView.php?noticeID={$info['noticeID']}'>".$info['noticeTitle']."</a></td>";
              echo "<td>".$info['youID']."</td>";
              echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
              echo "<td>".$info['noticeView']."</td>";
              echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
        }
    }
?>
                    </tbody>
                </table>
            </div>
            <div class="notice__pages">
                <ul>
<?php
    //총 페이지 갯수
    $noticeTotalCount = ceil($noticeTotalCount/20);
    //1 2 3 4 5 6 7 8 9 10 11 12 13
    $pageView =5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;
    //처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $noticeTotalCount) $endPage = $noticeTotalCount;
    // 처음으로 / 이전
    if($page != 1 && $noticeTotalCount !=0 && $page <= $noticeTotalCount){
        echo "<li><a href='notice.php?page=1'>&lt;&lt;</a></li>";
        $prevPage = $page -1;
        echo "<li><a href='notice.php?page={$prevPage}'>&lt;</a></li>";
    }
    //페이지
     for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        if($page <= $noticeTotalCount){
            echo "<li class='{$active}'><a href='notice.php?page={$i}'>{$i}</a></li>";
        }
    }
    //마지막으로 / 다음 //게시글이 없을 때
    if($page != $noticeTotalCount && $page <= $noticeTotalCount){
        $nextPage = $page +1;
        echo "<li><a href='notice.php?page={$nextPage}'>&gt;</a></li>";
        echo "<li><a href='notice.php?page={$noticeTotalCount}'>&gt;&gt;</a></li>";
    }
?>
                </ul>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>