<?php
// http://localhost/php01/config/course.html


// htmlspecialchars()関数を使用して、HTMLにおける特殊文字をエンティティに変換します。
// これは、XSS（クロスサイトスクリプティング）攻撃を防ぐために重要です。

// ENT_QUOTES を指定すると、シングル (') とダブル (") の両方の引用符を変換します。
// 'UTF-8' は、文字エンコーディングを指定して、文字化けを防ぎます。


$company = htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8');
print "会社名は" . "$company" . "ですね。<br />";






