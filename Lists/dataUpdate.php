<html>
<head>
	<title>イベントデータの更新</title>
</head>
<body>
<?php
  header("Content-Type: text/html; charset=UTF-8");
  require_once(dirname(__FILE__).'../../database.php');

  $MyDB = new MyDB;
  $db = $MyDB->dbConnect();

  mysqli_set_charset($db, 'UTF8');

  $id = $_GET['id'];

  $data = mysqli_query($db, 'SELECT * FROM Events WHERE id = $id');

  echo $date['event_name'];
?>
</body>
</html>
