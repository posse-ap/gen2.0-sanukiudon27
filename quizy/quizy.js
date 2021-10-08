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

// let inof = selection_arr.indexOf('ざっしょく');
// console.log(inof);
// function lead() {
//    for (let i = 0; i < selection_arr.length; i++) {
//    }
// }
function shuffle(getyu) {
   for (let i = getyu.length - 1; i >= 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [getyu[i], getyu[j]] = [getyu[j], getyu[i]];
   }
   return getyu;
}

// console.log(get)
// function all() {
for (let i = 0; i < selection_arr.length; i++) {
shuffle(selection_arr[i]);
// console.log(selection_arr[i]);
   let new_method =
      `<h2 id="what_place_name" class="Title">${i + 1}．この地名はなんて読む？</h2>` +
      '<div id="place_image_container"></div>' +
      `<img id="place_image" class="img" src="${img_arr[i]}" alt="高輪" />` +
      '</div>' +
      '<ul id="selection_container">' +
      `<li class="choice" id="top_selection${i}">${selection_arr[i][0]}</li>` +
      `<li class="choice" id="middle_selection${i}">${selection_arr[i][1]}</li>` +
      `<li class="choice" id="bottom_selection${i}">${selection_arr[i][2]}</li>` +
      '</ul>' +
      `<div id="answer_container${i}">` +
      `<h3 id="result${i}"></h3>` +
      `<p id="what_the_answer${i}"></p>` +
      '</div>';
   document.getElementById('quiz_container').insertAdjacentHTML('beforeend', new_method);



   
   // const li = document.querySelectorAll('#selection_container > li');
   // switch (shuffle_choice) {
   //    case `${selection_arr[i][0]}`:
   //       li.id = `top_selection${i}`;
   //       break;
   //    case `${selection_arr[i][1]}`:
   //       li.id = `middle_selection${i}`;
   //       break;
   //    // case `${selection_arr[i][2]}`:
   //    //    li.id = `bottom_selection${i}`;
   //    //    break;
   //    default:
   //       li.id = `bottom_selection${i}`;
   // };
   // lead();

   // let li = document.querySelectorAll('li')
   // for (let u = 0; u < 3; u++) {
   //    let indexof = (selection_arr[i].indexOf(selection_arr[i][u]))
   //    // console.log(indexof);

   //    if (indexof === 0) {
   //       li[u].id = `top_selection${i}`;
   //       // const top_selection = document.getElementById(`top_selection${i}`);
   //    }
   //    else if (indexof === 1) {
   //       li[u].id = `middle_selection${i}`;
   //       // const bottom_selection = document.getElementById(`bottom_selection${i}`);
   //    }
   //    else {
   //       li[u].id = `bottom_selection${i}`;
   //    }
   // }
   // id="bottom_selection${i}" 

   // let choose = document.querySelectorAll('#selection_container li');
   // choose.forEach( elm =>{ elm.style.order=shuffle([...selection_arr])});


   // selection.idってなに？
   // selection_arr[i].forEach (function (selection, index) {
   //       // function selection(selection_id) {
   //       if (index === 0) {
   //          // let top_selection = document.getElementById(`top_selection${i}`);
   //          choose.id = `top_selection${i}`;
   //       }
   //       else if (index === 1) {
   //          // let middle_selection = document.getElementById(`middle_selection${i}`
   //          choose.id = `middle_selection${i}`
   //       }
   //       else {
   //          // bottom_selection = document.getElementById(`bottom_selection${i}`
   //          choose.id = `bottom_selection${i}`
   //       }
   
   // });
   // selection();
   // 文字のidを取得する
   let top_selection = document.getElementById(`top_selection${i}`);
   let middle_selection = document.getElementById(`middle_selection${i}`);
   let bottom_selection = document.getElementById(`bottom_selection${i}`);
   let answer_container = document.getElementById(`answer_container${i}`);
   let result = document.getElementById(`result${i}`);
   let what_the_answer = document.getElementById(`what_the_answer${i}`);

   // console.log(top_selection)
   // クリックしたら起こる関数を定義する
   top_selection.addEventListener('click', correct_change);
   middle_selection.addEventListener('click', dis_correct_change);
   bottom_selection.addEventListener('click', another_dis_correct_change);

   // その関数によって起こることを書く
   function correct_change() {
      top_selection.classList.add('correct');
      result.classList.add('result_announcement_correct');
      middle_selection.classList.add('cannot_click');
      bottom_selection.classList.add('cannot_click');
      result.innerText = '正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      answer_container.classList.add('answer_container_class');
   };
   function dis_correct_change() {
      middle_selection.classList.add('dis_correct');
      top_selection.classList.add('correct');
      result.classList.add('result_announcement_dis_correct');
      result.innerText = '不正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      top_selection.classList.add('cannot_click');
      bottom_selection.classList.add('cannot_click');
      answer_container.classList.add('answer_container_class');
   };
   function another_dis_correct_change() {
      bottom_selection.classList.add('dis_correct');
      top_selection.classList.add('correct');
      result.classList.add('result_announcement_dis_correct');
      result.innerText = '不正解！';
      what_the_answer.innerText = `正解は${answer_arr[i]}です！`;
      top_selection.classList.add('cannot_click');
      middle_selection.classList.add('cannot_click');
      answer_container.classList.add('answer_container_class');
   };
   // shuffle(selection_arr[i]);

};
// };
// function shuffle(getyu) {
//    for (let i = getyu.length - 1; i >= 0; i--) {
//       const j = Math.floor(Math.random() * (i + 1));
//       [getyu[i], getyu[j]] = [getyu[j], getyu[i]];
//    }
//    return getyu;
// }
// HTMLを生成して出力する
// function createhtml() {
//    // 問題リスト分ループ処理する
//    // 配列をランダムにソートして問題のHTML生成処理を呼ぶ
//    selection_arr.forEach(function (question) {
//       // 正しい回答を記憶
//       answer = question[0];

//       // 配列をランダムにソート（Fisher-Yates shuffle）
//       for (var i = question.length - 1; i > 0; i--) {
//          var r = Math.floor(Math.random() * (i + 1));
//          var tmp = question[i];
//          question[i] = question[r];
//          question[r] = tmp;
//       }

//       // 問題リストと回答番号を設定して問題のHTML生成処理を呼び出す
//       //  createquestion(index + 1, question, question.indexOf(answer) + 1);
//       all();
//    })
// };