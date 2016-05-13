<html>
<head>
	<title>イベントデータの削除</title>
</head>
<body>
  <font size="4">下記のデータを削除します。よろしければ、「データの削除」から「削除する」ボタンをクリックしてください。</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $id = $_GET['id'];

    $data = mysqli_query($db, 'SELECT * FROM Events Where id =' . $id);
    $circleGet = mysqli_query($db, 'SELECT * FROM Circles Where event_id = '.$id);
    $circleNumber = $circleGet->num_rows;
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
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($data)) {

  ?>
      <form name="formInput" method="post" action="deleteComplete.php?actin=update&id=<?=htmlspecialchars($data['id'])?>">
        <tr>
          <td>
            <?=htmlspecialchars($data['event_name'])?>
          </td>

          <td>
            <?=htmlspecialchars($data['host'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['start_day'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['end_day'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['price'])?>
          </td>

          <td align="center">
            <?=htmlspecialchars($data['staff'])?>
          </td>

          <td align="center">
            <?php echo $circleNumber; ?>
          </td>

          <td align="center">
            <a href="deleteComplete.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>">
              <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>">
              <input type="submit" value="削除する">
            </a>
          </td>
        </tr>
      </form>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../EventList.php">現在のイベント一覧</a>

</body>
</html>
