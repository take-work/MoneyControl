<html>
<head>
	<title>イベント一覧</title>
</head>
<body>

<?php
header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect('localhost', 'root', 'i1090149', 'MoneyControl') or die(mysqli_connect_error());

mysqli_set_charset($db, 'UTF8');

$recordSet = mysqli_query($db, 'SELECT * FROM Events');
while ($data = mysqli_fetch_assoc($recordSet)) {
  echo $data['event_name'];
  echo '<br />';
}

?>

<a href="Confirm.php">現在の金額状況</a><br>
<a href="EventInput.php">イベントの新規登録</a><br>
<a href="EventList.php">登録されているイベント</a>

</body>
</html>