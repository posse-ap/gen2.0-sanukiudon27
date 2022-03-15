<?php

$dsn = 'mysql:dbname=webapp;host=db;charset=utf8';
$user = 'dondon';
$pass = 'webweb';

// 例外処理　DBのエラーをチェックする
try{
  // データベースハンドル
// PDOを指定することで、PHPからデータベース（MYSQLに接続）
// PDOはどのベータベースでも一意に同じ操作ができる利点
  $dbh = new PDO($dsn, $user, $pass,
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
  ]
);

// $dbh = null;
  // echo '接続成功っち';
} catch (PDOException $e){
  // エラーメッセージを記載

echo '接続失敗だぞん' . $e->getMessage();
exit();
}
