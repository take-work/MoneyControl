<html>
<head>
	<title>イベントデータ更新完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $sql = sprintf(
      'UPDATE Events SET event_name="%s", host="%s", start_day="%s", end_day="%s", price=%d, staff=%d, circle=%d',
        mysqli_real_escape_string($db, $_POST['eventName']),
        mysqli_real_escape_string($db, $_POST['host']),
        mysqli_real_escape_string($db, $_POST['start_day']),
        mysqli_real_escape_string($db, $_POST['end_day']),
        mysqli_real_escape_string($db, $_POST['price']),
        mysqli_real_escape_string($db, $_POST['staff']),
        mysqli_real_escape_string($db, $_POST['circle'])
      'WHERE id =' . $id
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "更新しました。";
  ?>

  <br>
  <a href="../EventInput.php">イベントの新規登録</a><br>
  <a href="../Lists/EventList.php">登録されているイベント</a>
  <a href="../MoneyInput.php">金額情報の入力</a><br>
  <a href="../Lists/TotalMoney.php">現在の金額状況</a><br>

</body>
</html>
