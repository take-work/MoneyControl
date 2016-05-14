<html>
<head>
	<title>金額情報更新完了</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $sql = sprintf(
      'UPDATE MoneyControl SET hundred=%d, five_hundred=%d, thousand=%d, five_thousand=%d, million=%d WHERE event_id = %d',
        mysqli_real_escape_string($db, $_POST['hundred']),
        mysqli_real_escape_string($db, $_POST['five_hundred']),
        mysqli_real_escape_string($db, $_POST['thousand']),
        mysqli_real_escape_string($db, $_POST['five_thousand']),
        mysqli_real_escape_string($db, $_POST['million']),
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "更新しました。";
  ?>

  <br><br>
  <a href="../../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
