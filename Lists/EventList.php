<html>
<head>
	<title>イベント一覧</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Events');
    while ($data = mysqli_fetch_assoc($recordSet)) {
      echo $data['event_name'];
      echo '<br />';
    }

  ?>

  <br>
  <a href="TotalMoney.php">現在の金額状況</a><br>
  <a href="../MoneyInput.php">金額情報の入力</a><br>
  <a href="../EventInput.php">イベントの新規登録</a>

</body>
</html>