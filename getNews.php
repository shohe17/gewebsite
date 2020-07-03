<?php
  require_once('database.php');
//  dbに接続 
$db_manager = New DbManager();
$db_manager->connect();
// SQL実行
$stmt = $db_manager->dbh->prepare('SELECT * FROM news ORDER BY id desc');
$stmt->execute();
$news = $stmt->fetchAll(); 
// echo "<pre>";
// // 変数の中身確認　console.log的な
// var_dump($members);
// // 処理を止める
// // die;



//  $news = [
//   [
//     'date' => '2020年5月15日', 
//     'body' => 'AとIがSをおいて、マニラ乗り継ぎで無事東京に帰国し、それぞれの旅路についた。これまでの経験や個々の能力を活かして前に進む姿はまるでジョジョの奇妙な冒険のようだ。',
//   ],
//   [
//     'date' => '2020年6月12日', 
//     'body' => 'Sが韓国乗り継ぎで無事関西に帰国。これまでの経験や能力を活かして前に進む姿はまるでジョジョの奇妙な冒険のようだ。',
//   ],
// ];