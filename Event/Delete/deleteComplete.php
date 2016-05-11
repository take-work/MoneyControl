<html>
<head>
	<title>イベントデータ削除完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $sql = sprintf(
      'DELETE FROM Events WHERE id = %d',
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "データの削除が完了しました。";
  ?>

  <br><br>
  <a href="../EventInput.php">イベントの新規登録</a><br>
  <a href="../EventList.php">登録されているイベント</a><br>
  <a href="../../../Money/MoneyInput.php">金額情報の入力</a><br>
  <a href="../../../Money/TotalMoney.php">現在の金額状況</a>

</body>
</html>
