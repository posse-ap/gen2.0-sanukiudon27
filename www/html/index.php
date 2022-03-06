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

$selection_arr = [
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
?>
 <div id=quizy_writing_container>
   <?PHP for ($i = 0; $i < 2; $i++) :?>
   <!-- let content = -->
    <section>
      <h1><?= $i+1; ?> . この地名はなんて読む</h1>
      <!-- <img src="<?= $img_arr[$i][0]; ?>"> -->
      <!-- <img src="./img/1-2.png" alt=""> -->
      <!-- <img src="./img/<?= $id . '-' . $i+1 . '.png'; ?>"> -->
      <img src="./img/<?= $id ?>-<?= $i+1 ?>.png" ?>
    <ul id="selection_container<?= $i; ?>">
      <li>
          <?php 
          for($u=0; $u<3; $u++) :
           //  echo $selection_arr[$i][$u] . PHP_EOL;
           echo $separate[$i][$u]['name_list'] . PHP_EOL;
          endfor; ?>
      </li>
     </ul>
    </section>

    </div>
 

<?PHP endfor ;?>

    <!-- <script src="quizy.js"></script> -->
</body>

</html>
