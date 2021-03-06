<html>
<head>
	<title>イベントデータ更新完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $sql = sprintf(
      'UPDATE Events SET event_name="%s", host="%s", start_day="%s", end_day="%s", price=%d WHERE id = %d',
        mysqli_real_escape_string($db, $_POST['eventName']),
        mysqli_real_escape_string($db, $_POST['host']),
        mysqli_real_escape_string($db, $_POST['startDay']),
        mysqli_real_escape_string($db, $_POST['endDay']),
        mysqli_real_escape_string($db, $_POST['price']),
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "更新しました。";
  ?>

  <br><br>
  <a href="#" onClick="window.close(); return false;">イベント一覧に戻る</a><br>

</body>
</html>
