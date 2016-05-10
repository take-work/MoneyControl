<html>
<head>
	<title>イベントデータの更新</title>
</head>
<body>
  <font size="4">イベント一覧</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $data = mysqli_query($db, 'SELECT * FROM Events Where id =' . $id); 
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>イベント名</th>
        <th>主催者</th>
        <th>開始年月日</th>
        <th>終了年月日</th>
        <th>準備費用</th>
        <th>スタッフ数</th>
        <th>サークル数</th>
        <th>データの変更</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($data)) {
  ?>
      <tr>
        <td><input name="eventName" type="text" id="eventName" value="<?=htmlspecialchars($data['event_name'])?>" size="20" maxlength="255" /></td>
        <td><input name="host" type="text" id="host" value="<?=htmlspecialchars($data['host'])?>" size="20" maxlength="255" /></td>
        <td align="center"><input name="start" type="text" id="startMonth" value="<?=htmlspecialchars($data['start_day'])?>" size="4" maxlength="4" /></td>
        <td align="center"><input name="endMonth" type="text" id="endMonth" value="<?=htmlspecialchars($data['end_day'])?>" size="4" maxlength="4" /></td>
        <td align="center"><input name="price" type="text" id="price" value="<?=htmlspecialchars($data['price'])?>" size="10" maxlength="10" /></td>
        <td align="center"><input name="staff" type="text" id="staff" value="<?=htmlspecialchars($data['staff'])?>" size="5" maxlength="10" /></td>
        <td align="center"><input name="circle" type="text" id="circle" value="<?=htmlspecialchars($data['circle'])?>" size="5" maxlength="10" /></td>
        <td align="center"><a href="dataUpdate.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">データを変更する</a></td>
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
