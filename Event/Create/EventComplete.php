<html>
<head>
	<title>登録完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $start = $_POST['startYear']."/".$_POST['startMonth']."/".$_POST['startDay'];
    $end = $_POST['endYear']."/".$_POST['endMonth']."/".$_POST['endDay'];

    $sql = sprintf(
      'INSERT INTO Events SET event_name="%s", host="%s", start_day="%s", end_day="%s", price=%d, staff=%d',
        mysqli_real_escape_string($db, $_POST['eventName']),
	      mysqli_real_escape_string($db, $_POST['host']),
	      mysqli_real_escape_string($db, $start),
	      mysqli_real_escape_string($db, $end),
	      mysqli_real_escape_string($db, $_POST['price']),
	      mysqli_real_escape_string($db, $_POST['staff'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "登録しました。";
  ?>

  <br>
  <br>
  <a href="../EventList.php">登録されているイベント</a><br>
  <a href="../EventInput.php">イベントの新規登録</a>

</body>
</html>
