
function ImgChange(Link){
    for (let index = 0; index < 5; index++){
        let imgEl;
        imgEl = document.getElementById("img"+(index+1));
        imgEl.src = Link[index];
    }
}

function SpanChange(Span){
    for (let index = 0; index < 5; index++){
        let spanEl;
        spanEl = document.getElementById("span"+(index+1));
        spanEl.textContent = Span[index];
    }
}



function living(){
    let imgSpan = ['일룸 퀸사이즈 침대', '4x4 다크우드 캐비넷', '우드 책상', '지누스 매트리스', '미니 소파'];
    let imgLink = ['./images/living/bed.jpg', './images/living/cabinet.jpg', './images/living/desk.jpg', './images/living/mattress.jpg', './images/living/sofa.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function kitchen(){
    let imgSpan = ['테팔 후라이팬 28cm', '실내용 빗자루', '1L 세제 4개입', '곰돌이 머그컵', '2구 팝업 토스터기'];
    let imgLink = ['./images/kitchen/pen.jpg', './images/kitchen/brush.jpg', './images/kitchen/detergent.jpg', './images/kitchen/mug.jpg', './images/kitchen/toaster.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function stationary(){
    let imgSpan = ['모눈 다이어리', '컴퓨터 싸인펜', '스프링 노트', '3색 볼펜', '삼각자'];
    let imgLink = ['./images/stationary/diary.jpg', './images/stationary/felttippen.jpg', './images/stationary/note.jpg', './images/stationary/pen.jpg', './images/stationary/triangleruler.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function beauty(){
    let imgSpan = ['포어 썬 클렌징 폼', '퓨어 클렌징 오일', '알로에 베라 수딩 크림', '세타필 로션', '아이오페 마스크 팩'];
    let imgLink = ['./images/beauty/cleansingfoam.jpg', './images/beauty/cleansingoil.jpg', './images/beauty/cream.jpg', './images/beauty/lotion.jpg', './images/beauty/maskpack.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function women(){
    let imgSpan = ['니트웨어', '오버핏 셔츠', '베이지 주름 치마', '크롭 무지 티셔츠', '여성 자켓'];
    let imgLink = ['./images/women/knitwear.jpg', './images/women/shirt.jpg', './images/women/skirt.jpg', './images/women/crop.jpg', './images/women/jacket.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function men(){
    let imgSpan = ['크루넥 니트', '회색 청자켓', '허리밴딩 린넨 바지', '라이트 블루 셔츠', 'V넥 블랙 니트'];
    let imgLink = ['./images/men/crewneckknitwear.jpg', './images/men/jacket.jpg', './images/men/pants.jpg', './images/men/shirt.jpg', './images/men/Vknitwear.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function innerwear(){
    let imgSpan = ['남성 파자마', '여성 파자마', '수면잠옷', '남성 속옷', '여성 속옷'];
    let imgLink = ['./images/innerwear/menpajama.jpg', './images/innerwear/womenpajama.jpg', './images/innerwear/sleepsocks.jpg', './images/innerwear/men.jpg', './images/innerwear/women.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}
function accesories(){
    let imgSpan = ['회색 베레모', '검정 비니', '아디다스 캡 모자', '겨울 털장갑', '올리브 체크 목도리'];
    let imgLink = ['./images/accessories/beret.jpg', './images/accessories/bini.jpg', './images/accessories/cap.jpg', './images/accessories/gloves.jpg', './images/accessories/muffler.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function food(){
    let imgSpan = ['테라 맥주 500ml', '밀키스 제로 250ml', '마운틴듀 400ml', '오잉 스낵', '새우깡 스낵'];
    let imgLink = ['./images/food/terra.jpg', './images/food/milkiszero.jpg', './images/food/mountaindew.jpg', './images/food/oing.jpg', './images/food/shrimpcracker.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}

function sauces(){
    let imgSpan = ['초록마을 발사믹 식초', '백설 스위트 칠리 소스', '오뚜기 토마토 케챂', '팬더 굴소스', '샘표 양조간장'];
    let imgLink = ['./images/sauces/balsamic.jpg', './images/sauces/chili.jpg', './images/sauces/ketchup.jpg', './images/sauces/oyster.jpg', './images/sauces/soy.jpg'];
    ImgChange(imgLink);
    SpanChange(imgSpan);
}
