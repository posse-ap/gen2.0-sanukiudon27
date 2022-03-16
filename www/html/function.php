<?php


require 'dbconnect.php';


function sum_time($dbh)
{
  // ➀SQL文の準備、実行（問い合わせる）
  $stmt = $dbh->prepare("SELECT time from sum");
  // ➁SQL文の実行
  $stmt->execute();
  // ➁SQL文の結果取り出し
  $time = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // 多次元連想配列の数値の合計値を出す
  // https://qiita.com/k941226/items/90c9b8ab2fc997c6e983
  return array_sum(array_column($time, 'time'));
}

// https://oreno-it3.info/archives/891
// https://techacademy.jp/magazine/22757
function sum_month($dbh){
  // 全部のデータを持ってくるのではなくて（重い）、最低限の必要のデータを持ってくる　ランドセルと教科書 by shuto
  $stmt = $dbh->prepare("select sum(time) as month from basic where DATE_FORMAT(date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
  $stmt->execute();
  $month = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
//   var_dump($month);
// echo '</pre>';
return $month[0]['month'];
}

// 最初のやり方 月
//   $stmt = $dbh->prepare("SELECT DATE_FORMAT(date, '%Y-%m') AS month, time from sum");
//   $stmt->execute();
//   $month = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   $sum = 0;
//   for ($i = 0; $i < count($month); $i++) {
//     if ($month[$i]['month'] == date("Y-m")) {
//       $sum += $month[$i]['time'];
//     };
//   }
//   return $sum;
// }
function sum_day($dbh)
{
  $stmt = $dbh->prepare("select sum(time) as day from basic where DATE_FORMAT(date, '%Y%m%d') = DATE_FORMAT(NOW(), '%Y%m%d')");
  $stmt->execute();
  $day = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   echo '<pre>';
//   var_dump($day);
// echo '</pre>';
return $day[0]['day'];
}

// 元のやり方　日
// function sum_day($dbh)
// {
//   $stmt = $dbh->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum");
//   $stmt->execute();
//   $day = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   $sum = 0;
//   for ($i = 0; $i < count($day); $i++) {
//     if ($day[$i]['day'] == date("Y-m-d")) {
//       $sum += $day[$i]['time'];
//     };
//   }
//   return $sum;
// }


$sum = [];
// function chart_line ($dbh) {
for ($i = 1; $i <= date('t'); $i++) {
  $padding[$i] = (str_pad(date("$i"), 2, 0, STR_PAD_LEFT));
  // echo $padding[$i];
  $stmt = $dbh->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS day, time from sum WHERE DATE_FORMAT(date, '%Y-%m-%d') = '2022-03-$padding[$i]';");
  // $stmt->bindValue(1, $padding[$i]);
  $stmt->execute();
  $day = $stmt->fetchAll();
  // var_dump($day);
  array_push($sum, $day[0]['time']);
}


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
for($i=1; $i<=date('t'); $i++) {
  $stmtZero[$i] = date('Y-m-d', strtotime($day[$i]['day']));
  // var_dump(date("Y-m-$i"));
}

// var_dump($day[0]['day']);

// var_dump(date("Y-m-1"));
// var_dump($day[0]['day']);

// var_dump(date("Y-m-1") == $day[0]['day']);



// データを扱うのはSQLで、刺身には刺身包丁を
// 専門家に任せる、最適化の道を
// もっといい道ありそうなのに、ごり押しする癖

// 初めのやり方
// $each_lang = [];
// // 学習言語のグラフ
// $stmt_lang = $dbh->prepare("select lang_id, sum(time) from basic group by lang_id");
// $stmt_lang->execute();
// $lang = $stmt_lang->fetchAll();
// $stmt_lang_max = $dbh->prepare("SELECT max(lang_id) From sum");
// $stmt_lang_max->execute();
// $lang_max = $stmt_lang_max->fetchAll();
// for ($i = 0; $i < count($lang); $i++) {
//   // for ($u = 1; $u <= max($lang[$i]['lang_id']); $u++) {
//   for ($u = 1; $u <= $lang_max[0]["max(lang_id)"]; $u++) {
//     if ($lang[$i]['lang_id'] == $u) {
//       $each_lang[$u] += $lang[$i]['time'];
//     }
//   }
// }


// 学習言語のグラフ
// function lang_graph ($dbh, 'each') {
// $stmt_lang = $dbh->prepare("select distinct sum(basic.time) as time ,basic.lang_id,langs.language,langs.color FROM basic inner join langs on basic.lang_id = langs.langs_table_id group by lang_id order by time desc;");
// $stmt_lang->execute();
// $langs = $stmt_lang->fetchAll();

// foreach($langs as $lang){
//   echo '<pre>';
//   var_dump($lang);
//   echo '</pre>';
// return $lang['each']
  
// }
// }
$stmt_lang = $dbh->prepare("select distinct sum(basic.time) as time, langs.language, langs.color FROM basic inner join langs on basic.lang_id = langs.langs_table_id group by lang_id order by time desc;");
$stmt_lang->execute();
$langs = $stmt_lang->fetchAll();
$stmt_lang_max = $dbh->prepare("SELECT max(lang_id) as max From basic");
$stmt_lang_max->execute();
$lang_max = $stmt_lang_max->fetchAll();


// $each_contents = [];
// // 学習コンテンツのグラフ旧版
// $stmt_contents = $dbh->prepare("SELECT contents_id, time From sum");
// $stmt_contents->execute();
// $contents = $stmt_contents->fetchAll();
// $stmt_contents_max = $dbh->prepare("SELECT max(contents_id) From sum");
// $stmt_contents_max->execute();
// $contents_max = $stmt_contents_max->fetchAll();
// // print_r('<pre>');
// // var_dump($contents);
// // print_r('</pre>');
// for ($i = 0; $i < count($contents); $i++) {
//   // for ($u = 1; $u <= max($lang[$i]['lang_id']); $u++) {
//   for ($u = 1; $u <= $contents_max[0]["max(contents_id)"]; $u++) {
//     if ($contents[$i]['contents_id'] == $u) {
//       $each_contents[$u] += $contents[$i]['time'];
//     }
//   }
// }


// $each_contents = [];
// 学習コンテンツのグラフ
$stmt_contents = $dbh->prepare("select sum(basic.time) as time, contents.learn_contents, contents.contents_color  FROM basic inner join contents on basic.contents_id = contents.contents_table_id group by contents_id order by time desc;");
$stmt_contents->execute();
$contents = $stmt_contents->fetchAll();
$stmt_contents_max = $dbh->prepare("SELECT max(contents_id) From sum");
$stmt_contents_max->execute();
$contents_max = $stmt_contents_max->fetchAll();
// print_r('<pre>');
// var_dump($contents);
// print_r('</pre>');

