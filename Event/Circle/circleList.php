<html>
<head>
	<title>サークル一覧</title>
</head>
<body>
  <font size="4">サークル一覧</font><br><br>

  <a href="circleInput.php"><input type="submit" name="createCircle" value="新しいサークルを作成する"></a>
  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Circles');
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>参加イベント</th>
        <th>サークル名</th>
        <th>売上</th>
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <tr>
        <td><?=htmlspecialchars($data['event_name'])?></td>
        <td align="center"><?=htmlspecialchars($data['circle_name'])?></td>
        <td><?=htmlspecialchars($data['host'])?></td>
        <td align="center"><?=htmlspecialchars($data['proceeds'])?></td>
        <td align="center"><a href="Update/dataUpdate.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">編集ページ</a></td>
        <td align="center"><a href="Delete/deleteConfirm.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>"><input type="submit" value="削除"></a></td>
      </tr>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../Money/TotalMoney.php">現在の金額状況</a><br>
  <a href="../Money/MoneyInput.php">金額情報の入力</a><br>
  <a href="EventInput.php">イベントの新規登録</a>

</body>
</html>
