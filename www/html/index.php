<?php
// $webroot = $_SERVER['DOCUMENT_ROOT'];
// include($webroot."/www/html/connect.php"); 

// require 'connect.php';





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

   <?PHP for ($i = 0; $i < 2; $i++) { ?>
   let content =
      "<section>" +
      `<h1><?= $i + 1; ?> . この地名はなんて読む</h1>` +
      
      `<img src="<?= img_arr[$i][0]; ?>" alt=" <?= img_arr[$i][1]; ?>">` +
      `<img src="${img_arr[i][0]}" alt="${img_arr[i][1]}">` +
      `<ul id="selection_container<?= $i; ?>"></ul>` +
      '<div class="resultContainer">' +
      `<h2 id="the_answer${i}" class="theAnswer"></h2>` +
      `<p id="what_is_answer${i}" class="whatIsAnswer"></p>` +
      "</div>" +
      "</section>";

   document.getElementById('quizy_writing_container').insertAdjacentHTML('beforeend', content);

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

<?PHP };?>

    <script src="quizy.js"></script>
</body>

</html>
