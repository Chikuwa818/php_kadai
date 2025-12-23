<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];

// data.txt に保存（1行1回答）
$data = $name . "," . $mail . "," . $age . "\n";
file_put_contents("data.txt", $data, FILE_APPEND);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>

お名前：<?=$name?><br>
EMAIL：<?=$mail?><br>
年齢：<?=$age?><br>

<ul>
<li><a href="index.html">index.htmlに戻る</a></li>
</ul>

</body>
</html>