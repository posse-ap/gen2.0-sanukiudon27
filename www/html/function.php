<?php


function sum_time ($pdo){
$stmt = $pdo->prepare("SELECT time from sum");
$stmt->execute();
$time = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 多次元連想配列の数値の合計値を出す
// https://qiita.com/k941226/items/90c9b8ab2fc997c6e983
return array_sum(array_column($time, 'time'));
}






?>