<?php
$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/www/html/connect.php"); 

echo "Hello, PHP on Docker!";

echo "good morning!";

phpinfo();