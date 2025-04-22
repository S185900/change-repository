<?php
// docker > php > php.ini に、タイムゾーンという時間を管理する設定がされています。

// 連想配列（多次元配列）ここで時間を取得できるわけじゃないよ！
// 連想配列を使うメリットは、添え字ではなく、キーの名称を付けられることで、コードが読みやすくなることです。

// http://localhost/php02/config/cities.php にアクセスして、
// 記述した連想配列が参照できることを確認
// echo('<pre>');
// var_dump($cities);
// echo('</pre>');
// 確認を終えたら、削除してください。

$cities = [
  [
    'name' => 'シドニー',
    'time_zone' => 'Australia/Sydney',
    'img' => 'australia.jpg'
  ],
  [
    'name' => '東京',
    'time_zone' => 'Asia/Tokyo',
    'img' => 'japan.jpg'
  ],
  [
    'name' => '上海',
    'time_zone' => 'Asia/Shanghai',
    'img' => 'china.jpg'
  ],
  [
    'name' => 'モスクワ',
    'time_zone' => 'Europe/Moscow',
    'img' => 'russia.jpg'
  ],
  [
    'name' => 'ロンドン',
    'time_zone' => 'Europe/London',
    'img' => 'british.jpg'
  ],
  [
    'name' => 'ヨハネスブルグ',
    'time_zone' => 'Africa/Johannesburg',
    'img' => 'south-africa.jpg'
  ],
  [
    'name' => 'ニューヨーク',
    'time_zone' => 'America/New_York',
    'img' => 'america.jpg'
  ]
];



