<?php
header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect('localhost', 'root', 'i1090149', 'MoneyControl') or die(mysqli_connect_error());

mysqli_set_charset($db, 'UTF8');

$sql = sprintf(
	'INSERT INTO Calculation SET UserName="%s", EventName="%s", Price=%d',
	mysqli_real_escape_string($db, $_POST['UserName']),
	mysqli_real_escape_string($db, $_POST['EventName']),
	mysqli_real_escape_string($db, $_POST['Price'])
);

mysqli_query($db, $sql) or die(mysqli_error($db));

echo "登録しました。";

?>
