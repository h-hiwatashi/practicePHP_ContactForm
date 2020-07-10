<?php

const DB_HOST = 'mysql:dbname=udemy_php;host127.0.0.1';
const DB_USER = 'php_user';
const DB_PASSWORD = 'Password02';

 //例外処理 UnexpectedValueException

 try{
   $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
   echo '接続成功';
 } catch(PDOException $e){
   echo '接続失敗' . $e->getMessage() . "¥n";
   exit();
 }
