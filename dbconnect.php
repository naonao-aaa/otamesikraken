<?php
try{
  $db = new PDO('mysql:dbname=nao_original;host=localhost;port=8889;charset=utf8','root','root');
} catch(PDOException $e){
  print('DB接続エラー:' . $e->getMessage());
}