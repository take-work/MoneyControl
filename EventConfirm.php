<html>
<head>
	<title>EventInput</title>
</head>
<body>

<?php
  header("Content-Type: text/html; charset=UTF-8");
  $db = mysqli_connect('localhost', 'root', 'i1090149', 'MoneyControl') or die(mysqli_connect_error());

  mysqli_set_charset($db, 'UTF8');

  $start = "$_POST['startYear']"-"$_POST['startMonth']"-"$_POST['startDay']";
  $end = "$_POST['endYear']"-"$_POST['endMonth']"-"$_POST['endDay']";

  $post = [$_POST['userName'], $_POST['eventName'], $start, $end, $_POST['price'], $_POST['staff'], $_POST['circle']];

  $sql = sprintf(
  	'INSERT INTO Events SET event_name="%s", host="%s", start_day=%d, end_day=%d, price=%d, staff=%d, circle=%d',
  	foreach ($post as $getValue) {
  	  mysqli_real_escape_string($db, $getValue);
  	}
  );
  echo "登録しました。";

?>

</body>
</html>
