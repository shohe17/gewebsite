<?php 
   require_once('database.php');
   //  dbに接続 
   $db_manager = New DbManager();
   $db_manager->connect();
   // SQL実行
   $stmt = $db_manager->dbh->prepare('SELECT * FROM activity ORDER BY id desc');
   $stmt->execute();
   $activity = $stmt->fetchAll(); 
   // echo "<pre>";
   // // 変数の中身確認　console.log的な
   // var_dump($members);
   // // 処理を止める
   // // die;



// $activity = [
//     [
//       'title' => '新拠点開拓チーム',
//       'body' => '陸、海、空、あらゆる手段を駆使し、各場所に拠点を築くチーム。<br>厳しい話をするが、任務遂行のためならチームメンバーの生死は問わない「超成果主義型組織」。行く先々で多くの困難が待ち受けているが、これまでの経験や個々の能力を活かして前に進む姿はまるでジョジョの奇妙な冒険のようだ。<br>第一部はセブ島編、第二部は日本編、第三部はお楽しみに。',
//       'img' => 'src="./assets/images/moal.jpeg"'
//     ],
//     [
//       'title' => 'バスケットボールチーム',
//       'body' => 'チーム名はオムツファクトリー。常に初心を忘れないという意味を込めて命名され、メンバーは行く宛て無くセブ島を彷徨い、義務教育放棄したゴロツキどもの寄せ集め。<br>1勝8負と立ち上がりはレブロンが抜けたキャブズのようだが、これまでの経験や個々の能力を活かして前に進む姿はまるでジョジョの奇妙な冒険のようだ。',
//       'img' => 'src="./assets/images/omutsu.jpeg"'
//     ],
//     [
//       'title' => '宇宙開拓チーム',
//       'body' => 'ボスを探して陸、海、空を歩み続けていたら道に迷って宇宙に到達してしまったので、拠点開拓を進める1人チーム。<br>その後宇宙を様良い、後に彼が全知全能の神、アツ汁スペース大明神になるということは私しか知らない。<br> これまでの経験や個々の能力を活かして前に進む姿はまるでジョジョの奇妙な冒険のようだ。',
//       'img' => 'src="./assets/images/uchu.jpeg"'
//     ],
//   ];

