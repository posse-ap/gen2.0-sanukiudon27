// 高輪文字のidを取得する
const choice11 = document.getElementById('choice1-1');
const choice12 = document.getElementById('choice1-2');
const choice13 = document.getElementById('choice1-3');
const box = document.getElementById('answerBox');
const result =document.getElementById('result');
const theAnswer =document.getElementById('theAnswer');





// クリックしたら起こる関数を定義する
choice11.addEventListener('click', change11);
choice12.addEventListener('click', change12);
choice13.addEventListener('click', change13);


// その関数によって起こることを書く
//背景を青く、文字を白くするcorrectというクラスを追加し、新しくdivを作るcorrectBoxというクラスを追加

function change11() {
   choice11.classList.add('correct')
   choice12.classList.remove('disCorrect')
   choice13.classList.remove('disCorrect')
   box.classList.add('correctBox')
   result.classList.add('resultAnnouncementCorrect')
   // result.classList.remove('resultAnnouncementDisCorrect')
   choice11.classList.add('cannotClick')
   choice12.classList.add('cannotClick')
   choice13.classList.add('cannotClick')
  result.innerText = '正解！'
  theAnswer.innerText ='正解は「高輪」です！'

};

function change12() {
   choice12.classList.add('disCorrect')
   choice11.classList.add('correct')
   choice13.classList.remove('disCorrect')
   result.classList.add('resultAnnouncementDisCorrect')
   box.classList.add('discorrectBox')
   result.innerText = '不正解！'
   theAnswer.innerText ='正解は「高輪」です！'

   
};

function change13() {
   choice13.classList.add('disCorrect')
   choice11.classList.add('correct')
   choice12.classList.remove('disCorrect')
   result.classList.add('resultAnnouncementDisCorrect')
   box.classList.add('discorrectBox')
   result.innerText = '不正解！'
   theAnswer.innerText ='正解は「高輪」です！'
};



choice11.disabled = true;


{/* <body>
    <h1 id="title" class="Title">１．この地名はなんて読む？</h1>

    <img
      id="img1"
      class="Img1"
      src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png"
      alt="高輪"
    />
    <ul>
      <li id="choice1-1" class="Choice1">たかなわ</li>
      <li id="choice1-2" class="Choice1">たかわ</li>
      <li id="choice1-3" class="Choice1">こうわ</li>
      <div id="answerBox">
        <h1 id="result" ></h1>
          <p id="theAnswer"></p>
      </div>
    </ul>
  </body> */}







  






