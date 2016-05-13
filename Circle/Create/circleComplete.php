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

    $sql = sprintf(
      'INSERT INTO Circles SET event_id=%d, number=%d, space="%s", circle_name="%s", host="%s", staff=%d, desk=%d, chaise=%d',
        mysqli_real_escape_string($db, $_POST['id']),
        mysqli_real_escape_string($db, $_POST['number']),
        mysqli_real_escape_string($db, $_POST['space']),
	      mysqli_real_escape_string($db, $_POST['circleName']),
	      mysqli_real_escape_string($db, $_POST['host']),
        mysqli_real_escape_string($db, $_POST['staff']),
        mysqli_real_escape_string($db, $_POST['desk']),
        mysqli_real_escape_string($db, $_POST['chaise'])
    );

    $circleCount = sprintf(
      'SELECT COUNT * FROM Circles WHERE event_id = '. $_POST['id']
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "登録しました。";
  ?>

  <br>
  <br>
  <a href="../../Event/EventList.php">登録されているイベント</a>

</body>
</html>
