<html>
<head>
	<title>イベント一覧</title>
</head>
<body>
  <font size="4">イベント一覧</font><br><br>

  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Events');
  ?>

  <a href="Create/EventInput.php"><input type="submit" value="新しいイベントを作成する"></a><br><br>
  <table width="1300" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>開始日</th>
        <th>終了日</th>
        <th>イベント名</th>
        <th>主催者</th>
        <th>スタッフ数</th>
        <th>サークル数</th>
        <th>準備費用</th>
        <th>合計売上</th>
        <th>純利益</th>
        <th>データの編集</th>
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
      $circleGet = mysqli_query($db, 'SELECT * FROM Circles Where event_id = '.$data['id']);
      $circleNumber = $circleGet->num_rows;
  ?>
      <tr>
        <td align="center">
          <?=htmlspecialchars($data['start_day'])?>
        </td>

        <td align="center">
          <?=htmlspecialchars($data['end_day'])?>
        </td>

        <td>
          <?=htmlspecialchars($data['event_name'])?>
        </td>

        <td>
          <?=htmlspecialchars($data['host'])?>
        </td>

        <td align="center">
          <a href="../Staff/staffList.php?actin=confirm&id=<?=htmlspecialchars($data['id'])?>"><?=htmlspecialchars($data['staff'])?></a>
        </td>

        <td align="center">
          <a href="../Circle/circleList.php?actin=confirm&id=<?=htmlspecialchars($data['id'])?>"><?php echo $circleNumber; ?></a>
        </td>

        <td align="center">
          \<?=htmlspecialchars($data['price'])?>
        </td>


        <td align="center">
          未作成
        </td>

        <td align="center">
          未作成
        </td>

        <td align="center">
          <a href="Update/dataUpdate.php?actin=update&id=<?=htmlspecialchars($data['id'])?>" target="_blank"><input type="submit" value="編集ページ"></a>
        </td>

        <td align="center">
          <a href="Delete/deleteConfirm.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>" target="_blank"><input type="submit" value="削除"></a>
        </td>
      </tr>
  <?php
    }
  ?>
    </tbody>
  </table>
  <p>* 参加スタッフ・参加サークルの管理は、「スタッフ数」「サークル数」の数字から確認・編集できます。</p>

</body>
</html>
