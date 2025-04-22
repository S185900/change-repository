<?php

// http://localhost/php01/config/result.php

// $my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES, 'UTF-8');
// $choices = htmlspecialchars($_POST['choices'], ENT_QUOTES, 'UTF-8');
// $number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');

// print "私の名前は" . "$my_name" . "<br />";
// print "希望の商品は" . "$choices" . "<br />";
// print "注文数は" . "$number" . "<br />";
// print "<br />";

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
