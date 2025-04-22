
<!-- http://localhost/php01/index08.php -->


<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br />" . "<br />";

echo $people[0] . "<br />";
echo $people[1] . "<br />";
echo $people[2] . "<br />";

echo "<br />" . "<br />";





$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
echo "<br />" . "<br />";

echo $people['person1'] . "<br />";
echo $people['person2'] . "<br />";
echo $people['person3'] . "<br />";

echo "<br />" . "<br />";






$man = array(
  'man1' => 'Taro',
  'man2'  => 'Jiro',
  'man3'  => 'Saburo'
);

var_dump($man);
echo "<br />" . "<br />";

echo $man['man1'] . "<br />";
echo $man['man2'] . "<br />";
echo $man['man3'] . "<br />";
echo "<br />" . "<br />";




$nameelse = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

var_dump($nameelse);
echo "<br />" . "<br />";

echo $nameelse[0]['last_name'];
echo $nameelse[0]['first_name'];
echo $nameelse[0]['age'] . "<br />";
echo $nameelse[0]['gender'] . "<br />";
echo "<br />" . "<br />";

echo $nameelse[1]['last_name'] . "<br />";
echo $nameelse[1]['first_name'] . "<br />";
echo $nameelse[1]['age'] . "<br />";
echo $nameelse[1]['gender'] . "<br />";
echo "<br />" . "<br />";



$foreachexam = array('Taro', 'Jiro', 'Saburo');

foreach ($foreachexam as $foreachexam) {
  echo $foreachexam;
  echo '<br />';
}


echo "<br />" . "<br />";


$foreachexams = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($foreachexams as $foreachexams => $names) {
  print $foreachexams . 'は' . $names . 'です';
  echo '<br />';

  
}



echo "<br />" . "<br />";



$men_or_women = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['Jiro', 20, 'men'],
  ['Jiro', 20, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

var_dump($men_or_women);
echo "<br />" . "<br />";

foreach ($men_or_women as $men_or_women) {
    echo $men_or_women[0] . '(' . $men_or_women[1] . '歳)' . $men_or_women[2] . "<br />";
}












