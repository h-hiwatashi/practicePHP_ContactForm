<?php//PDOでDB接続

const DB_HOST = 'mysql:dbname=udemy_php;host127.0.0.1;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'Password02';

 //例外処理 exception

//連想配列
//例外を検知
//SQLインジェクション失敗
 try{
   $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_EMULATE_PREPARES => false,
   ]);
   echo '接続成功';
 } catch(PDOException $e){
   echo '接続失敗' . $e->getMessage() . "¥n";
   exit();
 }
