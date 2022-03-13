<?php


function sum_time($pdo)
{
  $stmt = $pdo->prepare("SELECT time from sum");
  $stmt->execute();
  $time = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 多次元連想配列の数値の合計値を出す
  // https://qiita.com/k941226/items/90c9b8ab2fc997c6e983
  return array_sum(array_column($time, 'time'));
}

// https://oreno-it3.info/archives/891
// https://techacademy.jp/magazine/22757
function sum_month($pdo)
{
  $stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m') AS month, time from sum");
  $stmt->execute();
  $month = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $sum = 0;
  for ($i = 0; $i < count($month); $i++) {
    if ($month[$i]['month'] == date("Y-m")) {
      $sum += $month[$i]['time'];
    };
  }
  return $sum;
}

function sum_day($pdo)
{
  $stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum");
  $stmt->execute();
  $day = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $sum = 0;
  for ($i = 0; $i < count($day); $i++) {
    if ($day[$i]['day'] == date("Y-m-d")) {
      $sum += $day[$i]['time'];
    };
  }
  return $sum;
}


$stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum");
$stmt->execute();
$day = $stmt->fetchAll(PDO::FETCH_ASSOC);


// var_dump(date("Y-m-d"));であればstring(10) "2022-03-03"のように表示されるが、for文で回すので日付が3だけと一桁になってしまうので、二けたにする関数
// for ($d=1; $d <= date('t') ; $d++) { 
//   # code...
// }
$array = [];

for ($i = 1; $i <= date('t'); $i++) {
  $padding[$i] = (str_pad(date("$i"), 2, 0, STR_PAD_LEFT));
  // var_dump(date("Y-m-$padding[$i]"));
  for ($u=0; $u < count($day) ; $u++) { 
    if(date("Y-m-$padding[$i]") === $day[$u]['day']){
    $day[$u]['time'];
    array_push($array,$day[$u]['time']);
  }
}
}
var_dump($array);

// var_dump($day[1]['day']);
// for ($i=1; $i <= date('t'); $i++) { 
//   var_dump(date("Y-m-$i"));
// }

// for($u=0; $u< count($day); $u++){
//   for($i=1; $i<=date('t'); $i++) {
//     if($day[$u]['day'] === date("Y-m-$i")){
//       var_dump(explode('-', $day[$u]['day']));
//       // var_dump((INT)$day[$u]['day']);
//     }
//   }
  
  // var_dump($day[$u]['day']);
  // var_dump($day);
  // var_dump(count($day));
  // var_dump(date("Y-m-$i"));
// }
// for($i=1; $i<=date('t'); $i++) {
//   $stmtZero[$i] = date('Y-m-d', strtotime($day[$i]['day']));
//   var_dump($stmtZero);
// // var_dump(date("Y-m-$i"));
// }
// var_dump($day[0]['day']);

// var_dump(date("Y-m-1"));
// var_dump($day[0]['day']);

// var_dump(date("Y-m-1") == $day[0]['day']);
