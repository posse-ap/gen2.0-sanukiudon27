<?php

// phpinfo();

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
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]
  );
  
  // echo "<p>DB接続に成功しました。</p>";
  
  // SQL実行
  $sql = "SELECT * FROM big_question";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  
  // 結果の取得
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
} catch (PDOException $e) {
  echo "<p>DB接続エラー</p>";
  echo $e->getMessage();
  exit();
}
$pdo = null;


?>