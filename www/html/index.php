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
  <link rel="stylesheet" href="./quizy.css">
</head>

<body>

  <div id=quizy_writing_container>
    <?PHP for ($i = 0; $i < 2; $i++) : ?>
      <!-- let content = -->
      <section>
        <h1><?= $i + 1; ?> . この地名はなんて読む</h1>
        <!-- <img src="<?= $img_arr[$i][0]; ?>"> -->
        <!-- <img src="./img/1-2.png" alt=""> -->
        <!-- <img src="./img/<?= $id . '-' . $i + 1 . '.png'; ?>"> -->
        <img src="./img/<?= $id ?>-<?= $i + 1 ?>.png" ?>

        <ul id="selection_container<?= $i; ?>">
        <?php shuffle($separate[$i])?>
          <?php  for ($u = 0; $u < 3; $u++) : ?>
              <li>
            <?=  $separate[$i][$u]['name_list'] . PHP_EOL; ?>
              </li>
              <?php  endfor; ?>
        </ul>
      </section>

  </div>


<?PHP endfor; ?>

<!-- <script src="quizy.js"></script> -->
</body>

</html>