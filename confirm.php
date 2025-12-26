<?php
$year_review    = $_POST["year_review"];
$good           = $_POST["good"];          // checkboxは配列（good[]）で受け取る
$next_year_goal = $_POST["next_year_goal"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>入力内容の確認</title>
</head>
<body>

<h3>入力内容の確認</h3>

<p>
  <b>今年1年をひと言で</b><br>
  <?php echo $year_review; ?>
</p>

<hr>

<p>
  <b>よかったこと（複数選択）</b><br>
  <?php foreach ($good as $v): ?><!-- foreach($a as $b)で、$a(配列)の要素を繰り返し順番に取り出し、その要素の値を$bに代入する -->
    ・<?php echo $v; ?><br>
  <?php endforeach; ?>
  <!-- endforeachでforeachの処理の終了点を規定 -->
</p>

<hr>

<p>
  <b>来年の目標</b><br>
  <?php echo $next_year_goal; ?>
</p>

<hr>

<form method="post" action="write.php">
  <input type="hidden" name="year_review" value="<?php echo $year_review; ?>">

  <?php foreach ($good as $v): ?>
    <input type="hidden" name="good[]" value="<?php echo $v; ?>">
  <?php endforeach; ?>

  <input type="hidden" name="next_year_goal" value="<?php echo $next_year_goal; ?>">

  <input type="submit" value="この内容で提出する">
</form>
<!-- input type = "hidden"でブラウザに表示をさせない -->

<ul>
  <li><a href="index.php">入力に戻る</a></li>
</ul>

</body>
</html>