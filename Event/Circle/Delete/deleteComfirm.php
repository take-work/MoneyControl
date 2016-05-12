<html>
<head>
	<title>サークルデータの削除</title>
</head>
<body>
  <font size="4">下記のデータを削除します。よろしいですか？</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $data = mysqli_query($db, 'SELECT * FROM Circles Where id =' . $id);
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>サークル名</th>
        <th>主催者</th>
        <th>売上</th>
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($data)) {
  ?>
      <form name="formInput" method="post" action="deleteComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td><?=htmlspecialchars($data['circle_name'])?></td>
          <td><?=htmlspecialchars($data['host'])?></td>
          <td align="center"><?=htmlspecialchars($data['proceeds'])?></td>
          <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>">
          <td align="center"><a href="deleteComplete.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>"><input type="submit" value="削除する"></a></td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../EventInput.php">イベントの新規登録</a><br>
  <a href="../EventList.php">現在のイベント一覧</a><br>
  <a href="../../Money/TotalMoney.php">現在の金額状況</a><br>
  <a href="../../Money/MoneyInput.php">金額情報の入力</a>

</body>
</html>
