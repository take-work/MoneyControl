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
        'INSERT INTO MoneyControl SET event_id=%d, hundred=%d, five_hundred=%d, thousand=%d, five_thousand=%d, million=%d',
          mysqli_real_escape_string($db, $_POST['id']),
          mysqli_real_escape_string($db, $_POST['hundred']),
          mysqli_real_escape_string($db, $_POST['five_hundred']),
	        mysqli_real_escape_string($db, $_POST['thousand']),
	        mysqli_real_escape_string($db, $_POST['five_thousand']),
          mysqli_real_escape_string($db, $_POST['million'])
      );

      mysqli_query($db, $sql) or die(mysqli_error($db));

      echo "登録しました。";
    ?>

    <br>
    <br>
    <a href="../../../Event/EventList.php">イベント一覧に戻る</a>

  </body>
</html>
