<?php
// DB接続情報
$user = 'dondon';
$pass = 'mymy';
$dbnm = 'first';
$host = 'db';
$charset = 'utf8';
// 接続先DBリンク
$connect = "mysql:host=db;dbname=first;charset=utf8";

try {
  // DB接続
  // $pdo = new PDO($connect, $user, $pass);
  // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo = new PDO($connect, $user, $pass,
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
    // 型変換が自動でされないようにエミュレートモードを変更
    // https://unskilled.site/%E3%81%AA%E3%82%93%E3%81%A7php%E3%81%AFmysql%E3%81%8B%E3%82%89%E3%81%AE%E3%83%AA%E3%82%B6%E3%83%AB%E3%83%88%E3%81%8Cint%E5%9E%8B%E3%81%AE%E3%81%AF%E3%81%9A%E3%81%AA%E3%81%AE%E3%81%ABstring%E5%9E%8B/
  ]
);
// header('Content-type: image/png');
  
  if(isset($_GET['id'])) { $id = $_GET['id']; }
  
  

  // step5
  // $showed = "SELECT * FROM showed WHERE big_question_id = ?";
  $stmt2 = $pdo->prepare("SELECT name, id FROM showed WHERE id = $id");
  $stmt2->execute();
  $stmt3 = $pdo->prepare("SELECT id, name_list, valid FROM showed WHERE id = $id");
  $stmt3->execute();
  $stmt4 = $pdo->prepare("SELECT image,question_id FROM showed WHERE id = $id");
  $stmt4->execute();
  $stmt5 = $pdo->prepare("SELECT valid FROM showed WHERE id = $id");
  $stmt5->execute();

  $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
  $result4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
  $result5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result3);
// echo $result5[1]['valid'];

  // $count = count($result2);

$separate = array_chunk($result3, 3);
// $separate_valid = array_chunk($result5, 3);
// var_dump($separate);
// $shuffles = shuffle($separate);




  // for($i=0; $i<$count; $i++){
    //   echo $result3[$i]['name_list'] . PHP_EOL;
    // }

    // SQL実行
    $sql = "SELECT * FROM big_questions";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  // 結果の取得
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo "<p>DB接続エラーだよん</p>";
  echo $e->getMessage();
  exit();
}
$pdo = null;
?>

<!-- <pre>
  <?php var_dump($separate)?>
</pre>  -->