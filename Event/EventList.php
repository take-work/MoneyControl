<html>
<head>
  <title>イベント一覧</title>
</head>
<body>
  <font size="4">イベント一覧</font><br><br>

  <?php
    mysqli_set_charset($db, 'UTF8');
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');
    require_once(dirname(__FILE__).'../../Money/moneyCalc.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    $calc = new moneyCalc;

    $recordSet = mysqli_query($db, 'SELECT * FROM Events');
  ?>

  <a href="Create/EventInput.php"><input type="submit" value="新しいイベントを作成する"></a><br><br>
  <table width="1300" border="10" cellspacing="0" cellpadding="8" bordercolor="#ffd700">
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

      $staffGet = mysqli_query($db, 'SELECT * FROM Staffs Where event_id = '.$data['id']);
      $staffNumber = $staffGet->num_rows;

      if($circleNumber == 0) {
        $moneyLink = "../Money/Create/moneyInput.php?actin=confirm&id=". $data['id'];
      } else {
        $moneyLink = "../Money/Update/dataUpdate.php?actin=confirm&id=". $data['id'];
      }

      $money = $calc->calculation($data['id']);
      $profit = $calc->profits($money,$data['price']);
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
          <a href="../Staff/staffList.php?actin=confirm&id=<?=htmlspecialchars($data['id'])?>"><?php echo $staffNumber; ?></a>
        </td>

        <td align="center">
          <a href="../Circle/circleList.php?actin=confirm&id=<?=htmlspecialchars($data['id'])?>"><?php echo $circleNumber; ?></a>
        </td>

        <td align="center">
          \<?=htmlspecialchars($data['price'])?>
        </td>

        <td align="center">
          <a href="<?php echo $moneyLink; ?>" target="_blank">\<?php echo $money; ?></a>
        </td>

        <td align="center">
          <?php
            if ($profit < 0) {
              echo '<font color="red"><b>\\'. $profit .'</b></font>';
            } elseif($profit > 0) {
              echo '<b>\\'. $profit .'</b>';
            } elseif($profit == 0) {
              echo '<font color="#1f90ff"><b>\\'. $profit .'</b></font>';
            }
          ?>
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
