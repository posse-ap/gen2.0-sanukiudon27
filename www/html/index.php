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
          <?php shuffle($separate[$i]); ?>
          <?php for ($u = 0; $u < 3; $u++) : ?>
            <li id="<?php echo $i ?>-<?php echo $u; ?>">
            <!-- <?= $separate5[$i][$u]['valid']; ?> -->
            
              <?= $separate[$i][$u]['name_list']; ?>
            </li>
          <?php endfor; ?>
        </ul>
        <div class="resultContainer">
          <h2 id="the_answer<?= $i; ?>" class="theAnswer"></h2>
          <p id="what_is_answer<?= $i; ?>" class="whatIsAnswer"></p>
        </div>
      </section>
      <?php var_dump($separate[$i][$id]['name_list']); ?>
    <?php endfor; ?>
  </div>
  <script>
    // <?php
        // foreach($separate[$i]['name_list'] as $sepa) :

        ?>

    const correct_selection = document.getElementById("<?php echo $i ?>-1");
    const wrong_selection = document.getElementById(`wrong_selection${i}`);
    const wrong2_selection = document.getElementById(`wrong2_selection${i}`);
    const the_answer = document.getElementById(`the_answer${i}`);
    const what_is_answer = document.getElementById(`what_is_answer${i}`);


    // shuffle_choice.forEach(element => {
    //     let li = document.createElement('li');
    //     li.innerHTML = element;
    //     selection_container.appendChild(li);
    //     if (element === selection_arr[i][0]) {
    //        li.id = `correct_selection${i}`;
    //     }
    //     else if (element === selection_arr[i][1]) {
    //        li.id = `wrong_selection${i}`;
    //     }
    //     else {
    //        li.id = `wrong2_selection${i}`;
    //     }
    //  }
  </script>



  <!-- <script src="quizy.js"></script> -->
</body>

</html>