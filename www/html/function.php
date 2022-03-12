<?php


function sum_time ($pdo){
$stmt = $pdo->prepare("SELECT time from sum");
$stmt->execute();
$time = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 多次元連想配列の数値の合計値を出す
// https://qiita.com/k941226/items/90c9b8ab2fc997c6e983
return array_sum(array_column($time, 'time'));
}

function sum_month ($pdo){
  $stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m') AS month, time from sum");
  $stmt->execute();
  $month = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $sum=0;
  for ($i = 0; $i < count($month); $i++) {
    if ($month[$i]['month'] == date("Y-m")) {
    $sum += $month[$i]['time'];
    };
  }
  return $sum;
}








?>