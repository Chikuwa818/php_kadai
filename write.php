<?php
$year_review    = $_POST["year_review"];
$good           = $_POST["good"];
$next_year_goal = $_POST["next_year_goal"];

date_default_timezone_set('Asia/Tokyo'); //日本時間に固定
$time = date("Y-m-d H:i:s");

$good_str = implode("、", $good);

$file = fopen("data.txt", "a"); //"a" →　追記モード
$data = [$year_review, $good_str, $next_year_goal, $time];
fputcsv($file, $data);
// fputcsvで第二引数に指定された配列の中のデータを第一引数で指定したファイルに対して正しいcsvの形式で書き出す
// カンマや改行の有無をみて、あれば " " で囲むらしい、そして行末に 改行コード \n を自動で付けるそうな
fclose($file);

echo '
ご回答ありがとうございました。<br>
<a href="index.php">入力に戻る</a><br>
<a href="view.php">集計結果を見る</a>
';

// 以下で書き込んだ際、来年の目標に , が入っていると配列の要素として見られてしまい、表示がおかしくなった
// $file = fopen("data.txt", "a");
// fwrite($file, $str."\n");
// fclose($file);

?>


