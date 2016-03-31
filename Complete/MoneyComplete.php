<html>
<head>
	<title>登録完了画面</title>
</head>
<body>

<?php
header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect('localhost', 'root', 'i1090149', 'MoneyControl') or die(mysqli_connect_error());

mysqli_set_charset($db, 'UTF8');

$inputDay = $_POST['Year']."-".$_POST['Month']."-".$_POST['Day'];

$sql = sprintf(
	'INSERT INTO Calculation SET UserName="%s", EventName="%s", InputDay="%s", Price=%d',
	mysqli_real_escape_string($db, $_POST['UserName']),
	mysqli_real_escape_string($db, $_POST['EventName']),
	mysqli_real_escape_string($db, $inputDay),
	mysqli_real_escape_string($db, $_POST['Price'])
);

mysqli_query($db, $sql) or die(mysqli_error($db));

echo "登録しました。";

?>
<br>

<a href="../EventInput.php">イベントの新規登録</a><br>
<a href="../MoneyInput.php">金額情報の入力</a><br>
<a href="../Lists/TotalMoney.php">現在の金額状況</a><br>
<a href="../Lists/EventList.php">登録されているイベント</a>

</body>
</html>