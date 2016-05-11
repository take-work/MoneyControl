<html>
<head>
	<title>イベントデータの更新</title>
</head>
<body>
  <font size="4">イベント編集</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

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
      <form id="formInput" name="formInput" method="post" action="Complete/EventComplete.php">
        <tr>
          <td><input name="eventName" type="text" id="eventName" value="<?=htmlspecialchars($data['event_name'])?>"/></td>
          <td><input name="host" type="text" id="host" value="<?=htmlspecialchars($data['host'])?>"/></td>
          <td align="center"><input name="start" type="text" id="startDay" value="<?=htmlspecialchars($data['start_day'])?>"/></td>
          <td align="center"><input name="endMonth" type="text" id="endDay" value="<?=htmlspecialchars($data['end_day'])?>"/></td>
          <td align="center"><input name="price" type="text" id="price" value="<?=htmlspecialchars($data['price'])?>"/></td>
          <td align="center"><input name="staff" type="text" id="staff" value="<?=htmlspecialchars($data['staff'])?>" size="5"/></td>
          <td align="center"><input name="circle" type="text" id="circle" value="<?=htmlspecialchars($data['circle'])?>" size="5"/></td>
          <td align="center"><a href="../Complete/EventUpdateComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">データを変更する</a></td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../EventInput.php">イベントの新規登録</a>
  <a href="../EventList.php">イベントの新規登録</a>
  <a href="../../Money/TotalMoney.php">現在の金額状況</a><br>
  <a href="../../Money/MoneyInput.php">金額情報の入力</a><br>

</body>
</html>
