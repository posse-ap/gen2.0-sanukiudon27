// top_selection.disabled = true;
'use strict';

let selection_arr = [
   ['たかなわ', 'こうわ', 'たかわ'],
   ['かめいど', 'かめと', 'かめど'],
   ['こうじまち', 'かゆまち', 'おかとまち'],
   ['おなりもん', 'おかどもん', 'ごせいもん'],
   ['とどろき', 'たたら', 'たたりき'],
   ['しゃくじい', 'いじい', 'せきこうい'],
   ['ぞうしき', 'ざっしょく', 'ざっしき'],
   ['おかちまち', 'ごしろちょう', 'みとちょう'],
   ['ししぼね', 'しこね', 'ろっこつ'],
   ['こぐれ', 'こばく', 'こしゃく'],
];

let img_arr = [
   "https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png",
   "https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png",
   "https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png",
   "https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png",
];
let answer_arr = ['たかなわ', 'かめいど', 'こうじまち', 'おなりもん', 'とどろき', 'しゃくじい', 'ぞうしき', 'おかちまち', 'ししぼね', 'こぐれ'];

// let new_arry = [];
// for (let u = 0; u < selection_arr.length; u++) {
//    let getyu = selection_arr[u];
// console.log(getyu);
// };


// for (let u = 0; u < selection_arr.length; u++) {
//    let getyu = selection_arr[u];
// }



// let gettyu = shuffle(getyu);
// shuffle(getyu);
// console.log(getyu);
// // let k = selection_arr[u];
// for(let f=0; f < selection_arr.length; f++){
// // getですべてを配列として取り出す
// let get = selection_arr[f];
// // ひとつずつがランダムで10個分出力される
// let shuf = selection_arr[Math.floor(Math.random() * selection_arr.length)];
// new_arry.push(shuf);
// get.splice(shuf, 1);

// console.log(shuf);
// console.log(selection_arr[0]);

// const pick = selection_arr.map(item => item[0]);
// console.log(pick);
// }
// for(i = 0; i< k.length; i++){
// new_arry.push(k[shuf]);
// k.splice(shuf, 1);
// }


function shuffle(getyu) {
   // console.log(getyu);
   for (let i = getyu.length - 1; i >= 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [getyu[i], getyu[j]] = [getyu[j], getyu[i]];

   }
   return getyu;
}

for (let i = 0; i < selection_arr.length; i++) {
   shuffle(selection_arr[i]);
   let new_method =
      '<section id="quiz_container">' +
      `<h2 id="what_place_name" class="Title">${i + 1}．この地名はなんて読む？</h2>` +
      '<div id="place_image_container"></div>' +
      `<img id="place_image" class="img"  src="${img_arr[i]}" alt="高輪" />` +
      '</div>' +
      '<ul id="selection_container">' +
      `<li id="top_selection${i}" class="choice">${selection_arr[i][0]}</li>` +
      `<li id="middle_selection${i}" class="choice">${selection_arr[i][1]}</li>` +
      `<li id="bottom_selection${i}" class="choice">${selection_arr[i][2]}</li>` +
      '</ul>' +
      `<div id="answer_container${i}">` +
      `<h3 id="result${i}"></h3>` +
      `<p id="what_the_answer${i}"></p>` +
      '</div>' +
      '</section>';

   document.getElementById('quiz_container').insertAdjacentHTML('beforeend', new_method);

   // 高輪文字のidを取得する
   const top_selection = document.getElementById(`top_selection${i}`);
   const middle_selection = document.getElementById(`middle_selection${i}`);
   const bottom_selection = document.getElementById(`bottom_selection${i}`);
   const answer_container = document.getElementById(`answer_container${i}`);
   const result = document.getElementById(`result${i}`);
   const what_the_answer = document.getElementById(`what_the_answer${i}`);

   // クリックしたら起こる関数を定義する
   top_selection.addEventListener('click', correct_change);
   middle_selection.addEventListener('click', dis_correct_change);
   bottom_selection.addEventListener('click', another_dis_correct_change);
   // console.log(top_selection.addEventListener('click', correct_change)

   // その関数によって起こることを書く
   function correct_change() {
      top_selection.classList.add('correct');
      // middle_selection.classList.remove('dis_correct');
      // bottom_selection.classList.remove('dis_correct')
      // box.classList.add('correct_box');
      result.classList.add('result_announcement_correct');
      // result.classList.remove('result_announcement_dis_correct');
      // top_selection.classList.add('cannot_click');
      middle_selection.classList.add('cannot_click');
      bottom_selection.classList.add('cannot_click');
      result.innerText = '正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      answer_container.classList.add('answer_container_class');
   };

   function dis_correct_change() {
      middle_selection.classList.add('dis_correct');
      top_selection.classList.add('correct');
      // bottom_selection.classList.remove('dis_correct');
      result.classList.add('result_announcement_dis_correct');
      // box.classList.add('dis_correct_box');
      result.innerText = '不正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      top_selection.classList.add('cannot_click');
      // middle_selection.classList.add('cannot_click');
      bottom_selection.classList.add('cannot_click');
      answer_container.classList.add('answer_container_class');
   };

   function another_dis_correct_change() {
      bottom_selection.classList.add('dis_correct');
      top_selection.classList.add('correct');
      // middle_selection.classList.remove('dis_correct');
      result.classList.add('result_announcement_dis_correct');
      // box.classList.add('dis_correct_box');
      result.innerText = '不正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      top_selection.classList.add('cannot_click');
      middle_selection.classList.add('cannot_click');
      // bottom_selection.classList.add('cannot_click');
      answer_container.classList.add('answer_container_class');
   };
};