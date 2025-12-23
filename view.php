<?php
$lines = file("data.txt", FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>集計結果（一覧）</title>
</head>
<body>

<h3>集計結果（data.txtの中身）</h3>

<?php if (empty($lines)): ?>
  データがありません。<br>
<?php else: ?>
  <table border="1" cellpadding="6">
    <tr>
      <th>名前</th>
      <th>メール</th>
      <th>年齢</th>
    </tr>
    <?php foreach ($lines as $line): ?>
      <?php $row = explode(",", $line); ?>
      <tr>
        <td><?= $row[0] ?? "" ?></td>
        <td><?= $row[1] ?? "" ?></td>
        <td><?= $row[2] ?? "" ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>

<ul>
<li><a href="index.html">入力に戻る</a></li>
</ul>

</body>
</html>