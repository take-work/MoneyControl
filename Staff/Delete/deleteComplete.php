<html>
<head>
	<title>スタッフデータ削除完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $sql = sprintf(
      'DELETE FROM Staffs WHERE id = %d',
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "データの削除が完了しました。";
  ?>

  <br><br>
  <a href="#" onClick="window.close(); return false;">スタッフ一覧に戻る</a><br>
  <a href="../../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
