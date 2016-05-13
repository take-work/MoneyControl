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
        'INSERT INTO Staffs SET event_id=%d, name="%s", position="%s", mail="%s", tel="%s", twitter="%s", experience="%s", rank=%d',
          mysqli_real_escape_string($db, $_POST['id']),
          mysqli_real_escape_string($db, $_POST['staffName']),
          mysqli_real_escape_string($db, $_POST['position']),
          mysqli_real_escape_string($db, $_POST['mail']),
          mysqli_real_escape_string($db, $_POST['tel']),
          mysqli_real_escape_string($db, $_POST['twitter']),
          mysqli_real_escape_string($db, $_POST['experience']),
          mysqli_real_escape_string($db, $_POST['rank'])
      );

      mysqli_query($db, $sql) or die(mysqli_error($db));

      echo "登録しました。";
    ?>

    <br>
    <br>
    <a href="../../Event/EventList.php">登録されているイベント</a>
  </body>
</html>
