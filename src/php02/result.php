<?php

// search_city_time.phpファイル読み込み・一度だけ読み込めばいいもの（推奨）
require_once('functions/search_city_time.php');

$tokyo = searchCityTime('東京');
// まず東京の時間を取得しておく（各国のデータと比較するため）

$city = htmlspecialchars($_GET['city'], ENT_QUOTES); 
//index.php 'city'の値を取得
// HTMLタグや特殊文字を無害化（セキュリティ対策）

$comparison = searchCityTime($city); //コードがスッキリする、見やすくする、都度変数にまとめる、可読性を上げるため、形状に合わせて

// $tokyo → 「東京のデータ」（左側に表示）
// $comparison → 「ユーザーが選んだ都市のデータ」（右側に表示）
// これらを画面で並べて表示することで、結果として 「東京と〇〇都市を比較する」 という機能が完成するんです！
// comparisonとかじゃなくて、シンプルにright_cardとかでもいいかも？

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<!-- http://localhost/php02/result.php/ -->

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <div class="result__content"> <!-- 国旗のくくり -->
      <div class="result-cards"> <!-- 国旗のコンテンツ2つ横並べ -->

        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $tokyo['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $tokyo['time']?>
            </p>
          </div>
        </div>


        <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $comparison['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
