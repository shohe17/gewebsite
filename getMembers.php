<?php 
   require_once('database.php');
   //  dbに接続 
   $db_manager = New DbManager();
   $db_manager->connect();
   // SQL実行
   $stmt = $db_manager->dbh->prepare('SELECT * FROM members ORDER BY id desc');
   $stmt->execute();
   $members = $stmt->fetchAll(); 
   // echo "<pre>";
   // // 変数の中身確認　console.log的な
   // var_dump($members);
   // // 処理を止める
   // // die;


   