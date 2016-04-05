<html>
<head>
	<title>イベント一覧</title>
</head>
<body>
  <font size="4">イベント一覧</font><br><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Events');
  ?>

  <table width="1000" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>イベント名</th>
        <th>主催者</th>
        <th>開始日</th>
        <th>終了日</th>
        <th>準備費用</th>
        <th>スタッフ数</th>
        <th>サークル数</th>
        <th>データ更新</th>
        <th>データ削除</th>
        <th>金額情報管理</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <tr>
        <td><?=htmlspecialchars($data['event_name'])?></td>
        <td><?=htmlspecialchars($data['host'])?></td>
        <td align="center"><?=htmlspecialchars($data['start_day'])?></td>
        <td align="center"><?=htmlspecialchars($data['end_day'])?></td>
        <td align="center"><?=htmlspecialchars($data['price'])?></td>
        <td align="center"><?=htmlspecialchars($data['staff'])?></td>
        <td align="center"><?=htmlspecialchars($data['circle'])?></td>
        <td align="center">未作成</td>
        <td align="center">未作成</td>
        <td align="center">未作成</td>
      </tr>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="TotalMoney.php">現在の金額状況</a><br>
  <a href="../MoneyInput.php">金額情報の入力</a><br>
  <a href="../EventInput.php">イベントの新規登録</a>

</body>
</html>
