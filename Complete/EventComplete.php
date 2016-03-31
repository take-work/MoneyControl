<html>
<head>
	<title>登録完了画面</title>
</head>
<body>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    $db = mysqli_connect('localhost', 'root', 'i1090149', 'MoneyControl') or die(mysqli_connect_error());

    mysqli_set_charset($db, 'UTF8');

    $start = $_POST['startYear']."-".$_POST['startMonth']."-".$_POST['startDay'];
    $end = $_POST['endYear']."-".$_POST['endMonth']."-".$_POST['endDay'];

    $sql = sprintf(
      'INSERT INTO Events SET event_name="%s", host="%s", start_day="%s", end_day="%s", price=%d, staff=%d, circle=%d',
	  mysqli_real_escape_string($db, $_POST['eventName']),
	  mysqli_real_escape_string($db, $_POST['host']),
	  mysqli_real_escape_string($db, $start),
	  mysqli_real_escape_string($db, $end),
	  mysqli_real_escape_string($db, $_POST['price']),
	  mysqli_real_escape_string($db, $_POST['staff']),
	  mysqli_real_escape_string($db, $_POST['circle'])			
    );
    echo "登録しました。";

    mysqli_query($db, $sql) or die(mysqli_error($db));
  ?>

  <a href="../EventInput.php">イベントの新規登録</a><br>
  <a href="../MoneyInput.php">金額情報の入力</a><br>
  <a href="../Lists/TotalMoney.php">現在の金額状況</a><br>
  <a href="../Lists/EventList.php">登録されているイベント</a>

</body>
</html>
