<html>
<head>
	<title>合計金額確認</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");

    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Calculation');
    while ($data = mysqli_fetch_assoc($recordSet)) {
      $Count++;
      echo $data['Price'];
      echo '<br />';

      if ($Count == 1) {
  	    $TotalMoney = $data['Price'];
      } else {
  	    $TotalMoney += $data['Price'];
      }
    }

    echo "<br>";
    echo "合計金額:" . $TotalMoney;

  ?>

  <br>
  <a href="../Event/EventInput.php">イベントの新規登録</a><br>
  <a href="../Event/EventList.php">登録されているイベント</a><br>
  <a href="MoneyInput.php">金額情報の入力</a>

<body>
</html>
