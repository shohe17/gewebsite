<?php 
  require_once('getActivity.php');
  require_once('getMembers.php');
  require_once('getNews.php');


  $num = rand(0, 2);
  $languages = ['spaingo', 'tyuugokugo', 'rosiago'];
  // ニュースをデータベースからとってきて画面に表示する
  // データベースに接続する
  // SQLを実行する
  // 実行した結果を変数に代入する
  // 変数の内容を画面に表示する
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Gold Experience</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/app.js" defer></script>
</head>
<body>
  <div class="header">
    <div class="header-logo">
      <img src="./assets/images/GE.png" alt="logo">
    </div>
    <div>
      <ul>
        <li><a href="#">組織情報</a></li>
        <li><a href="#">活動内容</a></li>
        <li><a href="#">組織構成員</a></li>
        <li><a href="#">ニュース</a></li>
      </ul>
    </div>
    <div class="languages">
      <a href="#" class="language"><?php echo $languages[$num] ?></a>
      <span class="border">|</span>
      <a href="#" class="language">English</a>
    </div>
  </div>

  <div class="main">
    <div class="mission-wrapper">
      <button id="button1">ボタン拡大</button>
      <div class="conteiner">
        <h1 class="mission-heading">私たちが生まれたのは400兆分の1の確率<br><br>非日常の経験、ゴールドエクスペリエンスをしてみませんか？</h1>
        <div class="position-mission">
          <a  id="res1" href="#" class="btn-mission">Our mission</a>
        </div>
      </div>
    </div>

    <div class="activity-wrapper">
      <button id="button2">消すボタン</button>
      <div class="conteiner">
        <h1 class="activity-title">活動内容</h1>
      </div>
      <div class="images">
        <div class="images">
          <?php foreach($activity as $action): ?>
            <div class="image">
              <p class="name-activity"><?php echo $action['action'] ?></p>
              <img id="res2" class="thumbnail300 res" src="<?php echo $action['image_at'] ?>" alt="beach">
              <p class="text-contents"><?php echo $action['description'] ?></p>
              <a href="#" class="btn seemore">See more</a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>

    <div class="member-wrapper">
      <button class="button3">発動しないボタン</button>
      <div class="conteiner">
        <h1 class="member-title">組織構成員</h1>
      </div>
      <div class="characters">
        <?php foreach($members as $member ): ?>
          <div class="character">
            <img class="thumbnail2" src="<?php echo $member['image_at'] ?>" alt="<?php echo $member['name'] ?>">
          </div>
        <a href="#" class="btn-team">See more</a>
        <?php endforeach ?>
      </div>
    </div>

    <div class="news-wrapper">
      <h1 class="heading-news">ニュース</h1>
      <ul>
        <?php foreach($news as $article): ?>
          <li>
            <time datetime="2020-5-15T15:00"><?php echo $article['date'] ?></time>
            <div class="news-contents"><a href="#"><?php echo $article['description'] ?></a></div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <div class="conteiner">
    <div class="btn-area">
      <a href="#" class="btn-news">See more</a>
    </div>
  </div>
  <!-- <div class="footer">
    <div class="footer-title">
      <a class="footer-link-box-title">組織情報</a>
      <ul class="flex-list">
        <li class="footer-link-box-item"><a href="#">ミッション</a></li>
        <li class="footer-link-box-item"><a href="#">所在地</a></li>
      </ul>  
    </div>

  </div> -->

  <div class="footer">
    <div class="footer-top">
      <div class="footer-link-box">
        <a class="footer-link-box-title">組織情報</a>
        <ul class="flex-list">
          <li class="footer-link-box-item"><a href="#">ミッション</a></li>
          <li class="footer-link-box-item"><a href="#">所在地</a></li>
        </ul>
      </div>
      <div class="footer-link-box">
        <a class="footer-link-box-title">活動内容</a>
        <ul class="flex-list">
          <li class="footer-link-box-item"><a href="#">新拠点開拓チーム</a></li>
          <li class="footer-link-box-item"><a href="#">バスケットボールチーム</a></li>
          <li class="footer-link-box-item"><a href="#">宇宙探索チーム</a></li>
        </ul>
      </div>
      <div class="footer-link-box">
        <a class="footer-link-box-title">組織構成員</a>
        <ul class="flex-list">
          <li class="footer-link-box-item"><a href="#">構成員紹介</a></li>
        </ul>
      </div>
      <div class="footer-link-box">
        <a class="footer-link-box-title">ニュース</a>
        <ul class="flex-list">
          <li class="footer-link-box-item"><a href="#">ニュース</a></li>
          <li class="footer-link-box-item"><a href="#">ブログ</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html> 


