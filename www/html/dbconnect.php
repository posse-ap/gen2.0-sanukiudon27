<?php

$dsn = 'mysql:dbname=webapp;host=db;';
$user = 'dondon';
$pass = 'webweb';

try{
  $pdo = new PDO($dsn, $user, $pass,
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
  ]
);
  // echo '接続成功っち';
} catch (PDOException $e){
$e->getMessage();
echo '接続失敗だぞん';
};

?>