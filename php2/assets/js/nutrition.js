//영양 정보 더보기 버튼
{
    let number = 0;
    document.querySelector("#nutsubcontents a").addEventListener("click", (event) => {
    event.preventDefault();
        if(number % 2 == 0){
            document.querySelector("#nutsubcontents").classList.add("mb320");
            document.querySelector(".nutcontent1").style.display = "block";
            number++;
        } else {
            document.querySelector("#nutsubcontents").classList.remove("mb320");
            document.querySelector(".nutcontent1").style.display = "none";
            number++;
        }        
    });
}

//리뷰 보기 슬라이드 버튼
{
    let nutreviewbox = document.querySelectorAll('.nutreviewbox .nutreview');
    let boxlength = nutreviewbox.length;
    let nutnumber = 2;

    function nextPage() {
        event.preventDefault();
        const nutreviewbox = document.querySelector('.nutreviewbox');
        const scrollAmount = nutreviewbox.offsetWidth;
        nutreviewbox.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }

    function prevPage(event) {
        event.preventDefault();
        const nutreviewbox = document.querySelector('.nutreviewbox');
        const scrollAmount = nutreviewbox.offsetWidth;
        nutreviewbox.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }

    document.querySelector('.nutbtn .next').addEventListener('click', nextPage);
    document.querySelector('.nutbtn .prev').addEventListener('click', prevPage);

    document.addEventListener('DOMContentLoaded', function() {
        var likeButton = document.getElementById('like-button');
        likeButton.addEventListener('click', function() {
            window.lb = likeButton;
            likeButton.classList.toggle('selected');
        });
    }, false);
}


// 픽버튼 누르면 이미지 바뀌게
{
    let button = document.querySelector('#like-button');
    num = 0;
    button.addEventListener('click', () => {
        num++;
        console.log(num)
        if(num % 2 == 1){
            document.querySelector("#nutfixed .n1").style.transition = "all 0.3s";
            document.querySelector("#nutfixed .n1").style.opacity = "1";
        };
        if(num % 2 == 0){
            document.querySelector("#nutfixed .n1").style.transition = "all 0.3s";
            document.querySelector("#nutfixed .n1").style.opacity = "0";
        };
    });


}
// 픽스창 줄이기
{
    let Close = document.querySelector(".fixedclose");
    let nutDiv = document.querySelectorAll("#nutfixed div");
    let nutImg = document.querySelectorAll("#nutfixed img");

    let Num = 0;

    Close.addEventListener('click', (e) => {
        e.preventDefault();
        Num++;
        if(Num % 2 ==1){
            Close.textContent = "펼침▲";
            document.querySelector("#nutfixed").style.height = "50px";
            nutDiv.forEach((e) => {
                e.style.display = "none";
            });
        } else {
            Close.textContent = "접기▼";
            document.querySelector("#nutfixed").style.height = "700px";
            nutDiv.forEach((e) => {
                e.style.display = "block";
            });
        }
    });
}


