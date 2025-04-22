

<?php

function searchCityTime($city_name)
{
  require('config/cities.php');

  foreach ($cities as $city) { // city はシドニー、東京、とかってこと
    if ($city['name'] === $city_name) {
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      $time = $date_time->format('H:i');
      $city['time'] = $time;

      return $city;
    }
  }
}

      // new DateTime()→ PHPの組み込みクラスで、現在の日時を扱うためのオブジェクトを作成。
      // new DateTimeZone()→ PHPの組み込みクラスで、特定のタイムゾーンを指定する。DateTime クラスと組み合わせて使われることが多い。


      //   ✅ 必須ではないが、複数形・単数形を適切に使うとコードが分かりやすくなる ✅ リスト（配列）は複数形、個別のデータは単数形にするのが一般的なルール ✅ プログラムの動作には影響しないが、命名の整理に役立つ

// こういうのもできるよね
// $data = [
//     ['title' => 'Book A', 'price' => 1000],
//     ['title' => 'Book B', 'price' => 1500]
// ];
// foreach ($data as $item) {
//     echo $item['title']; // Book A → Book B と表示される
// }



