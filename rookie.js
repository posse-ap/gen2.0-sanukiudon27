"use strict";
// for文で一度HTMLで作成したページをJSに移し１０回ループする
for (let i = 1; i < 11; i++) {
    // selfIntroductionというdivの要素を取得する
    const selfIntro = document.getElementById("selfIntroduction");

    // h1のタイトルに下線をつけるclass名を作成する
    const titileName = document.createElement("h1");
    titileName.innerText = `${i}.山寺伶奈 `;
    selfIntro.appendChild(titileName);
    titileName.classList.add("titleUnder");


    /*ボタンタグ３つについての操作*/
    //ボタンタグを作成する
    const buttonName1 = document.createElement("button");
    const buttonName2 = document.createElement("button");
    const buttonName3 = document.createElement("button");
    //タグの要素となる内容を記入する
    buttonName1.innerText = "基本データ";
    buttonName2.innerText = "好きな〇〇";
    buttonName3.innerText = "戻る";
    //ボタン要素を親要素に入れる
    selfIntro.appendChild(buttonName1);
    selfIntro.appendChild(buttonName2);
    selfIntro.appendChild(buttonName3);
    //ボタンにクラス名を作成する
    buttonName1.classList.add("firstBtn");
    buttonName2.classList.add("firstBtn");
    buttonName3.classList.add("firstBtn");
    buttonName3.classList.add("secondBtn");
    //ボタンにid名を作成する
    buttonName1.id = `basicInfo${i}`;
    buttonName2.id = `likeInfo${i}`;
    buttonName3.id = `backInfo${i}`;

    //imgタグを作成し、クラス名・id名を付与する
    const imgName = document.createElement("img");
    imgName.src =
        "https://images.unsplash.com/photo-1470662061953-318cd8c6c152?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80";
    selfIntro.appendChild(imgName);
    imgName.classList.add("photo");
    imgName.id = `photoArea${i}`;

    //divタグを作成し、クラス名・id名を付与する
    const divName = document.createElement("div");
    selfIntro.appendChild(divName);
    divName.classList.add("infoBox");
    divName.classList.add("disappear");
    divName.id = `basicArea${i}`;

    //ulタグを作成し、親要素に入れる
    const ulName = document.createElement("ul");
    divName.appendChild(ulName);

    //liタグを作成し、それぞれの情報を与える
    const liName1 = document.createElement("li");
    liName1.innerText = "誕生日　　5/13";
    ulName.appendChild(liName1);

    const liName2 = document.createElement("li");
    liName2.innerText = "星座　　牡牛座";
    ulName.appendChild(liName2);

    const liName3 = document.createElement("li");
    liName3.innerText = "血液型　　A型";
    ulName.appendChild(liName3);

    const liName4 = document.createElement("li");
    liName4.innerText = "出身地　　早稲田";
    ulName.appendChild(liName4);

    const liName5 = document.createElement("li");
    liName5.innerText = "出身高校　　SFC";
    ulName.appendChild(liName5);

    //divタグを作成し、クラス名・id名を付与する
    const divName2 = document.createElement("div");
    selfIntro.appendChild(divName2);
    divName2.classList.add("infoBox");
    divName2.classList.add("disappear");
    divName2.id = `likeArea${i}`;

    //ulタグを作成し、親要素に入れる
    const ulName2 = document.createElement("ul");
    divName2.appendChild(ulName2);

    //liタグを作成し、それぞれの情報を与える
    const li2Name1 = document.createElement('li');
    li2Name1.innerText = '好きな食べ物　　寿司';
    ulName2.appendChild(li2Name1);

    const li2Name2 = document.createElement('li');
    li2Name2.innerText = '好きな場所　　早稲田';
    ulName2.appendChild(li2Name2);

    const li2Name3 = document.createElement('li');
    li2Name3.innerText = '好きな歌手　　Aqua TImes ';
    ulName2.appendChild(li2Name3);

    const li2Name4 = document.createElement('li');
    li2Name4.innerText = '好きな映画　　マイインターン';
    ulName2.appendChild(li2Name4);

    const li2Name5 = document.createElement('li');
    li2Name5.innerText = '好きなタイプ　　面白い人';
    ulName2.appendChild(li2Name5);




    //頻繁に使う属性に対して変数を与える
    let basicInfo = document.getElementById(`basicInfo${i}`);
    let likeInfo = document.getElementById(`likeInfo${i}`);
    let backInfo = document.getElementById(`backInfo${i}`);
    let photoInfo = document.getElementById(`photoArea${i}`);
    let detailInfo = document.getElementById(`basicArea${i}`);
    let loveInfo = document.getElementById(`likeArea${i}`);

    //クリックすると関数を実行する準備をする
    basicInfo.addEventListener("click", basicChange);
    likeInfo.addEventListener("click", likeChange);
    backInfo.addEventListener("click", backChange);

    /*基本データボタンを押したときの動作の関数*/
    //灰色を消したり追加したりする
    function basicChange() {
        basicInfo.classList.add("secondBtn");
        likeInfo.classList.remove("secondBtn");
        backInfo.classList.remove("secondBtn");
        //imgの写真を消したり追加したりする
        photoInfo.classList.add("disappear");
        detailInfo.classList.remove("disappear");
        loveInfo.classList.add("disappear");
    }
    //好きボタンを押したときの動作の関数
    function likeChange() {
        basicInfo.classList.remove("secondBtn");
        likeInfo.classList.add("secondBtn");
        backInfo.classList.remove("secondBtn");
        photoInfo.classList.add("disappear");
        detailInfo.classList.add("disappear");
        loveInfo.classList.remove("disappear");
    }
    //戻るボタンを押したときの動作の関数
    function backChange() {
        basicInfo.classList.remove("secondBtn");
        likeInfo.classList.remove("secondBtn");
        backInfo.classList.add("secondBtn");
        photoInfo.classList.remove("disappear");
        detailInfo.classList.add("disappear");
        loveInfo.classList.add("disappear");
    }

    // //好きボタンを押すとclaa名を追加する →CSSで色を変える
    // const likeInfo = document.getElementById("likeInfo");
    // likeInfo.addEventListener("click", function () {
    //     likeInfo.classList.add("infoBox");
    // });

    // //戻るボタンを押すとclaa名を追加する →CSSで色を変える
    // const backInfo = document.getElementById("backInfo");
    // backInfo.addEventListener("click", function () {
    //     backInfo.classList.add("");
    // });
}
