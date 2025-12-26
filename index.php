<html>
<head>
<meta charset="utf-8">
<title>1年振り返りアンケート</title>
</head>
<body>

<h3>1年振り返りアンケート</h3>

<form method="post" action="confirm.php">

  <p>
    Q1. 今年1年をひと言で表すと？
  </p>
  <!-- type = radio で同一nameにおける単一選択 -->
  <label><input type="radio" name="year_review" value="とても良い年だった"> とても良い年だった</label><br>
  <label><input type="radio" name="year_review" value="良い年だった"> 良い年だった</label><br>
  <label><input type="radio" name="year_review" value="まあまあ"> まあまあ</label><br>
  <label><input type="radio" name="year_review" value="大変だった"> 大変だった</label><br>
  <label><input type="radio" name="year_review" value="とても大変だった"> とても大変だった</label><br>

  <hr>

  <p>
    Q2. 今年よかったことは？（複数選択可）
  </p>
  <!-- checboxで複数選択、name="**[]"で配列として渡す -->
  <label><input type="checkbox" name="good[]" value="仕事・学業"> 仕事・学業</label><br>
  <label><input type="checkbox" name="good[]" value="健康"> 健康</label><br>
  <label><input type="checkbox" name="good[]" value="人間関係"> 人間関係</label><br>
  <label><input type="checkbox" name="good[]" value="趣味・余暇"> 趣味・余暇</label><br>
  <label><input type="checkbox" name="good[]" value="特にない"> 特にない</label><br>

  <hr>

  <p>
    Q3. 来年の目標があれば教えてください
  </p>
  <textarea name="next_year_goal" rows="4" cols="40"></textarea><br><br>
  <!-- 入力欄の大きさを4行40文字くらいに調整 -->

  <input type="submit" value="確認画面へ">

</form>

<hr>

<a href="view.php">集計結果を見る</a>

</body>
</html>