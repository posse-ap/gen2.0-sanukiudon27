<?php


require 'dbconnect.php';


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

// $current_date=date('Y-m');
// // $date_format=
// $stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum WHERE DATE_FORMAT(date, '%Y-%m') = ?");
// $stmt->bindValue(1,$current_date);
// $stmt->execute();
// $day = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print_r('<pre>');
// var_dump($day);
// print_r('</pre>');

// $day[0]['day'] == date('Y-m-d');
// for ($i=1; $i <= date('t') ; $i++) { 
//   var_dump(date("Y-m-$i"));
// }
$sum =[];
// function chart_line ($pdo) {
for ($i = 1 ; $i <= date('t'); $i++) { 
  $padding[$i] = (str_pad(date("$i"), 2, 0, STR_PAD_LEFT));
  // echo $padding[$i];
  $stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum WHERE DATE_FORMAT(date, '%Y-%m-%d') = '2022-03-$padding[$i]';");
  // $stmt->bindValue(1, $padding[$i]);
  $stmt->execute();
  $day = $stmt->fetchAll();
  // var_dump($day);
  array_push($sum, $day[0]['time']);
  // echo $i;
// }

// var_dump($sum); 
// var_dump($day);
// for ($i=0; $i < 20; $i++) { 
//   echo $sum[$i];
// }
}


// var_dump($sum);\





// var_dump(date("Y-m-d"));であればstring(10) "2022-03-03"のように表示されるが、for文で回すので日付が3だけと一桁になってしまうので、二けたにする関数
// for ($d=1; $d <= date('t') ; $d++) { 
//   # code...
// }
// $array = [];
// $month_day = []; 

// for ($i = 1; $i <= date('t'); $i++) {
//   $padding[$i] = (str_pad(date("$i"), 2, 0, STR_PAD_LEFT));
//   array_push($month_day, date("Y-m-$padding[$i]"));
//   for ($u=0; $u < count($day) ; $u++) { 
//     if($month_day[$i-1] == $day[$u]['day']){
//       var_dump($day[$u]['time']);
//       // print_r('yes');
//     }
//   }
// }
// print_r('<pre>');
// // var_dump($month_day);
// // var_dump($day);
// print_r('</pre>');

// var_dump($day[0]['day']);

      // var_dump(date('t'));
//     $day[$u]['time'];
//     array_push($array, $day[$u]['time']);
//   }else{
// array_push($array,'0');

//   }
  
// }
// }

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
