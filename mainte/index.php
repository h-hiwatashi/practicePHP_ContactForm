<?php

require "db_connection.php";


//ユーザー入力無し query
$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql); //sql実行　ステートメント

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '<pre>';

//ユーザー入力あり prepare bind execute
