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
      'UPDATE Circles SET circle_name="%s", host="%s", proceeds=%d WHERE id = %d',
        mysqli_real_escape_string($db, $_POST['circleName']),
        mysqli_real_escape_string($db, $_POST['host']),
        mysqli_real_escape_string($db, $_POST['proceeds']),
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "更新しました。";
  ?>

  <br><br>
  <a href="../circleList.php">サークル一覧に戻る</a><br>
  <a href="../../Event/EventList.php">登録されているイベント</a>

</body>
</html>
