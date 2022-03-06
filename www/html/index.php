<?php
// $webroot = $_SERVER['DOCUMENT_ROOT'];
// include($webroot."/www/html/connect.php"); 

require 'connect.php';





?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quizy_p2</title>
    <!-- <link rel="stylesheet" href="quizy_writing.css"> -->
</head>

<body>



    <div id=quizy_writing_container></div>

   <?php $img_arr = [
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
?>

   <?PHP for ($i = 0; $i < 2; $i++) { ?>
   <!-- let content = -->
      <section>
      <h1><?= $i+1; ?> . この地名はなんて読む</h1>
      <img src="<?= $img_arr[$i][0]; ?>">
      <!-- `<img src="${img_arr[i][0]}" alt="${img_arr[i][1]}">` + -->
      <ul id="selection_container<?= $i; ?>"></ul>
      <div class="resultContainer">
      <h2 id="the_answer${i}" class="theAnswer"></h2>
      <p id="what_is_answer${i}" class="whatIsAnswer"></p>
      </div>
      </section>

   <!-- document.getElementById('quizy_writing_container').insertAdjacentHTML('beforeend', content);

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
      } -->

<?PHP };?>

    <!-- <script src="quizy.js"></script> -->
</body>

</html>
