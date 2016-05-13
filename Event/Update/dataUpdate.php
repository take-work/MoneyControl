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
        <th>開始日</th>
        <th>終了日</th>
        <th>主催者</th>
        <th>準備費用</th>
        <th>データの変更</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($data)) {
  ?>
      <form name="formInput" method="post" action="UpdateComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td>
            <input name="eventName" type="text" value="<?=htmlspecialchars($data['event_name'])?>"/>
          </td>

          <td>
            <input name="host" type="text" value="<?=htmlspecialchars($data['host'])?>"/>
          </td>

          <td align="center">
            <input name="startDay" type="text" value="<?=htmlspecialchars($data['start_day'])?>"/>
          </td>

          <td align="center">
            <input name="endDay" type="text" value="<?=htmlspecialchars($data['end_day'])?>"/>
          </td>

          <td align="center">
            <input name="price" type="text" value="<?=htmlspecialchars($data['price'])?>"/>
          </td>

          <td align="center">
            <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>">
            <input type="submit" value="データを変更する">
          </td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../EventList.php">現在のイベント一覧</a><br>
  <a href="../Create/EventInput.php">イベントの新規登録</a><br>

</body>
</html>
