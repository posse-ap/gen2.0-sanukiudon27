<?php

// phpinfo();
// declare(strict_types=1);  // 強い型付けの設定

// DB接続情報
$user = 'dondon';
$pass = 'mymy';
$dbnm = 'first';
$host = 'db';
$charset = 'utf8';
// 接続先DBリンク
$connect = "mysql:host={$host};dbname={$dbnm};charset={$charset}";
 
try {
  // DB接続
  // $pdo = new PDO($connect, $user, $pass);
  // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo = new PDO($connect, $user, $pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // 型変換が自動でされないようにエミュレートモードを変更
    PDO::ATTR_EMULATE_PREPARES=>false
  ]
  );
  
  if(isset($_GET['id'])) { $id = $_GET['id']; }
  


  // step5
  // $showed = "SELECT * FROM showed WHERE big_question_id = ?";
  $stmt2 = $pdo->prepare("SELECT * FROM showed");
  $stmt2->execute();
  $stmt3 = $pdo->prepare("SELECT name_list FROM showed");
  $stmt3->execute();

  $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result2);
  // print_r($result2);
  $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($result3);
  // var_dump($result2);
  echo $result2['id']['name'];
  for($i=0; $i<6; $i++){
    echo $result3[$i]['name_list'] . PHP_EOL;
  }
  
  // echo $result3[$id-1]['name_list'];
  // echo $result3[$id-2]['name_list'];
  // たかなわ　0


// echo $todo[$id - 1]['name'] . PHP_EOL;
// echo $todo[$id - 1]['name_list'];
// echo $todo[$id]['name_list'];
// echo $todo[$id + 1]['name_list'];
// echo $todo[$id + 2]['name_list'];
// echo $todo[$id + 3]['name_list'];
// echo $todo[$id + 4]['name_list'];

  
  // SQL実行
  $sql = "SELECT * FROM big_questions";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  // 結果の取得
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
  echo $result[0]['name'];
  echo $result;
  echo $result[$id - 1]['name'];
} catch (PDOException $e) {
  echo "<p>DB接続エラー</p>";
  echo $e->getMessage();
  exit();
}
$pdo = null;


?>