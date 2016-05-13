<html>
<head>
	<title>スタッフデータ更新完了</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $sql = sprintf(
      'UPDATE Staffs SET name="%s", position="%s", mail="%s", tel="%s", twitter="%s", experience=%d, rank=%d WHERE id = %d',
        mysqli_real_escape_string($db, $_POST['staffName']),
        mysqli_real_escape_string($db, $_POST['position']),
        mysqli_real_escape_string($db, $_POST['mail']),
        mysqli_real_escape_string($db, $_POST['tel']),
        mysqli_real_escape_string($db, $_POST['twitter']),
        mysqli_real_escape_string($db, $_POST['experience']),
        mysqli_real_escape_string($db, $_POST['rank']),
        mysqli_real_escape_string($db, $_POST['id'])
    );

    mysqli_query($db, $sql) or die(mysqli_error($db));

    echo "更新しました。";
  ?>

  <br><br>
  <a href="../../../Event/EventList.php">登録されているイベント</a><br>

</body>
</html>
