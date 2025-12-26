<?php
$rows = array_map('str_getcsv', file("data.txt", FILE_IGNORE_NEW_LINES));
//file("data.txt", FILE_IGNORE_NEW_LINES) data.txtを１行ずつ読む、ignoreで\nを消す
//str_getcsv() csvのルールで正しく読みとる　" " で囲まれた中の , は区切りと見なさない
//array_map('str_getcsv', 配列)  配列の全要素に第一引数で設定した関数を適用する
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>集計結果（一覧）</title>
</head>
<body>

<h3>集計結果</h3>

<?php if (empty($rows)): ?>
  データがありません。<br>
<?php else: ?>
  <table border="1" cellpadding="6">
    <tr>
      <th>今年1年の総評</th>
      <th>よかったこと</th>
      <th>来年の目標</th>
      <th>回答時間</th>
    </tr>

    <?php
foreach ($rows as $row) {
    echo "<tr>";
    echo "<td>" . ($row[0] ?? "") . "</td>";
    echo "<td>" . ($row[1] ?? "") . "</td>";
    echo "<td>" . ($row[2] ?? "") . "</td>";
    echo "<td>" . ($row[3] ?? "") . "</td>";
    echo "</tr>";
}
//?? →　null合体演算子　左側が存在しなかったら右側を使う
?>
  </table>
<?php endif; ?>

<ul>
  <li><a href="index.php">入力に戻る</a></li>
</ul>

</body>
</html>