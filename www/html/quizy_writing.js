"use strict"

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
//  let img_arr = [
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png",  art : "imgh1"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png",  art : "imgh2"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png",  art : "imgh3"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png",  art : "imgh4"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png",  art : "imgh5"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png",  art : "imgh6"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png",  art : "imgh7"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png",  art : "imgh8"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png", art : "imgh9"},
//     {src : "https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png", art : "imgh10"},
//  ];

let img_arr = [
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png", "img1"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png", "img2"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png", "img3"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png", "img4"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png", "img5"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png", "img6"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png", "img7"],
   ["https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png", "img8"],
   ["https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png", "img9"],
   ["https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png", "img10"],
];

let answer_arr = ['たかなわ', 'かめいど', 'こうじまち', 'おなりもん', 'とどろき', 'しゃくじい', 'ぞうしき', 'おかちまち', 'ししぼね', 'こぐれ'];
let currentNum = 0;


function shuffle(getyu) {
   for (let i = getyu.length - 1; i >= 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [getyu[i], getyu[j]] = [getyu[j], getyu[i]];
   }
   return getyu;
}


for (let i = 0; i < selection_arr.length; i++) {
   let content =
      "<section>" +
      `<h1>${i + 1}.この地名はなんて読む</h1>` +
      `<img src="${img_arr[i][0]}" alt="${img_arr[i][1]}">` +
      // `<img src="img_arr${i}">`+
      // `<img src="${img_arr[i]}">`+
      `<ul id="selection_container${i}"></ul>` +
      '<div class="resultContainer">' +
      `<h2 id="the_answer${i}" class="theAnswer"></h2>` +
      `<p id="what_is_answer${i}" class="whatIsAnswer"></p>` +
      "</div>" +
      "</section>";

   document.getElementById('quizy_writing_container').insertAdjacentHTML('beforeend', content)

   let selection_container = document.getElementById(`selection_container${i}`);
   const shuffle_choice = shuffle([...selection_arr[i]]);


   shuffle_choice.forEach(element => {
      let li = document.createElement('li');
      li.innerHTML = element;
      selection_container.appendChild(li);
      if (element === selection_arr[i][0]) {
         li.id = `correct_selection${i}`;
      }
      else if (element === selection_arr[i][1]) {
         li.id = `wrong_selection${i}`;
      }
      else {
         li.id = `wrong2_selection${i}`;
      }



   });

   // selection_arr[i].forEach(function (small_selection, index) {
   //    if (index === 0) {
   //       small_selection.id = `correct_selection${i}`;
   //    }
   //    else if (index === 1) {
   //       small_selection.id = `wrong_selection${i}`;
   //    }
   //    else {
   //       small_selection.id = `wrong2_selection${i}`;
   //    }

   // });


   const correct_selection = document.getElementById(`correct_selection${i}`);
   const wrong_selection = document.getElementById(`wrong_selection${i}`);
   const wrong2_selection = document.getElementById(`wrong2_selection${i}`);
   const the_answer = document.getElementById(`the_answer${i}`);
   const what_is_answer = document.getElementById(`what_is_answer${i}`);

   correct_selection.addEventListener('click', correct_change);
   wrong_selection.addEventListener('click', wrong_change);
   wrong2_selection.addEventListener('click', wrong2_change);

   function correct_change() {
      correct_selection.classList.add('correct');
      the_answer.innerHTML = '正解！';
      what_is_answer.innerHTML = `正解は${answer_arr[i]}です！`;
      // removeだと取り除かれるだけで押せなくなるわけではない
      // wrong_selection.classList.remove('wrong');
      // wrong2_selection.classList.remove('wrong');
      wrong_selection.classList.add('none');
      wrong2_selection.classList.add('none');
      the_answer.classList.add('blueLine');
      
   }


   function wrong_change() {
      correct_selection.classList.add('correct');
      wrong_selection.classList.add('wrong');
      the_answer.innerHTML = '不正解！';
      what_is_answer.innerHTML = `正解は${answer_arr[i]}です！`;
      correct_selection.classList.add('none');
      wrong2_selection.classList.add('none');
      the_answer.classList.add('orangeLine');
   }

   function wrong2_change() {
      correct_selection.classList.add('correct');
      wrong2_selection.classList.add('wrong');
      the_answer.innerHTML = '不正解！';
      what_is_answer.innerHTML = `正解は${answer_arr[i]}です！`;
      correct_selection.classList.add('none');
      wrong_selection.classList.add('none');
      the_answer.classList.add('orangeLine');
   }
}

