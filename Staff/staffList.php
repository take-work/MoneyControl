<html>
<head>
	<title>スタッフ一覧</title>
</head>
<body>
  <font size="4">スタッフ一覧</font><br><br>

  <form id="createStaff" name="createStaff" method="post" action="Create/staffInput.php?actin=create&id=<?=htmlspecialchars($_GET['id'])?>">
    <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>"></input>
    <input type="submit" name="createCircle" value="新しいスタッフを追加する。">
  </form>
  <?php
    header("Content-Type: text/html; charset=UTF-8");
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    mysqli_set_charset($db, 'UTF8');

    $recordSet = mysqli_query($db, 'SELECT * FROM Staffs WHERE event_id = "'. $_GET['id'] .'"ORDER BY rank');
  ?>

  <table width="1200" border="1" cellspacing="1" cellpadding="8">
    <tbody>
      <tr>
        <th>氏名(HN)</th>
        <th>持ち場</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>Twitter</th>
        <th>経験</th>
        <th>役職</th>
        <th>データの編集</th>
        <th>データの削除</th>
      </tr>
  <?php
    while ($data = mysqli_fetch_assoc($recordSet)) {
  ?>
      <tr>
        <td align="center">
          <?=htmlspecialchars($data['name'])?>
        </td>

        <td align="center">
          <?=htmlspecialchars($data['position'])?>
        </td>

        <td align="center">
          <?=htmlspecialchars($data['mail'])?>
        </td>

        <td>
          <?=htmlspecialchars($data['tel'])?>
        </td>

        <td align="center">
          <?=htmlspecialchars($data['twitter'])?>
        </td>

        <td align="center">
          <?php
            if ($data['experience'] == 1) {
              echo "経験有";
            } else {
              echo "経験無";
            }
          ?>
        </td>

        <td align="center">
          <?php
            switch ($data['rank']) {
              case '1':
                echo "主催";
                break;
              case '2':
                echo "副主催";
                break;
              case '3':
                echo "なし";
                break;
            }
          ?>
        </td>

        <td align="center">
          <a href="Update/dataUpdate.php?actin=update&id=<?=htmlspecialchars($data['id'])?>" target="_blank">編集ページ</a>
        </td>

        <td align="center">
          <a href="Delete/deleteComfirm.php?actin=delete&id=<?=htmlspecialchars($data['id'])?>" target="_blank"><input type="submit" value="削除"></a>
        </td>
      </tr>
  <?php
    }
  ?>
    </tbody>
  </table>

  <br>
  <a href="../Event/EventList.php">イベント一覧に戻る</a>

</body>
</html>
